<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">

<br><br><br>

          <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">   
                 <div class="media-center" href="#">




                                 
<a class="media-left" href="#">
                                <img class="rounded-circle" src="/uploads/avatars/<?php echo e($user->avatar); ?>" height="120px" width="120px" alt="">
                            </a>
                


                              
                            
                          
                            </div>
                            <br>

<form class="form-horizontal" method="POST" action="/profile" enctype="multipart/form-data">


<label>Update Profile Image</label>

<input type="file" name="avatar">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<br><br>

<input type="submit" class="btn btn-default btn-sm" value="Submit">

<br>

</form>

<br>

                            </div>

            

                <h5><?php echo e(Auth::user()->name); ?></h5>
                <hr>




<p> Joined: <?php echo e(Auth::user()->created_at->diffForHumans()); ?> </p>

<p> City : <?php echo e(Auth::user()->city); ?> </p>

<p> Phone : <?php echo e(Auth::user()->phone_number); ?> </p>
<p> Email : <?php echo e(Auth::user()->email); ?> </p>

<p> Following <strong><a href="">25</a></strong> Merchants</p>




                <a href="/" class="btn btn-primary">View Deals</a>

                

                <div class="panel-body">
                    











                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->
















        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <h3>Your Profile</h3>
                <hr>


                                                
<!-- Nav tabs -->
<div class="tabs-wrapper"> 
    <ul class="nav classic-tabs tabs-orange" id="myTab" role="tablist" >
        <li class="nav-item">
            <a class="nav-link waves-light active" data-toggle="tab" href="#panel61" role="tab"> Timeline</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel62" role="tab"> Favorites</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" data-toggle="tab" href="#panel63" role="tab">Settings</a>
        </li>

    </ul>
</div>

<!-- Tab panels -->
<div class="tab-content">



    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel61" role="tabpanel">

        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($activity->type == 'created_card'): ?>
                <p> Published a Card <a href=""><b><?php echo e($activity->subject->card_product_name); ?></b></a></p>
            <?php endif; ?>



          

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <!--/.Panel 1-->

    <!--Panel 2-->
    <div class="tab-pane fade" id="panel62" role="tabpanel">



         <?php $__empty_1 = true; $__currentLoopData = $myFavorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $myFavorite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
         
                  

                    <!--Card-->
                            <div class="card  wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">

                                <!--Card image
                                <div class="view overlay hm-white-slight">
                                    <img src="/storage/cover_images/<?php echo e($myFavorite->cover_image); ?>" class="img-fluid" alt="">
                                    <a href="/cards/<?php echo e($myFavorite->id); ?>">
            <div class="mask waves-effect waves-light"></div>
        </a>
                                </div>
                                <!--/.Card image-->

                                  <!--Card content-->
    <div class="card-block text-center">
        <!--Category & Title--> 
       <h4 class="card-title"><a href="/cards/<?php echo e($myFavorite->id); ?>"><?php echo e($myFavorite->card_product_name); ?></a></h4>

        <!--Description-->
        <p class="card-text">  <?php echo $myFavorite->merchant->merchant_name; ?>

        </p>

        <div id="app">
         <?php if(Auth::check()): ?>
                        <div class="">
                            <favorite
                                :card=<?php echo e($myFavorite->id); ?>

                                :favorited=<?php echo e($myFavorite->favorited() ? 'true' : 'false'); ?>

                            ></favorite>
                        </div>
                    <?php endif; ?>

                </div>

        <!--Card footer-->
        <div class="card-footer">
            <span class="left">N$<?php echo e($myFavorite->card_new_price); ?><span class="discount"><?php echo e($myFavorite->card_old_price); ?></span></span>
            <span class="right"> <a href="/cards/<?php echo e($myFavorite->id); ?>" class="btn btn-default waves-effect waves-light">View Deal</a></span>
        </div>

    </div>
    <!--/.Card content-->

                            </div>
                            <!--/.Card-->
                            <br>














            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>You have no favorite cards.</p>
            <?php endif; ?>
    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel63" role="tabpanel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

    </div>
    <!--/.Panel 3-->


</div>


               




            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



          <div class="col-md-3 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">___</div>

                <h3>Your Store(s)</h3>
                <hr>

<?php if(count($merchants) > 0): ?>

<!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    <?php $__currentLoopData = $merchants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merchant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($merchant->id); ?></th>
            <td><?php echo e($merchant->merchant_name); ?></td>
            <td> <a href="/merchants/<?php echo e($merchant->id); ?>/edit" class="btn btn-default">Edit</a> </td>
            <td>
            
                   <?php echo Form::open(['action' => ['MerchantsController@destroy', $merchant->id], 'method' => 'POST', 'class' => 'pull-right']); ?>


                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

             </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </tbody>
    <!--Table body-->
</table>
<!--Table-->
<?php else: ?> 
<p> You have no Stores </p>
<?php endif; ?>







                <a href="/merchants/create" class="btn btn-primary">Add Store</a>

                <div class="panel-body">
                    











                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->




    </div>
</div>




<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Preview Card Modal -->
<div class="modal fade" id="cardPreview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

    <br><br><br><br><br>
        <!--Content-->
         <div class="col-lg-8">
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
        <!--/.Content-->
    </div>
</div>
<!--  Preview Card Modal Ends-->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
  

$('#panel61 a[href="#panel61"]').tab('show') // Select tab by name



</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>