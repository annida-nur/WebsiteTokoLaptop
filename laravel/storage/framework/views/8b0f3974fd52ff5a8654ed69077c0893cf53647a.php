<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Input Data Laptop</title>
    <link rel="icon" href="../../node_modules/bootstrap/dist/assets/Powpow.png">
    <link href="../../node_modules/bootstrap/dist/css/css.css" rel="stylesheet">
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <!-- Navbar (sit on top) -->
    <div class="top">
      <div class="bar blue-grey card">
        <!-- Right-sided navbar links -->
        <div class="right hide-small">
        <a class="bar-item button wide"> <img src="../../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow Laptop</a>
          <div class="right hide-small">
            <a href="<?php echo e(route('laptop.data')); ?>" class="bar-item button"><i class="fa fa-th"></i> DATA LAPTOP</a> 
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
      <a href="" onclick="close()" class="bar-item button">DATA LAPTOP</a>
    </nav>

    <div class="container" style="align:center; padding:100px 48px">
    <div class="container light-grey" style="padding:90px 16px">
        <div class="row-padding">
            <div class="col m6">
            <div class="container pt-4 bg-white">
              <div class="row" style="padding:0px 0px">
                <div class="col m6">
                  <h1>Input Data Laptop</h1>
                  <hr>
                  <form action="<?php echo e(route('laptop.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label for="nim">Merek</label>
                      <input type="text"
                      class="form-control <?php $__errorArgs = ['Merek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      id="Merek" name="Merek" value="<?php echo e(old('Merek')); ?>">
                      <?php $__errorArgs = ['Merek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="nama">Tipe</label>
                      <input type="text"
                      class="form-control <?php $__errorArgs = ['Tipe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      id="Tipe" name="Tipe" value="<?php echo e(old('Tipe')); ?>">
                      <?php $__errorArgs = ['Tipe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="Processor">Processor</label>
                      <select class="form-control" name="Processor" id="Processor">
                        <option value="Intel Core i3 Gen 5"
                        <?php echo e(old('Processor')=='Intel Core i3 Gen 5' ? 'selected': ''); ?> >
                        Intel Core i3 Gen 5
                        </option>
                        <option value="Intel Core i5 Gen 5"
                        <?php echo e(old('Processor')=='Intel Core i5 Gen 5' ? 'selected': ''); ?> >
                        Intel Core i5 Gen 5
                        </option>
                        <option value="Intel Core i7 Gen 5"
                        <?php echo e(old('Processor')=='Intel Core i7 Gen 5' ? 'selected': ''); ?> >
                        Intel Core i7 Gen 5
                        </option>
                        <option value="Intel Core i9 Gen 5"
                        <?php echo e(old('Processor')=='Intel Core i9 Gen 5' ? 'selected': ''); ?> >
                        Intel Core i9 Gen 5
                        </option>
                        <option value="Intel Core i3 Gen 7"
                        <?php echo e(old('Processor')=='Intel Core i3 Gen 7' ? 'selected': ''); ?> >
                        Intel Core i3 Gen 7
                        </option>
                        <option value="Intel Core i5 Gen 7"
                        <?php echo e(old('Processor')=='Intel Core i5 Gen 7' ? 'selected': ''); ?> >
                        Intel Core i5 Gen 7
                        </option>
                        <option value="Intel Core i7 Gen 7"
                        <?php echo e(old('Processor')=='Intel Core i7 Gen 7' ? 'selected': ''); ?> >
                        Intel Core i7 Gen 7
                        </option>
                        <option value="Intel Core i9 Gen 7"
                        <?php echo e(old('Processor')=='Intel Core i9 Gen 7' ? 'selected': ''); ?> >
                        Intel Core i9 Gen 7
                        </option>
                      </select>
                      <?php $__errorArgs = ['Processor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="Processor">Tipe RAM</label>
                      <select class="form-control" name="Tipe_RAM" id="Tipe_RAM">
                        <option value="DRAM"
                        <?php echo e(old('Tipe_RAM')=='DRAM' ? 'selected': ''); ?> >
                        DRAM
                        </option>
                        <option value="RDRAM"
                        <?php echo e(old('Tipe_RAM')=='RDRAM' ? 'selected': ''); ?> >
                        RDRAM
                        </option>
                        <option value="EDORAM"
                        <?php echo e(old('Tipe_RAM')=='EDORAM' ? 'selected': ''); ?> >
                        EDORAM
                        </option>
                        <option value="DDR3"
                        <?php echo e(old('Tipe_RAM')=='DDR3' ? 'selected': ''); ?> >
                        DDR3
                        </option>
                        <option value="DDR4"
                        <?php echo e(old('Tipe_RAM')=='DDR4' ? 'selected': ''); ?> >
                        DDR4
                        </option>
                        <option value="DDR5"
                        <?php echo e(old('Tipe_RAM')=='DDR5' ? 'selected': ''); ?> >
                        DDR5
                        </option>
                      </select>
                      <?php $__errorArgs = ['Tipe_RAM'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="Processor">Kapasitas RAM</label>
                      <select class="form-control" name="Kapasitas_RAM" id="Kapasitas_RAM">
                        <option value="4 GB"
                        <?php echo e(old('Kapasitas_RAM')=='4 GB' ? 'selected': ''); ?> >
                        4 GB
                        </option>
                        <option value="8 GB"
                        <?php echo e(old('Kapasitas_RAM')=='8 GB' ? 'selected': ''); ?> >
                        8 GB
                        </option>
                        <option value="16 GB"
                        <?php echo e(old('Kapasitas_RAM')=='16 GB' ? 'selected': ''); ?> >
                        16 GB
                        </option>
                      </select>
                      <?php $__errorArgs = ['Kapasitas_RAM'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="Processor">Tipe Memori</label>
                      <select class="form-control" name="Tipe_Memori" id="Tipe_Memori">
                        <option value="SSD"
                        <?php echo e(old('Tipe_Memori')=='SSD' ? 'selected': ''); ?> >
                        SSD
                        </option>
                        <option value="HDD"
                        <?php echo e(old('Tipe_Memori')=='HDD' ? 'selected': ''); ?> >
                        HDD
                        </option>
                      </select>
                      <?php $__errorArgs = ['Tipe_Memori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="Processor">Kapasitas Memori</label>
                      <select class="form-control" name="Kapasitas_Memori" id="Kapasitas_Memori">
                        <option value="256 GB"
                        <?php echo e(old('Kapasitas_Memori')=='256 GB' ? 'selected': ''); ?> >
                        256 GB
                        </option>
                        <option value="512 GB"
                        <?php echo e(old('Kapasitas_Memori')=='512 GB' ? 'selected': ''); ?> >
                        512 GB
                        </option>
                        <option value="1 T"
                        <?php echo e(old('Kapasitas_Memori')=='1 T' ? 'selected': ''); ?> >
                        1 T
                        </option>
                      </select>
                      <?php $__errorArgs = ['Kapasitas_Memori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="Harga">Harga (Rupiah)</label>
                      <input type="text"
                      class="form-control <?php $__errorArgs = ['Harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      id="Harga" name="Harga" value="<?php echo e(old('Harga')); ?>">
                      <?php $__errorArgs = ['Harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                      <label for="image">Gambar Produk</label>
                      <input type="file" class="form-control-file" id="image" name="image">
                      <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </form>
                </div>
              </div>            
              </div>
            </div>
            <div class="col m6">
                <br><br><br>
                <img class="image round-large" src="../../node_modules/bootstrap/dist/assets/lepp.jpg" alt="Buildings" width="700" height="394">
                <br><br><br>
                <img class="image round-large" src="../../node_modules/bootstrap/dist/assets/bg1.png" alt="Buildings" width="700" height="394">
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
</html>
<?php /**PATH C:\xampp\htdocs\ANNIDA_240_SC1\sc1_annida-nur-islami_19102240\powpow\laravel\resources\views/laptop/create.blade.php ENDPATH**/ ?>