<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Tags</h3>
                <hr>

<?php if(count($tags) > 0): ?>

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
    
    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($tag->id); ?></th>
            <td><?php echo e($tag->name); ?></td>
            <td> <a href="/tags/<?php echo e($tag->id); ?>/edit" class="btn btn-default">Edit</a> </td>
            <td>
            
                   <?php echo Form::open(['action' => ['TagsController@destroy', $tag->id], 'method' => 'POST', 'class' => 'pull-right']); ?>


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
<p> There are no Tags </p>
<?php endif; ?>







                <a href="/tags/create" class="btn btn-primary">Create Tag</a>

                <div class="panel-body">

                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>