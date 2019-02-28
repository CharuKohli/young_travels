<!-- navbar  -->

 <div class="container">
 <nav class="navbar navbar-fixed-top" id="navbar">

<span class="glyphicon glyphicon-envelope" style="padding-left:600px;color:white;margin-top:10px;"></span>: info@prodelta.in

<span class="glyphicon glyphicon-earphone" style="padding-left:2%;"></span>:Tel-919886766403
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
<span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>

   </button>

<img class="img2" src="{{asset('assets/images/logo.png')}}" class="img-responsive" alt="logo" style="margin-bottom:2px;margin-top:6px; margin-left:52pt;width:90px;height:90px"  >
 <img class="img1" class="img-responsive" src="{{asset('assets/images/logo2.png')}}" alt="header" style="margin-top:1%;width:300px" >


 </div>

<div class="navbar-collapse collapse" id="myNavbar" >
<ul class="nav navbar-nav navbar-right" style="padding-right:150px;">
<!-- 	  <a href="javascript:void(0)"></a>
-->	 <li class="active" ><a href="{{ url('/') }}"></span> Home</a></li>
  <li><a href="{{ url('/packages') }}">My Travel</a></li>
    <li><a href="{{ url('/gallery') }}"> Gallery</a></li>

     <li style="margin-right:25px;"><a href="{{ url('/contacts') }}">Contact Us</a></li>
</ul>

 </div>

</nav>

 </div>

 <!-- navbar end -->
