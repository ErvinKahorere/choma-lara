<?php $__env->startSection('content'); ?>
    <!--Main column-->
    <div class="col-lg-9">

        <!--First row-->
        <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
            <div class="col-lg-12">
                <br>

                <h3>Displaying all <strong style="font-weight: 900; color: #0275d8!important;"><?php echo e($city->name); ?></strong> Deals ... <span class="badge badge-primary badge-pill left" style="float: right;font-size: medium; font-weight: normal;"><?php echo e(count($cards)); ?> found</span> </h3>
                <hr>
                <br>

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
                                    <p class="card-text"> Store Name
                                    </p>

                                    <!--Card footer-->
                                    <div class="card-footer">
                                        <span class="left">N$<?php echo e($card->card_new_price); ?><span class="discount"><?php echo e($card->card_old_price); ?></span></span>
                                        <span class="right"> <a href="/cards/<?php echo e($card->id); ?>" class="btn btn-default waves-effect waves-light">View Deal</a></span>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php else: ?>
                    <p>No deals found</p>
                <?php endif; ?>



            </div>
            <!--First row-->
        </div>
        <!--End of col-lg-9-->

    </div>
    <!--/.Main column-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.normal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>