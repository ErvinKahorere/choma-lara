<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title><?php echo e(config('app.name', 'Choma')); ?></title>


     <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="description" content=""/>

   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <!-- Scripts -->
    <script>
        window.App = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]); ?>;
    </script>
        


          <link rel="icon" type="image/png" href="<?php echo e(asset('img/favicon.png')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   
    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo e(asset('css/mdb.min.css')); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    

</head>

<body>
<div id="app">
 <header>
 
  <?php echo $__env->make('inc.admin_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 
</header>

<br>


    <main>

    

        <!--Main layout-->
        <div class="container" id="app">
           
          
            <div class="row">

            <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

             <?php echo $__env->yieldContent('content'); ?>    

                     <!--Main column-->
                <div class="col-lg-9">

                      
                        
                

                    <div>
                </div>
            
            
            </div>
        
        
        <div>
        </div>
            </div>
        </div>
    </main>

    <div id="app4">
        <flash message="<?php echo e(session('flash')); ?>"></flash>
    </div>


    <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   </div>

<!-- SCRIPTS -->

<!-- JQuery -->
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>

<!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo e(asset('js/tether.min.js')); ?>"></script>
<script src="/js/app.js"></script>
<!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

      <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

<!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('js/mdb.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/underscore.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/backbone-min.js')); ?>"></script>
    
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
