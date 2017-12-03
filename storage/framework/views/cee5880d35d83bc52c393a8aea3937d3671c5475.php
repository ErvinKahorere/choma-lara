<?php $__env->startSection('content'); ?>
  <div class="row">
    <?php if(count($cards) > 0): ?>
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
            <div class="col-lg-4">
                            <!--Card-->
                            <div class="card  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Card image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="/storage/cover_images/<?php echo e($card->cover_image); ?>" class="img-fluid" alt="">
                                    <a href="/cards/<?php echo e($card->id); ?>">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/<?php echo e($card->id); ?>"><?php echo e($card->card_product_name); ?></a></h4>

        <!--Description-->
        <p class="card-text"><a href="<?php echo e($card->merchant->id); ?>"><?php echo e($card->merchant->merchant_name); ?></a>
        </p>

        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N$<?php echo e($card->card_new_price); ?><span class="discount"><?php echo e($card->card_old_price); ?></span></span>
            <span class="right"> <a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>" class="btn btn-default waves-effect waves-light">View Deal</a></span>
        </div>

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>

                            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
        <?php echo e($cards->links()); ?>

    <?php else: ?>
        <p>No posts found</p>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>