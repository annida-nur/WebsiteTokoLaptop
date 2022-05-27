<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../node_modules/bootstrap/dist/css/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/assets/Powpow.png" rel="icon">
    <title>Data Laptop</title>
</head>
<body>
    <!-- Navbar (sit on top) -->
    <div class="top">
      <div class="bar blue-grey card">
        <!-- Right-sided navbar links -->
        <div class="right hide-small">
        <a class="bar-item button wide"> <img src="../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow Laptop</a>
          <div class="right hide-small">
            <a href="<?php echo e(route('laptop.create')); ?>" class="bar-item button"><i class="fa fa-check-circle"></i> INPUT DATA</a>  
            <a href="<?php echo e(route('login.logout')); ?>" class="bar-item button"><i class="fa fa-sign-out"></i> LOG OUT</a> 
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
      <a href="" onclick="close()" class="bar-item button">LOG OUT</a>
      <a href="" onclick="close()" class="bar-item button">INPUT DATA</a>
    </nav>


    <div class="container" style="align:center; padding:90px 5px">
        <div class="row">
            <div class="col-12">
            <div class="py-4 d-flex justify-content-end align-items-center">
                <h2 class="mr-auto">Data Laptop</h2>
            </div>
            <?php if(session()->has('pesan')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('pesan')); ?>

            </div>
            <?php endif; ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Tipe</th>
                        <th>Merek</th>
                        <th>Processor</th>
                        <th>Tipe RAM</th>
                        <th>Kapasitas RAM</th>
                        <th>Tipe Memori</th>
                        <th>Kapasitas Memori</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $laptops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laptop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th><?php echo e($loop->iteration); ?></th>
                        <td><img height="30px" src="<?php echo e(url('')); ?>/<?php echo e($laptop->image); ?>" class="rounded" alt=""></td>
                        <td><a href="<?php echo e(route('laptop.show',['laptop' => $laptop->id])); ?>"><?php echo e($laptop->Tipe); ?></a></td>
                        <td><?php echo e($laptop->Merek); ?></td>
                        <td><?php echo e($laptop->Processor); ?></td>
                        <td><?php echo e($laptop->Tipe_RAM); ?></td>
                        <td><?php echo e($laptop->Kapasitas_RAM); ?></td>
                        <td><?php echo e($laptop->Tipe_Memori); ?></td>
                        <td><?php echo e($laptop->Kapasitas_Memori); ?></td>
                        <td><?php echo e($laptop->Harga); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="10" class="text-center">Tidak ada data</td>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
      // Toggle between showing and hiding the sidebar when clicking the menu icon
      var mySidebar = document.getElementById("mySidebar");
      function open() {
        if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
        } else {
          mySidebar.style.display = 'block';
        }
      }
      //Close the sidebar dengan close button
      function close() {
          mySidebar.style.display = "none";
      }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\ANNIDA_240_SC1\sc1_annida-nur-islami_19102240\powpow\laravel\resources\views/laptop/data.blade.php ENDPATH**/ ?>