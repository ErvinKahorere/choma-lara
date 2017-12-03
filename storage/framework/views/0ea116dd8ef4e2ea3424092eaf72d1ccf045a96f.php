<?php $__env->startComponent('mail::message'); ?>

Hello <?php echo e($user->name); ?>,

#Welcome & Thank you for registering with Choma!

Whether you're a veteran or you just unpacked the moving truck, by joining Choma you've just started a journey towards doing more, seeing more and experiencing more of the world around you.

So, cheers to that and cheers to life - we challenge you to live it more memorably

If tomorrow is Monday or Thursday you're in for a treat. We send you the low down on what's happening in twice a week so you'll never be out of the loop. If it's not, no worries - we've included plenty of gems in this email.


<?php $__env->startComponent('mail::button', ['url' => 'www.choma.dev']); ?>
Visit Choma
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::panel', ['url' => '']); ?>
    Choma is your Friend. :)
<?php echo $__env->renderComponent(); ?>




Peace, Love and Happy Days!<br>
Ervin at <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
