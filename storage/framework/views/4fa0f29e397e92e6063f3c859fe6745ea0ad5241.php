<?php $__env->startSection('content'); ?>

 <div id="app4">

     <passport-clients></passport-clients>
     <passport-authorized-clients></passport-authorized-clients>
     <passport-personal-access-tokens></passport-personal-access-tokens>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>