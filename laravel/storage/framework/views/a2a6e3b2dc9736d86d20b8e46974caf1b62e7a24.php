<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            .bar .button {padding: 16px;}           
        </style>
    </head>
    <body>
        <!-- Navbar (sit on top) -->
        <div class="top">
            <div class="bar blue-grey card">
                <a class="bar-item button wide"> <img src="../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow</a>
            </div>
        </div>

        <!--Login-->
        <div class="g6">
            <div class="center">
                <div class="container" style="padding:80px 16px" id="team">
                <br>
                    <h3>IT'S NICE TO SEE YOU AGAIN</h3>
                    <div class="row-padding:border-amber" style="margin-top:40px;">
                        <div class="card">
                            <div class="container">
                                <br><img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" alt="image" style="width:50%">
                                <br><br>
                                <?php if(session()->has('pesan')): ?>
                                <div class="alert alert-success">
                                <?php echo e(session()->get('pesan')); ?>

                                </div>
                                <?php endif; ?>
                                <form action="<?php echo e(route('login.process')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                    <input type="text"
                                    class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="username" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username">
                                    <?php $__errorArgs = ['username'];
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
                                    <input type="password"
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password">
                                    <?php $__errorArgs = ['password'];
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
                                    <button type="submit" class="btn btn-primary mb-2">Masuk</button>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="center dark-grey" style="padding:1px 16px">
            <p>Powered by PowPow Teams</p>
        </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\ANNIDA_240_SC1\sc1_annida-nur-islami_19102240\powpow\laravel\resources\views/login/login.blade.php ENDPATH**/ ?>