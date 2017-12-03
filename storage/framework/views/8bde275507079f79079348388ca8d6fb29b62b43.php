
    <nav class="navbar navbar-dark bg-primary">
    <ul class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('img/beta_logo.png')); ?>" height="50px" alt="Choma"></a>

          <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>

                    <div class="row pull-right">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    <a class="nav-link " href="<?php echo e(route('register')); ?>">Register</a>
                </div>

                  <?php else: ?>





         
                   
                 <li class="nav-item dropdown btn-group pull-right">

                     <user-notifications></user-notifications>
  
           
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?> 



                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">


                         <a class="dropdown-item" href="/profile/<?php echo e(Auth::user()->name); ?>">
                                            Profile
                                        </a>
                        


                          <a class="dropdown-item" href="/dashboard">
                                            Dashboard
                                        </a>
                        
                        
                         <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                        

                                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>

                                        
                       

                        
                    </div>

                    
<a class="media-left" href="/profile/<?php echo e(Auth::user()->name); ?>">
                                <img class="rounded-circle" src="/uploads/avatars/<?php echo e(Auth::user()->avatar); ?>" height="30px" width="30px" alt="">
                            </a>

                    </a>
                </li>
    </ul>

                  <?php endif; ?>

</nav>


        <!--Navbar-->
           <!--Navbar-->
<nav class="lower_navbar navbar navbar-toggleable-md navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                    <a href="/tags/<?php echo e($tag->name); ?>" class="nav-link"><?php echo e($tag->name); ?> <span class="sr-only">(current)</span></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <li class="nav-item">
                    <a href="<?php echo e(url('/')); ?>" class="nav-link">Discover</a>
                </li>


                <li class="nav-item">
                    <a href="<?php echo e(url('/merchants')); ?>" class="nav-link">Stores</a>
                </li>
        
            <!--
                <li class="nav-item">
                    <a class="nav-link">Nearby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Trending</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link">Father's Day</a>
                </li> -->


            
                <li class="nav-item"> 
                     <form class="form-inline waves-effect waves-light" method="GET">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                        <input class="form-control" type="search" name="q" placeholder="Search ..." id="q">

                        </div>
                    </form> 
            
            </li>


                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">City</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                    
               

                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/cities/<?php echo e($city->name); ?>" class="dropdown-item"><?php echo e($city->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                       <!-- <a class="dropdown-item">Walvis Bay</a>
                         <a class="dropdown-item">Rundu</a>
                        <a class="dropdown-item">Swakopmund</a>
                           <a class="dropdown-item">Oshakati</a> 
                              <a class="dropdown-item">Rehoboth</a>   
                                 <a class="dropdown-item">Katima Mulilo</a>    
                                    <a class="dropdown-item">Otjiwarongo</a>    
                        <a class="dropdown-item">Ondangwa</a>
                           <a class="dropdown-item">Okahandja</a>   
                         <a class="dropdown-item">Keetmanshoop</a>   
                        <a class="dropdown-item">Gobabis</a> -->
                    </div>


                </li>

                
            </ul>


        <div class="row pull-right">
             <a href="<?php echo e(url('/sell')); ?>" target="_blank"  class="nav-link">Sell with Choma</a>
        
         </div>
        </div>
    </div>
</nav>
        <!--/.Navbar-->

