<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group list-group-numbered mt-4">
            <a href="<?php echo e(url('/basic_routing')); ?>" class="list-group-item list-group-item-action">
            Basic Routing (No View, No Controller)
            </a>

            <a href="<?php echo e(url('/view_route')); ?>" class="list-group-item list-group-item-action">
            View Route
            </a>

            <a href="<?php echo e(url('/controller_route')); ?>" class="list-group-item list-group-item-action">
            Controller Route
            </a>

            <a href="<?php echo e(url('/')); ?>" class="list-group-item list-group-item-action">
            Redirect Route
            </a>

            <a href="<?php echo e(url('/user/12345')); ?>" class="list-group-item list-group-item-action">
            Route Parameter (Required Parameter) - 1
            </a>
            <a href="<?php echo e(url('/posts/01/comments/20')); ?>" class="list-group-item list-group-item-action">
            Route Parameter (Required Parameter) - 2
            </a>

            <a href="<?php echo e(url('/username')); ?>" class="list-group-item list-group-item-action">
            Route Parameter (Optional Parameter)
            </a>

            <a href="<?php echo e(url('/title/this-is-my-title')); ?>" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>

            <a href="<?php echo e(url('/bootstrap')); ?>" class="list-group-item list-group-item-action">
            Bootstrap
            </a>
        </div>
        
        
        
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html><?php /**PATH D:\Documents\SEMESTER 4\Modul_04\laravelroute\resources\views/routing.blade.php ENDPATH**/ ?>