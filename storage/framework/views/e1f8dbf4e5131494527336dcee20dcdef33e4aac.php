<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <h3>Cities</h3>
                    <hr>

                <?php if(count($cities) > 0): ?>

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

                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($city->id); ?></th>
                                    <td><?php echo e($city->name); ?>

                                    </td>
                                    <td> <img src="/storage/category_image/<?php echo e($city->category_image); ?>" class="img-fluid" alt="" width="30px" height="30px"></td>
                                    <td>

                                        <a href="/categories/<?php echo e($city->id); ?>/edit" class="btn btn-default">Edit</a>

                                        <?php echo Form::open(['action' => ['TagsController@destroy', $city->id], 'method' => 'POST', 'class' => 'pull-right']); ?>


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
                        <p> There are no Cities </p>
                    <?php endif; ?>







                    <a href="/cities/create" class="btn btn-primary">Add a City</a>

                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <!-- end of col-md-9 col-md-offset-2 -->



        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>