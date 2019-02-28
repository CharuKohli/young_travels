<?php $__env->startSection('content'); ?>

<img src="<?php echo e(asset('assets/images/travel.png')); ?>" class="img-responsive" alt="logo" width="100%">

<ul class="travelp">
<li>Would you like to travel alone or with your close friends or family , we are here to help you.</li><br>
<li>Young Travels comes with Country specific Travel plan. You can schedule your travel, duration of travel, your Places of interests</li><br>
<li>Our idea of travel is to create a memorable , lifelong experience to you. </li>
<h3 style="color:blue;font-weight:bold"> If you have any Customized Travel  planes please contact to this mail ID:<span> info@prodelta.in  </span></h3>
</ul>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

<ol class="breadcrumb">

	 <li><a href="#">Adventure</a></li>
    <li><a href="#">Nature</a></li>
    <li><a href="#">Hill station</a></li>
    <li><a href="#">Historical</a></li>
	<li><a href="#">Honeymoon</a></li>
	<!-- <li><a href="#">Family trip</a></li> -->

  <li class="active">Family trip</li>
</ol>
<div class="col-md-1"></div>
</div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <img src="<?php echo e(asset('assets/images/Malls.jpg')); ?>" class="img-responsive" alt="logo" style="height:200px;width:300px">
                </div>
                <div class="service-content">
                    <h3 class="title">MALAYSIA</h3>
                    <p class="description">
                        Being Multi ethnic , multi cultural place    Malaysia is truly Asia.  Foodies paradise, where you can taste diversity of delectable food at reasonable prices.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                     <img  src="<?php echo e(asset('assets/images/bangkok.jpg')); ?>" class="img-responsive" alt="logo" style="height:200px;width:300px">
                </div>
                <div class="service-content">
                    <h3 class="title">THAILAND</h3>
                    <p class="description">
					Nature, Beaches, parties, night life , famous Thai massages all clubbed into one,Thailand is heaven on earth for  tourist.
                    </p>
                </div>
            </div>
        </div>
		<div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                     <img src="<?php echo e(asset('assets/images/singapore.jpeg')); ?>" class="img-responsive" alt="logo" style="height:200px;width:300px">
                </div>
                <div class="service-content">
                    <h3 class="title">SINGAPORE</h3>
                    <p class="description">
				Singapore is place where Passion and possibilities meet. Enjoy & explore the new experiences created every day. Chase the excitement and enjoy the thrills and rides.
					</p>
                </div>
            </div>
        </div>
		<div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <img src="<?php echo e(asset('assets/images/andaman.png')); ?>" class="img-responsive" alt="logo" style="height:200px;width:300px">
                </div>
                <div class="service-content">
                    <h3 class="title">ANDAMAN</h3>
                    <p class="description">
					Amazing  Andamans. Nature at its best. History , beautiful islands, forests, Museums offers rich and memorable experience to nature lovers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
	<br><br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>