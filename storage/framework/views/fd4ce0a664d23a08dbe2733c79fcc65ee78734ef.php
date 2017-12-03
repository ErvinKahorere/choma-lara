


<html lang="en" class="full-height">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">




    <title><?php echo e(config('app.name', 'Choma')); ?></title>




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









    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/compiled.min.css" rel="stylesheet">
    <style>

        .intro-2 {
            background: url("<?php echo e(asset('img/bg.png')); ?>")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }
        .hm-gradient .full-bg-img {
            background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
            background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
        }
        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

        .md-form .prefix {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 1040px;
            }
        }

        footer.page-footer {
            margin-top: 0px;
            padding-top: 60px;
            background-color: #3E4551;

        }

    </style>
</head>
<body>
<!--Main Navigation-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('img/beta_logo.png')); ?>" height="50px" alt="Choma"></a>


            <div class="row pull-right">
                <a href="<?php echo e(url('/sell')); ?>" target="_blank"  class="nav-link">Sell with Choma</a>

            </div>


        </div>



        </div>
    </nav>





    <!--Intro Section-->
    <section class="view intro-2 hm-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-6 text-center text-md-left mb-5">
                            <div class="white-text">
                                <h1 class="h1-responsive font-bold wow fadeInLeft" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">Sign up right now! </h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">
                                <h6 class="wow fadeInLeft" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">Choma strives to be the best place to find and share unique deals, offers and special promotions from your favorite good and services stores your local Namibian area.</h6>
                                <br>
                                 <p class="wow fadeInLeft" data-wow-delay="0.3s"> Already on Choma?  <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-white wow fadeInLeft waves-effect waves-light" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">Login</a> </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 offset-xl-1">
                            <!--Form-->
                            <div class="card wow fadeInRight" data-wow-delay="0.3s" style="animation-name: none; visibility: visible;">
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fa fa-user white-text"></i> Register:
                                        </h3>
                                        <hr class="hr-light">
                                    </div>
                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix white-text"></i>
                                        <input type="text" id="form3" class="form-control">
                                        <label for="form3" class="">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix white-text"></i>
                                        <input type="email" id="form2" class="form-control">
                                        <label for="form2" class="">Your email</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text"></i>
                                        <input type="password" id="form4" class="form-control">
                                        <label for="form4" class="">Your password</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-indigo waves-effect waves-light">Sign up</button>
                                        <hr class="hr-light mb-3 mt-4">
                                        <div class="inline-ul text-center d-flex justify-content-center">

                                            <p class="icons-sm" style="color: #ffffff">or Sign up with </p>

                                            <a class="icons-sm tw-ic" href="/login/twitter">
                                                <i class="fa fa-twitter white-text"></i>
                                            </a>
                                            <a class="icons-sm li-ic" href="/login/facebook">
                                                <i class="fa fa-facebook white-text"></i>
                                            </a>
                                            <a class="icons-sm ins-ic" href="/login/google">
                                                <i class="fa fa-google white-text"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<!--Main Navigation-->

    <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<!-- SCRIPTS -->
<script type="text/javascript" src="/js/compiled.min.js"></script>
<script>
    new WOW().init();
</script>
<div class="hiddendiv common"></div>
<div id="jquery_jplayer_1" style="width: 0px; height: 0px;">
    <img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
    <audio id="jp_audio_0" preload="metadata"></audio>
</div>
<div id="jquery_jplayer_2" style="width: 0px; height: 0px;">
    <img id="jp_poster_1" style="width: 0px; height: 0px; display: none;">
    <audio id="jp_audio_1" preload="metadata"></audio>
</div>


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo e(asset('js/tether.min.js')); ?>"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>



<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo e(asset('js/mdb.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script type="text/javascript" src="<?php echo e(asset('js/carousel.js')); ?>"></script>

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

<script src="/js/app.js"></script>



</body>
</html>



