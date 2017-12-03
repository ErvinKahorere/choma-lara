<?php $__env->startSection('content'); ?>

<?php echo Form::open(['action' => 'CitiesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>



<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i>Add a new City</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->


    <!--Body-->
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         <?php echo e(Form::text('name', '', ['class' => 'form-control', 'id' => 'form3'])); ?>

        <label for="form3">City Name</label>
      

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