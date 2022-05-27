<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;
use File;


class LaptopController extends Controller
{
    public function create()
    {
        return view('laptop.create');
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Merek' => 'required|min:3|max:50',
            'Tipe' => 'required|min:3|max:50,unique:laptops',
            'Processor' => 'required',
            'Tipe_RAM' => 'required',
            'Kapasitas_RAM' => 'required',
            'Tipe_Memori' => 'required',
            'Kapasitas_Memori' => 'required',
            'Harga' => 'required',
            'image' => 'required|file|image|max:1000',
        ]);
        $laptop = new Laptop();
        $laptop->Merek = $validateData['Merek'];
        $laptop->Tipe = $validateData['Tipe'];
        $laptop->Processor = $validateData['Processor'];
        $laptop->Tipe_RAM = $validateData['Tipe_RAM'];
        $laptop->Kapasitas_RAM = $validateData['Kapasitas_RAM'];
        $laptop->Tipe_Memori = $validateData['Tipe_Memori'];
        $laptop->Kapasitas_Memori = $validateData['Kapasitas_Memori'];
        $laptop->Harga = $validateData['Harga'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('assets/images',$namaFile);
            $laptop->image = $path;
        }
        $laptop->save();
        $request->session()->flash('pesan','Penambahan data berhasil');
        return redirect()->route('laptop.data');
    }

    public function update(Request $request, Laptop $laptop)
    {
        $validateData = $request->validate([
            'Merek' => 'required|min:3|max:50',
            'Tipe' => 'required|min:3|max:50,unique:laptops',
            'Processor' => 'required',
            'Tipe_RAM' => 'required',
            'Kapasitas_RAM' => 'required',
            'Tipe_Memori' => 'required',
            'Kapasitas_Memori' => 'required',
            'Harga' => 'required',
            'image' => 'file|image|max:1000',
        ]);
        $laptop->Merek = $validateData['Merek'];
        $laptop->Tipe = $validateData['Tipe'];
        $laptop->Processor = $validateData['Processor'];
        $laptop->Tipe_RAM = $validateData['Tipe_RAM'];
        $laptop->Kapasitas_RAM = $validateData['Kapasitas_RAM'];
        $laptop->Tipe_Memori = $validateData['Tipe_Memori'];
        $laptop->Kapasitas_Memori = $validateData['Kapasitas_Memori'];
        $laptop->Harga = $validateData['Harga'];
        if($request->hasFile('image'))
        {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            File::delete($laptop->image);
            $path = $request->image->move('assets/images',$namaFile);
            $laptop->image = $path;
        }
        $laptop->save();
        $request->session()->flash('pesan','Perubahan data berhasil');
        return redirect()->route('laptop.show',['laptop' => $laptop->id]);
    }

    public function destroy(Request $request, Laptop $laptop)
    {
        File::delete($laptop->image);
        $laptop->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('laptop.data');
    }

    public function data()
    {
        $laptops = Laptop::all();
        return view('laptop.data',['laptops' => $laptops]);
    }

    public function show($laptop_id)
    {
        $result = Laptop::findOrFail($laptop_id);
        return view('laptop.show',['laptop' => $result]);
    }

    public function edit($laptop_id)
    {
        $result = Laptop::findOrFail($laptop_id);
        return view('laptop.edit',['laptop' => $result]);
    }

}
