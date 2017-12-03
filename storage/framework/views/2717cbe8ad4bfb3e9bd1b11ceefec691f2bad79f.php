<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Your Cards</h3>
                <hr>

<?php if(count($cards) > 0): ?>

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
    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($card->id); ?></th>
            <td><?php echo e($card->card_product_name); ?></td>
            <td> <a href="/cards/<?php echo e($card->id); ?>/edit" class="btn btn-default">Edit</a> <a href="#cardPreview" class="btn btn-default" data-toggle="modal" data-target="#cardPreview">Preview</a> <a href="#" class="btn btn-default" data-toggle="modal" data-target="#cardPublish">Publish</a></td>
           
           
            <td>
            
                   <?php echo Form::open(['action' => ['CardsController@destroy', $card->id], 'method' => 'POST', 'class' => 'pull-right']); ?>


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
<p> You have no Cards </p>
<?php endif; ?>







                <a href="/cards/create" class="btn btn-primary">Create Card</a>

                <div class="panel-body">
                    











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



<!-- Publish Card Modal -->
    
<!-- Full Height Modal Right -->
<div class="modal fade right" id="cardPublish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                            </div>
                            <!--Body-->
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente magnam, sunt, ea dolore
                                    eum quod. Minima fugiat enim aut soluta est reprehenderit reiciendis quos, qui, amet
                                    possimus laborum assumenda voluptate.
                                </p>

                                <ul class="list-group z-depth-0">
                                    <li class="list-group-item justify-content-between">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item justify-content-between">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item justify-content-between">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                    <li class="list-group-item justify-content-between">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item justify-content-between">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item justify-content-between">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                </ul>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
</div>
<!--  Publish Card Modal Ends-->

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

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>