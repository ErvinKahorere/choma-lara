<?php $__env->startSection('content'); ?>


<?php echo Form::open(['action' => 'CardsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>



<!--Naked Form-->
<div class="card-block">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-pencil prefix"></i> Create a Deal Card</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <p>We'll write rarely, but only the best content.</p>
    <br>

    <!--Body-->
    <div class="md-form">
        <i class="fa fa-user prefix"></i>
        <!--<input type="text" id="form3" class="form-control">-->
         <?php echo e(Form::text('card_product_name', '', ['class' => 'form-control', 'id' => 'form3'])); ?>

        <label for="form3">Product/service title</label>
      

    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <br><br><br>
     <!--<textarea type="text" id="form8" class="md-textarea"></textarea>-->
           <?php echo Form::textarea('card_product_description', '', ['id' => 'article-ckeditor','class' => 'textarea']); ?>


        <label for="form2">Your Product Description</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control"> -->

         <?php echo e(Form::text('card_old_price', '', ['class' => 'form-control'])); ?>

        <label for="form34">Old Price</label>
    </div>

    <div class="md-form">
        <i class="fa fa-tag prefix"></i>
       <!-- <input type="text" id="form32" class="form-control">-->
           <?php echo e(Form::text('card_new_price', '', ['class' => 'form-control'])); ?>

        <label for="form34">New Price</label>
    </div>

<!--    
<div class="form-group">
  <label for="sel1">Select Category:</label>
  <select class="form-control" id="sel1">
    <option>Please Select</option>
    <option>Beauty &amp; Spa</option>
    <option>Food &amp; Drinks</option>
    <option>Hotel &amp; Travel</option>
       <option>Home Appliances</option>
       <option>Frangrances &amp; Cosmetics</option>
       <option>Phones &amp; Electronics</option>
        <option>B2B Deals</option>
       <option>Things to Do</option>
       <option>Auto Care</option>
       <option>Gifts</option>
  </select>
</div>

-->

   <div class="form-group">
  <label for="sel1">Select Category:</label>

   <!-- <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>;
       $categories[$category->id] = $category->name;
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>; -->
    <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>

</div>


    <div class="form-group">
        <label for="sel1">Select Store:</label>

    <!-- <?php $__currentLoopData = $merchants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merchant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>;
       $categories[$category->id] = $category->name;
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>; -->
        <?php echo Form::select('merchant_id', $merchants, null, ['class' => 'form-control']); ?>

    </div>






    <div class="md-form">
            <?php echo e(Form::file('cover_image')); ?>

        </div>


    <br>

    <div class="form-group">
        <label for="sel1">Select Your Plan:</label>
             <select class="form-control" name="card_duration"><option value="7">7 Days for N$80</option><option value="28">4 Weeks for N$240</option><option value="88">3 Months for N$680</option></select>
    </div>



   

    <div class="text-center">
       <!-- <button class="btn btn-default">Submit</button>-->

        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-default'])); ?>


        <div class="call">
            <br>
            <p>Or would you prefer we create it (with your guidance) for you?
                <br>
                <span><i class="fa fa-phone"> </i></span> +264 377 0919</p>
        </div>
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