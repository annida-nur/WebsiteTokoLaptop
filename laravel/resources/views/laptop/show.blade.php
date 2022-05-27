<!DOCTYPE html>
<html>
  <head>
    <title>Detail</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../node_modules/bootstrap/dist/assets/Powpow.png">
    <link href="../../node_modules/bootstrap/dist/css/css.css" rel="stylesheet">
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
      height: 100%;
      line-height: 1.8;
    }
    /* Full height image header */
    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url("../node_modules/bootstrap/dist/assets/bg1.png");
      min-height: 100%;
    }
    .bar .button {
      padding: 16px;
    }
    </style>
    </head>
    <body>
    <!-- Navbar (sit on top) -->
    <!-- Navbar (sit on top) -->
    <div class="top">
      <div class="bar blue-grey card">
        <!-- Right-sided navbar links -->
        <div class="right hide-small">
        <a class="bar-item button wide"> <img src="../../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow Laptop</a>
          <div class="right hide-small">
            <a href="{{ route('laptop.create') }}" class="bar-item button"><i class="fa fa-check-circle"></i> INPUT DATA</a>
            <a href="{{ route('laptop.data') }}" class="bar-item button"><i class="fa fa-th"></i> DATA LAPTOP</a>  
            <a href="{{ route('login.logout') }}" class="bar-item button"><i class="fa fa-sign-out"></i> LOG OUT</a> 
          </div>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->
        <a href="javascript:void(0)" class="bar-item button right hide-large hide-medium" onclick="open()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="sidebar bar-block black card animate-left hide-medium hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="close()" class="bar-item button large padding-16">Close &times;</a>
        <a href="" onclick="close()" class="bar-item button">INPUT DATA</a>
        <a href="" onclick="close()" class="bar-item button">DATA LAPTOP</a>
        <a href="" onclick="close()" class="bar-item button">Log Out</a>
    </nav>

    <!-- Promo Section - "We know design" -->
    <div class="container" style="align:center; padding:100px 48px">
    <div class="container light-grey" style="padding:90px 16px">
        <div class="row-padding">
            <div class="col m6">
                @if(session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
                @endif
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Merek </b></td>
                        <td>{{$laptop->Merek}}</td>
                    </tr>
                    <tr>
                        <td><b>Tipe </b></td>
                        <td>{{$laptop->Tipe}}</td>
                    </tr>
                    <tr>
                        <td><b>Processor </b></td>
                        <td>{{$laptop->Processor}}</td>
                    </tr>
                    <tr>
                        <td><b>Tipe RAM </b></td>
                        <td>{{$laptop->Tipe_RAM}}</td>
                    </tr>
                    <tr>
                        <td><b>Kapasitas RAM </b></td>
                        <td>{{$laptop->Kapasitas_RAM}}</td>
                    </tr>
                    <tr>
                        <td><b>Tipe Memori </b></td>
                        <td>{{$laptop->Tipe_Memori}}</td>
                    </tr>
                    <tr>
                        <td><b>Kapasitas Memori </b></td>
                        <td>{{$laptop->Kapasitas_Memori}}</td>
                    </tr>
                    <tr>
                        <td><b>Harga </b></td>
                        <td>{{$laptop->Harga}}</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col m6">
                <br>
                <center><h3> <b> Gambar Produk </b></h3></center>
                <br>
                <img class="image round-large" src="{{url('')}}/{{$laptop->image}}" alt="Buildings" width="700" height="394">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <a href="{{ route('laptop.edit',['laptop' => $laptop->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="center dark-grey" style="padding:1px 16px">
    <br>
      <section class="footer-top">
            <div class="container">
              <div class="row"> 
                <div class="col-md-3">
                  <div class="widget">
                    <div class="widget-title">
                      <h3>Alamat</h3><br>
                    </div> 
                    <div class="widget-content">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273540210531!2d109.24713381420617!3d-7.434954175312005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sInstitut%20Teknologi%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1639502248417!5m2!1sid!2sid"
                      width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div> 
                  </div> 
                </div> 
                
                <div class="col-md-3">
                  <div class="widget">
                    <div class="widget-title">
                      <h3>Customer Service</h3><br>
                    </div> 
                    <div class="widget-content">
                        <div class="socmed" style="color:white">
                          <h4><a href=""><i class="fa fa-whatsapp"></i> Whatsapp</a></h4>
                          <h4><p><a href=""><i class="fa fa-instagram"></i> Instagram</a></p></h4>
                          <h4><p><a href=""><i class="fa fa-telegram"></i> Telegram</a></p></h4>
                        </div>
                    </div> 
                  </div> 
                </div> 
              </div> 
            </div> 
          </section>
          <section class="footer-bottom">
            <br>
            <div class="container flex-center">
                <p class="copy">Copyright 2021 &copy; All Right Reserved. Powpow</p>
            </div>
          </section>
  </footer>
  
  <script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }
  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");
  function open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }
  // Close the sidebar with the close button
  function close() {
      mySidebar.style.display = "none";
  }
  </script>
  </body>
</html>