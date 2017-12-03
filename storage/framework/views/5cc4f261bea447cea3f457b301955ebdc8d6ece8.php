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
                                    <a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>">


            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>"><?php echo e($card->card_product_name); ?></a></h4>

        <!--Description-->
        <p class="card-text"> <a href="/merchants/<?php echo e($card->merchant->id); ?>">  <?php echo $card->merchant->merchant_name; ?> </a>
        </p>



        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N$<?php echo e($card->card_new_price); ?><span class="discount"><?php echo e($card->card_old_price); ?></span></span>
            <span class="right">  <a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>" class="btn btn-default waves-effect waves-light"><i class="fa fa-eye"></i> View</a></span>
        </div>

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>

                            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--    <?php echo e($cards->links()); ?> -->
    <?php else: ?>
        <p>No cards found</p>
    <?php endif; ?>
 </div>


 <div> <div>


                      <!--/.Carousel Wrapper-->
                              <div class="divider-new">
                                <h2 class="h2-responsive">Discover new Stores</h2>
                            </div>
                            
 



         <section>

             <!--Carousel Wrapper-->
             <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">



                 <!--Slides-->
                 <div class="carousel-inner" role="listbox">

                     <!--First slide-->
                     <div class="carousel-item">

                         <div class="col-md-4">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!--/.First slide-->

                     <!--Second slide-->
                     <div class="carousel-item active">

                         <div class="col-md-4">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!--/.Second slide-->

                     <!--Third slide-->
                     <div class="carousel-item">

                         <div class="col-md-4">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 clearfix d-none d-md-block">
                             <div class="card">
                                 <img class="img-fluid" src="http://viverecreatives.com/choma/bg-losangeles-white.png" alt="Card image cap">

                                 <div class="avatar_card">
                                     <img src="https://www.solodev.com/assets/carousel/image3.png" class="rounded-circle" alt="Sample avatar image.">
                                 </div>
                                 <div class="card-body card-block text-center">
                                     <h4 class="card-title">Store Name</h4>
                                     <p class="card-text">Store Location</p>
                                     <a class="btn btn-primary waves-effect waves-light">Subscribe</a>
                                 </div>
                             </div>
                         </div>

                     </div>
                     <!--/.Third slide-->

                 </div>
                 <!--/.Slides-->

                 <!--Controls-->
                 <div class="controls-top">
                     <a class="btn-floating waves-effect waves-light" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                     <a class="btn-floating waves-effect waves-light" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                 </div>
                 <!--/.Controls-->

                 <!--Indicators
                 <ol class="carousel-indicators">
                     <li data-target="#multi-item-example" data-slide-to="0" class=""></li>
                     <li data-target="#multi-item-example" data-slide-to="1" class="active"></li>
                     <li data-target="#multi-item-example" data-slide-to="2"></li>
                 </ol>
                 <!--/.Indicators-->

             </div>
             <!--/.Carousel Wrapper-->

         </section>



</div>
  <div class="divider-new">
                                <h2 class="h2-responsive">More Deals</h2>
                            </div>


                            <div class="row">
                                  <?php if(count($cards) > 0): ?>
        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
            <div class="col-lg-4">
                            <!--Card-->
                            <div class="card  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Card image-->
                                <div class="view overlay hm-white-slight">
                                    <img src="/storage/cover_images/<?php echo e($card->cover_image); ?>" class="img-fluid" alt="">
                                    <a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>"><?php echo e($card->card_product_name); ?></a></h4>

        <!--Description-->
        <p class="card-text"> 
         <?php echo $card->merchant->merchant_name; ?>

        </p>

        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N$<?php echo e($card->card_new_price); ?><span class="discount"><?php echo e($card->card_old_price); ?></span></span>
            <span class="right"> <a href="/cards/<?php echo e($card->channel->name); ?>/<?php echo e($card->id); ?>" class="btn btn-default waves-effect waves-light">View Deal</a></span>
      
    
      
        </div>

          <?php if(Auth::check()): ?>
    <div class="card-footer">
        <favorite
            :card=<?php echo e($card->id); ?>

            :favorited=<?php echo e($card->favorited() ? 'true' : 'false'); ?>

        ></favorite>
    </div>
<?php endif; ?>
      

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>
                        </div>

                            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($cards->links()); ?>

    <?php else: ?>
        <p>No cards found</p>
    <?php endif; ?>


                            </div>


 <div class="divider-new">
     <h2 class="h2-responsive"> Trusted by <?php echo e(count($merchants)); ?> + Stores & Merchants</h2>
 </div>

 <div class="container">
     <section class="customer-logos slider">

         <?php if(count($merchants) > 0): ?>
             <?php $__currentLoopData = $merchants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merchant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                 <div class="slide"><img src="https://www.solodev.com/assets/carousel/image3.png"></div>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php endif; ?>

     </section>
 </div>


</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>