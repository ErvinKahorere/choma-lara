     
   
   <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="col-lg-12">
                          
                            
                            
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                              
                                <!--/.Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                 <?php if(count($ourpicks) > 0): ?>
        <?php $__currentLoopData = $ourpicks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ourpick): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <img src="/storage/cover_images/<?php echo e($ourpick->cover_image); ?>" alt="<?php echo e($ourpick->card_product_name); ?>">
                                        <div class="carousel-caption">
                                            <h4>Our Pick of the Day</h4>
                                            <h3><?php echo e($ourpick->card_product_name); ?></h3>
                                            <br>
                                                  <hr> 
                                             <!--Text-->
                                    <p class="card-text">Store Name </p>
                                    <a href="/ourpicks/<?php echo e($ourpick->id); ?>" class="btn btn-default waves-effect waves-light">View Deal</a>

                                    
                                        </div>
                                        
                                    </div>
                                    
                                    <!--/First slide-->

                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php else: ?>
        <p>No Picks today</p>
    <?php endif; ?>
                                 
                                </div>
                                <!--/.Slides-->
                                <!--Controls
                                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> -->
                                <!--/.Controls-->
                            </div>


                    




                        </div>
                    </div>
                    <!--/.First row-->

                                          
     