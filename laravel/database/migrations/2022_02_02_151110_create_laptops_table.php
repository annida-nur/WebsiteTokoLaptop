<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('Merek');
        $table->string('Tipe');
        $table->text('Processor');
        $table->string('Tipe_RAM');
        $table->string('Kapasitas_RAM');
        $table->string('Tipe_Memori');
        $table->string('Kapasitas_Memori');
        $table->integer('Harga');
        $table->timestamps();
        });
    }
    
}