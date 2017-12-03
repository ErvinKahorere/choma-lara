 <!--Sidebar-->
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                    <div class="widget-wrapper">
                        <br>
                        <h4>Check out a deal that suits you. Save big on what you do every day!</h4>
                        <br>
                        <ul class="list-group">


                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <a href="/categories/<?php echo e($category->name); ?>"  style="font-size: 1.01rem; text-transform: uppercase; font-weight: normal;" class="list-group-item d-flex justify-content-between align-items-center">

                                    <img src="/storage/category_image/<?php echo e($category->category_image); ?>" class="img-fluid" alt="" width="30px" height="30px">
                                    <span class="">


    <?php echo e($category->name); ?>


                            </span>
                                </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!--
                            <a href="#" class="list-group-item">Beauty &amp; Spa</a>
                             <a href="#" class="list-group-item">Food &amp; Drinks</a>
                              <a href="#" class="list-group-item">Hotels &amp; Travel</a>

    <a href="#" class="list-group-item">Home Appliances</a>
                             <a href="#" class="list-group-item">Fragrances &amp; Cosmetics</a>
                              <a href="#" class="list-group-item">Phones &amp; Tablets</a>

                     
                             <a href="#" class="list-group-item">B2B Deals</a>
                              <a href="#" class="list-group-item">Things to Do</a>

                           
                             <a href="#" class="list-group-item">Auto Care</a>
                              <a href="#" class="list-group-item">Gifts</a> -->

                        </ul>
                        <br>
                    </div>



                    <br>
                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    
                        <h4>Join our ever growing 18 750 members and get personal notifications on local deals of your choice.</h4>
                        <br>
                        <div class="card">
                            <div class="card-block">
                    
                                <p><strong>Get INSTANT Notifications on New Deals on the the go</strong></p>
                                <p>Once a week we will send you a summary of the most useful deals</p>

                                <a href="#"><img src="img/playstore.svg" style="max-width: 185px;" alt="Download Choma"> </a>
                                





                            </div>
                        </div>
                    </div>

                    <br><br>

                </div>
                <!--/.Sidebar-->
