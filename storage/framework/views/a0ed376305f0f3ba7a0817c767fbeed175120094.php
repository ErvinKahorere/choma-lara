<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title><?php echo e(config('app.name', 'Choma')); ?></title>

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <meta id="token" name="token" content="<?php echo e(csrf_token()); ?>">

     <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="description" content=""/>


          <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="<?php echo e(asset('css/pretty.css')); ?>" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo e(asset('css/mdb.min.css')); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">



    <!-- Scripts -->
    <script>
        window.App = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]); ?>;
    </script>


  



</head>

<body>
<div id="app">





 <header>
  <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 
</header>

<br>

    <main>

        <!--Main layout-->
        <div class="container"  id="app">

           <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           
          

            <div class="row">
                    <?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



            
            
     

                     <?php echo $__env->yieldContent('content'); ?>  
                      
                            
                        </div>
        
        
        <div>
        </div>
        </div>




    </main>


   <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   </div>

<!-- SCRIPTS -->

<!-- JQuery -->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>

<!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo e(asset('js/tether.min.js')); ?>"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.10.1/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

      <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

  

<!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('js/mdb.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/underscore.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/backbone-min.js')); ?>"></script>

      <script src="/js/app.js"></script>
    
    <script>
    new WOW().init();
    </script>



<div class="hiddendiv common">

</div>



    


    
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
