<html>
<head>
	<title></title>
	<?php 
	include('components/css.php');

	?>
	<style type="text/css">
		.videoContainer
		{
			width: 100%;
			min-height: 100vh;
			overflow: hidden;
		}
		.videoContainer video
		{
			overflow: hidden;
			position: fixed;top: 0;
			left: 0;right: 0;bottom: 0;
			min-height: 100%;
		min-width: 100%;
		}
	</style>
</head>
<body>
	<div class="videoContainer">
		<video  src="assets/bgvid/man.mp4" loop autoplay="autoplay" muted></video>
	</div>
	<div class="loginWrap">
		<section class="signForm">
			<h3>SIGNUP</h3>
			<form>
            <input type="text" name="" placeholder="User Name">
            <input type="email" name="" placeholder="Email ID">
          <!--   <input type="email" name="" placeholder="email ID"> -->
			<input type="password" name="" placeholder="password">
			<input type="password" name="" placeholder="confirm password">
            <br>
			<a href="login.php">Have a account ? Login</a>
			<input type="submit" name="" value="SIGN IN" >
			</form>
		</section>
		<section class="loginInner">
			 <div class="swiper-container" id="loginBanner">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide">
			      	<img src="assets/banner/1.jpg">
			      </div>
			      <div class="swiper-slide">
			      	<img src="assets/banner/2.jpg">
			      </div>
			       <div class="swiper-slide">
			      	<img src="assets/banner/3.jpg">
			      </div> 
			  </div>
			   
			    <div class="swiper-pagination"></div>

			    <!-- <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div> -->
			</div>
		</section>
		
	</div>
	<?php
include('components/script.php');

	?>

</body>
</html>