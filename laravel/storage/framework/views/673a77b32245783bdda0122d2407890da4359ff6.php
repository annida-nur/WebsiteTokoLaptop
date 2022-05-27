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
    <title>Data Mahasiswa</title>
</head>
<body>
    <!-- Navbar (sit on top) -->
    <div class="top">
      <div class="bar blue-grey card">
        <!-- Right-sided navbar links -->
        <div class="right hide-small">
        <a class="bar-item button wide"> <img src="../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow Laptop</a>
          <div class="right hide-small">
            <a href="<?php echo e(route('laptop.create')); ?>" class="bar-item button"><i class="fa fa-th"></i> INPUT DATA</a>  
            <a href="" class="bar-item button"><i class="fa fa-sign-out"></i> Log Out</a>
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
      <a href="" onclick="close()" class="bar-item button">INPUT LAPTOP</a>
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
                        <th>Merek</th>
                        <th>Tipe</th>
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
                        <td><a href=""><?php echo e($laptop->Tipe); ?></a></td>
                        <td><?php echo e($laptop->Merek); ?></td>
                        <td><?php echo e($laptop->Processor); ?></td>
                        <td><?php echo e($laptop->Tipe_RAM); ?></td>
                        <td><?php echo e($laptop->Kapasitas_RAM); ?></td>
                        <td><?php echo e($laptop->Tipe_Memori); ?></td>
                        <td><?php echo e($laptop->Kapasitas_Memori); ?></td>
                        <td><?php echo e($laptop->Harga); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="6" class="text-center">Tidak ada data</td>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="center dark-grey" style="padding:8px 16px">
      <p>Powered by PowPow Teams</p>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\ANNIDA_240_SC1\sc1_annida-nur-islami_19102240\powpow\laravel\resources\views/laptop/index.blade.php ENDPATH**/ ?>