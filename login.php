<?php
require_once('config/connection.php');
require_once('components/session.php');

if(isset($_SESSION['login']))
{
	header('LOCATION:index.php');
}
if(isset($_POST['login']))
{
	$loginQuery="SELECT * FROM user WHERE email='".$_POST['userMail']."'";

	$loginExe= $connect->query($loginQuery);
	$loginResult= $loginExe->fetch_object();

	if(mysqli_num_rows($loginExe)>0)
	{
		// if(password_verify($password,$loginResult->password))
		// {

		// }
		$_SESSION['userID']=$loginResult->userID;
		$_SESSION['login']=1;
		$_SESSION['userName']=$loginResult->firstName;
		header('LOCATION:index.php');

	}
}
?>
<!DOCTYPE html>
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
		<section class="loginForm">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			<h3>LOGIN</h3>

			<input type="email" name="userMail" placeholder="email ID" required>
			<input type="password" name="userPassword" placeholder="password" required>
            <br>
			<a href="signup.php">No account ? Signup</a>
			<input type="submit" name="login" value="LOGIN IN" >
			</form>
		</section>


	</div>
	<?php
include('components/script.php');

	?>

</body>
</html>