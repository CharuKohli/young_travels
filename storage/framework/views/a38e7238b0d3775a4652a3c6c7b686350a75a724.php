<?php $__env->startSection('content'); ?>


<img src="<?php echo e(asset('assets/images/contact1.png')); ?>" class="img-responsive" alt="logo" width="100%"">

<br><br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-5">
<h2 class="contacth2"> GET IN TOUCH </h2>
<p class="contactp"><span class="glyphicon glyphicon-home"></span> : Novel Tech park, Kudlugate</p>
<p class="contactp"><span class="glyphicon glyphicon-envelope"></span> : info@prodelta.in</p>
<p class="contactp"><span class="glyphicon glyphicon-phone-alt"></span> : Tel-919886766403</p>
</div>
<div class="col-md-5">
<img src="<?php echo e(asset('assets/images/contact2.jpg')); ?>" class="img-thumbnail" alt="logo">

</div>
<div class="col-md-1"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>