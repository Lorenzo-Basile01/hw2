
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adottaci!</title>    
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Satisfy&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        
        <script src="<?php echo e(asset('js/load_posts.js')); ?>" defer="true"></script>
    </head>
    <body>
                <nav>
                    <div id="menu">
                    
                        <?php if($user == null): ?>
                            <a href="<?php echo e(route('home')); ?>">HOME</a>
                            <a class='login' href="<?php echo e(route('log')); ?>">LOGIN</a>
                        <?php else: ?>
                            <span>Benvenuto <?php echo e($user['nome']); ?><span>
                            <a href="<?php echo e(route('home')); ?>">HOME</a>
                            <a class='community' href="<?php echo e(route('community')); ?>">LA NOSTRA COMMUNITY</a>
                            <a href="<?php echo e(route('customer')); ?>">AREA PERSONALE</a>
                        <?php endif; ?>

                    </div>
                    
                </nav>
            <section id='posts'></section>

        </body>
</html><?php /**PATH C:\Users\Lorenzo\hw2\resources\views/home.blade.php ENDPATH**/ ?>