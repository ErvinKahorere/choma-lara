<?php $__env->startSection('content'); ?>
   <!--Main column-->
                <div class="col-lg-9">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">
                                <br>

                                <div id="app4">
                                     <!--/.Featured image-->
                                    <!--Product data-->
                                        <div class="row">

                                            <div class="col-md-2">
                                                <br>
                                                <div class="avatar_logo">
                                                    <img src="/storage/merchant_logos/<?php echo e($merchant->merchant_logo); ?>" height="110px" width="110px" alt="<?php echo e($merchant->merchant_name); ?>" class="">
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                                                <br>  <br>
                                                <h2 class="h2-responsive"><?php echo e($merchant->merchant_name); ?> </h2>
                                                 <p>

                                                     <?php if(count($cards) > 0): ?>
                                                     <strong>
                                                         <?php echo e(count($cards)); ?>

                                                     </strong> Active Cards
                                                    <?php else: ?>

                                                         No active cards

                                                    <?php endif; ?>

                                                 </p>
                                                <?php if(Auth::check()): ?>
                                                <p><merchant-subscribe-button :active="<?php echo e(json_encode($merchant->isSubscribedTo)); ?>"></merchant-subscribe-button></p>
                                                <?php endif; ?>

                                            </div>


                                        </div>



                                </div>


            
                            </div>
                            <!--Product-->

                            <hr>
                            <p><?php echo $merchant->merchant_description; ?></p>

                        </div>
                    </div>
                    <!--/.First row-->

                    <!--Second row-->
                    <div class="row">
                        
                        <!--Heading-->
                            <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <h2 class="h2-responsive">Contact <?php echo e($merchant->merchant_name); ?> </h2>

                                <hr>
                                <br>

                                <section id="contact">
            <div class="row">
                <!--First column-->
                <div class="col-md-8">

                
<style>

    .map-canvas {
        width: 100%;
        height: 250px;
    }

</style>

                    
                        <div id="map-canvas" class="map-canvas"></div>

                    
                       </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="text-center">
                        <li class="wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><i class="fa fa-map-marker teal-text"></i>
                            <p><?php echo $merchant->merchant_physical_address; ?></p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><i class="fa fa-phone teal-text"></i>
                            <p><?php echo $merchant->merchant_phone; ?></p>
                        </li>

                        <li class="wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"><i class="fa fa-envelope teal-text"></i>
                            <p><?php echo $merchant->merchant_email; ?></p>
                        </li>
                    </ul>
                </div>
                <!--/Second column-->


       
            </div>


        </section>


                            </div>

                        

                    </div>
                    <!--/.Second row-->


                      <br>
<br>

             <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <h2 class="h2-responsive">Active Deals by <?php echo e($merchant->merchant_name); ?> </h2>
                 <hr>



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

                     <?php else: ?>
                         <p>No cards found</p>
                     <?php endif; ?>
                 </div>



             </div>

                    <br><br>


                    <div class="col reviews wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <h2 class="h2-responsive">Share <?php echo e($merchant->merchant_name); ?> with friends </h2>
                        <hr>


                        <section id="social-icons">

                            <!--Facebook-->
                            <a type="button" class="btn-floating btn-large btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-large btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>

                            <hr>
                        </section>

                        <br><br>
                    </div>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKmLyF23CBohQXOrVRgIP2WhVkTg_IqOw&libraries=places">
</script>
<script>

    var lat = <?php echo e($merchant->merchant_lat); ?>;
     var lng = <?php echo e($merchant->merchant_lng); ?>;

    var map = new google.maps.Map(document.getElementById('map-canvas'),{
        center: {
            lat: lat,
            lng: lng
        },
        zoom:15
    });

    var marker = new google.maps.Marker({
        position:  {
            lat: lat,
            lng: lng
        },
        map: map,
    });

    /*
    var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
    google.maps.event.addListener(searchBox, 'places_changed', function(){
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;

        for(i=0; place=places[i];i++){
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location)  // set new marker position
        }

        map.fitBounds(bounds);
        map.setZoom(15);

    });

    google.maps.event.addListener(marker, 'position_changed', function(){
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

        $('#merchant_lat').val(lat);
        $('#merchant_lng').val(lng);

    });

    */

</script>
<!--
   <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKmLyF23CBohQXOrVRgIP2WhVkTg_IqOw&callback=initMap">
    </script>

-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.normal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>