<?php $__env->startSection('content'); ?>

<!--Main column-->
<div class="col-lg-9">
    <!--First row-->
    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
        <div class="col-lg-12">
            <br>
            <h3>Displaying all <strong>Combos</strong> ... </h3>
            <hr>
            <br> 
            <?php if(count($combos) > 0): ?> 

            <div class="row">

            <?php $__currentLoopData = $combos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $combo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12">
                <!--Combo Card-->



            <div class="card-group col-lg-12"> 


                <h1><?php echo $combo->combo_description; ?></h1>   

                
            </div>
            <br>

    <div class="card-group col-lg-12">
    <div class="card">
        <img class="img-fluid" src="/storage/combo_images/<?php echo e($combo->offer1_image); ?>" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo e($combo->offer1_title); ?></h4>
            <p class="card-text"><?php echo e($combo->offer1_description); ?></p>

        </div>
    </div>
    <div class="card">
        <img class="img-fluid" src="/storage/combo_images/<?php echo e($combo->offer2_image); ?>" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo e($combo->offer2_title); ?></h4>
            <p class="card-text"><?php echo e($combo->offer2_description); ?></p>

        </div>
    </div>
    <div class="card">
        <img class="img-fluid" src="/storage/combo_images/<?php echo e($combo->offer3_image); ?>" alt="Card image cap">
        <div class="card-block">
         <h4 class="card-title"><?php echo e($combo->offer3_title); ?></h4>
            <p class="card-text"><?php echo e($combo->offer3_description); ?></p>
     

              <!--Card footer-->
        <div class="card-footer">
            <span class="left">N$<?php echo e($combo->combo_new_price); ?> <span class="discount">N$<?php echo e($combo->combo_old_price); ?> </span></span>
            <span class="right">
          
             <a href="/combos/<?php echo e($combo->id); ?>" class="btn btn-default waves-effect waves-light">View Combo</a></span>
        </div>
        </div>
    </div>
    
</div>

<br>

<hr>

<!-- End of Combo -->
               



            </div>
            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

            </div>

            <?php else: ?>
            <p>Sorry, no combos found</p>
            <?php endif; ?>
        </div>
        <!--First row-->
    </div>
    <!--End of col-lg-9-->
</div>
<!--/.Main column-->


  
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.normal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>