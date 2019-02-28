<?php $__env->startSection('content'); ?>

<!-- carousel start -->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-responsive" src="<?php echo e(asset('assets/images/home1.jpg')); ?>" alt="Paris">
        </div>
        <div class="item">
			<img class="img-responsive" src="<?php echo e(asset('assets/images/home2.png')); ?>" alt="Paris">
        </div>
        <div class="item">
			<img class="img-responsive" src="<?php echo e(asset('assets/images/home3.png')); ?>" alt="Paris">
        </div>
		<div class="item">
		<img class="img-responsive" src="<?php echo e(asset('assets/images/home4.png')); ?>" alt="Paris">
        </div>
		<div class="item">
			<img class="img-responsive" src="<?php echo e(asset('assets/images/home5.jpg')); ?>" alt="Paris">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
	<!-- /carousel start -->

  <!-- /about us -->
	<div class="container">
    <div class="row">
	<h2 class="abouth2"> About Us </h2>
        <div class="col-md-5">
            <div class="serviceBox1">
              <img class="img-thumbnail" src="<?php echo e(asset('assets/images/floating _market.jpg')); ?>" alt="Paris" style="width:100%;height:300px">
                <h3>Nice floating Market</h3>
                <p >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
            </div>
        </div>
		<div class="col-md-2"></div>
        <div class="col-md-5">
            <div class="serviceBox1 ">
                <img class="img-thumbnail" src="<?php echo e(asset('assets/images/kl-nightlife.jpg')); ?>" alt="Paris" style="width:100%;height:300px">
                <h3 class="title">  Let's Celebrate</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.
                </p>
            </div>
        </div>

    </div>
</div>
	<!-- about us -->
<br><br>
  <img class="img-responsive" src="<?php echo e(asset('assets/images/about.png')); ?>" alt="Paris" style="width:100%;">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>