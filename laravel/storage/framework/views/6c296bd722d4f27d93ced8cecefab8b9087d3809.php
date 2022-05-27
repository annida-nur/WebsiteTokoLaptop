<!DOCTYPE html>
<html>
  <head>
    <title>PowPow Teams - Pemilihan Laptop Terbaik</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../node_modules/bootstrap/dist/css/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/assets/Powpow.png" rel="icon">
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
        <a class="bar-item button wide"> <img src="../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow Laptop</a>
          <div class="right hide-small"> 
            <a href="<?php echo e(route('login.index')); ?>" class="bar-item button"><i class="fa fa-sign-in"></i>  Log In</a>
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
        <a href="" onclick="close()" class="bar-item button">Log Out</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 display-container grayscale-min">
        <div class="display-left text-white" style="padding:48px">
            <br><br><br><br><br><br><span class="xxlarge" style="color:seashell;"><b>Let's Find The Best Choose For Your Laptop</b></span>
            <br><br><br><br><br><br>
        </div> 
    </header>

    <br><br>
    <!-- Promo Section - "We know design" -->
    <div class="container light-grey" style="padding:90px 16px">
        <div class="row-padding">
            <div class="col m6">
                <h3>Apa itu Laptop ?</h3>
                <p>Laptop atau komputer jinjing adalah sebuah komputer versi kecil yang sangat mudah untuk dibawa bepergian (mobile). 
                Laptop menjadi device pendukung yang penting dalam melakukan kegiatan sehari-hari baik pekerjaan atau pendidikan 
                dengan kelebihan bentuk yang lebih kecil dan mudah dibawa kemana saja.
                Komputer jenis ini mengalami banyak perkembangan yang akhirnya melahirkan banyak jenisnya lagi seperti 
                notebook, netbook, ultrabook, dan lainnya dengan spesifikasi yang beragam.</p>
            </div>
            <div class="col m6">
                <img class="image round-large" src="../node_modules/bootstrap/dist/assets/lepp.jpg" alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>
    <br>

    <!-- Work Section -->
    <div class="container" style="padding:80px 16px">
        <div class="row-padding">
            <h3 class="center">Spesifikasi Laptop yang harus kamu tahu !</h3>
            <br>
            <ol>
                <li><strong>Processor</strong><br/>
                    Terdapat jenis brand yaitu Intel dan AMD.
                    Pada processor Intel terbaru dapat dilihat dari segi brand modifier, contoh I3 dan I7, 
                    dimana makin tinggi nilai dibelkang I maka makin tinggi spesifikasi processornya.
                    Prosesor AMD Ryzen memiliki harga yang murah dibandingkan prosesor Intel Core.<br>
                </li>
                <li><strong>RAM</strong><br>
                    Ada beberapa jenis RAM laptop yaitu DRAM, SDRAM, RDRAM, SRAM, EDORAM, FPM DRAM, Flash RAM, VGRAM, DDR SDRAM, dan SO-DIM. 
                    RAM ini dibedakan berdasarkan arsitekturnya yang berpengaruh pada efektivitas kinerja RAM<br>
                </li>
                <li><strong>Storage</strong><br />
                    Memory laptop memiliki 2 jenis yaitu SSD dan HDD. 
                    Yang membedakan keduanya adalah kecepatan untuk mengambil dan menyimpan data. 
                    Pada SSD dapat bekerja lebih cepat dan ukuran fisiknya lebih kecil. 
                    Sementara pada HDD ukurannya cenderung lebih besar dan cenderung mudah rusak<br>
                </li>
                <li><strong>VGA Card</strong><br />
                    Berfungsi untuk mengolah graphic atau pengolahan gambar baik 2D maupun 3D.
                    Beberapa tipe VGA Card, diantaranya S3 ViRGE, ATI RAGE 3D
                    NVIDIA NV3, NVIDIA NV4, NVIDIA GEFORCE Series, ATI RADEON Series<br>
                </li>
                <li><strong>Ukuran Layar</strong><br />
                    Ukuran layar meliputi semua ujung / sisi yang ada pada frame layar, hitung dari ujung kiri bawah ke ujung kanan atas.
                    Ukurantersebur berkisar dari 10 inci hingga 20 inci.
                    Di Indonesia didominasi dengan ukuran rata-rata layar 14 inch adalah 720p atau 1280 x 720.<br>
                </li>
            </ol>
        </div>
    </div>
  
    <!-- Choose Section -->
    <div class="container light-grey padding-64">
        <p class="center xlarge">Hal-Hal yang Perlu Diperhatikan dalam Pemilihan Laptop</p>
        <div class="row-padding center" style="margin-top:64px">
        <div class="quarter">
            <i class="fa fa-shield margin-bottom jumbo center"></i>
            <p class="large">Kebutuhan</p>
            <p>Kategori kebutuhan berupa ringan atau berat. Seperti sekedar untuk mengetik, nonton film, browsing
            atau bermain game, design grafis, video editing dan sebagainya.</p>
        </div>
        <div class="quarter">
            <i class="fa fa-thumbs-o-up margin-bottom jumbo"></i>
            <p class="large">Merk</p>
            <p>Membeli laptop dengan merek yang sudah terkenal sangat membantu dalam mengetahui kualitas 
            dari merek laptop tersebut.</p>
        </div>
        <div class="quarter">
            <i class="fa fa-cogs margin-bottom jumbo"></i>
            <p class="large">Service Center</p>
            <p>Lokasi service center yang tidak jauh dari tempat kita tinggal, dapat
            mempermudah ketika terjadi kendala atau kerusakan pada laptop tersebut di kemudian hari.
            </p>
        </div>
        <div class="quarter">
            <i class="fa fa-retweet margin-bottom jumbo"></i>
            <p class="large">Konektivitas</p>
            <p>Memperhatikan banyak perangkat smabungan pada laptop, seperti USB, 
            HDMI, SD Card, Headset, LAN, Wifi atau Hotspot, Bluethoot, dan sambungan lainnya.
            </p> <br<br><br><br>
        </div>
        <div class="quarter">
            <i class="fa fa-credit-card margin-bottom jumbo"></i>
            <p class="large">Garansi</p>
            <p>Semakin lama waktu garansi yang diberikan, maka semakin bagus pula laptopnya</p>
        </div>
        <div class="quarter">
            <i class="fa fa-check-circle-o margin-bottom jumbo"></i>
            <p class="large">Cek Kondisi Laptop</p>
            <p>Periksa kembali kondisi fisik laptop tersebut, pastikan tidak terdapat 
            kerusakan-kerusakan.</p>
        </div>
        <div class="quarter">
            <i class="fa fa-repeat margin-bottom jumbo"></i>
            <p class="large">Try On</p>
            <p>Manfaat laptop contoh yang disediakan agar dapat
                melihat performa dari laptop.</p>
        </div>
        <div class="quarter">
            <i class="fa fa-money margin-bottom jumbo"></i>
            <p class="large">Harga Jual Kembali</p>
            <p>Memperhatikan harga jual kembali laptop jika di kemudian hari 
            ingin menjual laptop tersebut.</p>
        </div>
        </div>
    </div><br><br>

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
</html><?php /**PATH C:\xampp\htdocs\ANNIDA_240_SC1\sc1_annida-nur-islami_19102240\powpow\laravel\resources\views/welcome.blade.php ENDPATH**/ ?>