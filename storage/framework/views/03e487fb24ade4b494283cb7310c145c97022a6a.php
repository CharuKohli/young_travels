<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('assets/images/gellery2.png')); ?>" class="img-responsive" alt="logo" width="100%">
<div class="container-fluid"><br><br>
<!-- <p class="gelleryp"> I’m a terms of use section. I’m a great place to inform your visitors about the nature of your website and how it may be used by
visitors. Add details such the type of information and content you publish, or any additional features like taking online payments or
collecting emails for a newsletter.</p> -->

<img src="<?php echo e(asset('assets/images/gellary.png')); ?>" class="img-responsive" alt="logo" width="100%">
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>