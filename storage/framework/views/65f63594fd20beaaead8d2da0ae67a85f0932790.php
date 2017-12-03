<?php $__env->startSection('content'); ?>

<?php echo Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>



<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a Category</h3>
        <hr class="mt-2 mb-2">
    </div>



    <!--Body-->

<div class="row">
   
    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         <?php echo e(Form::text('name', '', ['class' => 'form-control'])); ?>

        <label for="form34">Category Name</label>
    </div>


    <div class="md-form">
        <?php echo e(Form::file('category_image')); ?>

    </div>


</div>


    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->

        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-default'])); ?>


    </div>

</div>
<!--Naked Form-->


<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
// Data Picker Initialization
$('.datepicker').pickadate();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>