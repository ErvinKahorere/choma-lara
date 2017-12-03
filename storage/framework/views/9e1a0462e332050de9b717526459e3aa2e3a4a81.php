<?php $__env->startSection('content'); ?>

    <div class="col-lg-9">
<div class="row">

    <?php if(count($merchants) > 0): ?>
        <?php $__currentLoopData = $merchants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merchant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



            <div class="col-md-4" id="app4">
                <a href="/merchants/<?php echo e($merchant->id); ?>">
                <div class="card">
                    <img src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap" class="img-fluid">
                    <div class="avatar_card">
                        <img src="/storage/merchant_logos/<?php echo e($merchant->merchant_logo); ?>" alt="Sample avatar image." class="rounded-circle">
                    </div>
                    <div class="card-body card-block text-center">
                        <h4 class="card-title"><a href="/merchants/<?php echo e($merchant->id); ?>"><?php echo e($merchant->merchant_name); ?></a></h4>
                        <p class="card-text">Based in <?php echo e($merchant->merchant_city); ?></p>

                        <p class="card-text"><?php echo e(count($merchant->cards)); ?> Active Cards</p>

                        <p>(<?php echo e(count($merchant->subscriptions)); ?>) Subscribers</p>
                        <?php if(Auth::check()): ?>
                    

                            <?php endif; ?>

                        <hr>


                            <a class="btn btn-primary waves-effect waves-light" href="/merchants/<?php echo e($merchant->id); ?>">View Store </a>


                    </div>
                </div>
                </a>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      
            
                            

       
    <?php else: ?>
        <p>No merchants found</p>
    <?php endif; ?>

</div>
    </div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.normal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>