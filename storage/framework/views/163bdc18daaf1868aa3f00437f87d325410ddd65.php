<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <h3>Categories</h3>
                <hr>

<?php if(count($categories) > 0): ?>

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
    
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($category->id); ?></th>
            <td><?php echo e($category->name); ?>

            </td>
            <td> <img src="/storage/category_image/<?php echo e($category->category_image); ?>" class="img-fluid" alt="" width="30px" height="30px"></td>
            <td>

                <a href="/categories/<?php echo e($category->id); ?>/edit" class="btn btn-default">Edit</a>

                <?php echo Form::open(['action' => ['TagsController@destroy', $category->id], 'method' => 'POST', 'class' => 'pull-right']); ?>


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
<p> There are no Categories </p>
<?php endif; ?>







                <a href="/categories/create" class="btn btn-primary">Create Category</a>

                <div class="panel-body">

                </div>
            </div>
        </div>
        <!-- end of col-md-9 col-md-offset-2 -->



    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>