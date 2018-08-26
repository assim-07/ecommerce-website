<?php require_once('config/connection.php');
require_once('components/session.php');

?>

<?php

     if (!isset($_GET['productID']) || empty($_GET['productID']))
      {
     	header('LOCATION:index.php');
     }
 			$productQuery="SELECT * FROM product WHERE productID=".$_GET['productID'];
 			$product =$connect->query($productQuery);
 			$productResult =$product->fetch_assoc();
 			$mrpRate=$productResult['productMrp'];
 			$sellRate =$productResult['productRate'];
 			$discount=$mrpRate-$sellRate;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  require('components/css.php');?>
</head>
<body>
 <?php
   include_once('components/navigation.php');
 ?>

 <div class="container-fluid">
 	<div class="productWrap">
 		<div class="imageContainer">
			 			<div class="swiper-container" id="item">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide">
			      	<img src="assets/m2.jpg" class="thumb" id="productImage">
			      </div>
			      <div class="swiper-slide">
			      	<img src="assets/m5.jpg" class="thumb">
			      </div>
			       <div class="swiper-slide">
			      	<img src="assets/m3.jpg" class="thumb">
			      </div> 
			  </div>
			   
			    <div class="swiper-pagination"></div>

			   <!--  <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div> -->
			</div>
 		</div>
 		<div class="discriptionContainer">
 			<div id="display"></div>
 			
 			<span class="productOffer"><?php echo round(($discount/$mrpRate)*100);   ?>% OFF</span>
 			<h1 id="productName"><?php echo $productResult['productName'];  ?></h1>
 			<br>
 			<h3><del><?php echo $productResult['productMrp']; ?>/-</del> <span style="color: red;" id="productRate"><?php echo $productResult['productRate']; ?></span> <span style="color: red;">/-</span></h3>
 			<p><span style="font-weight: bolder;">DISCRIPTION:</span><?php echo $productResult['productDiscription']; ?></p>

 			
 			<ul>
 				<li>SIZE</li>
 				<li>32</li>
 				<li>32</li>
 				<li>32</li>
 				<li>32</li>
 				<li>32</li>
 			</ul>
 			<br>
 			<button id="addCart">ADDCART</button>

 		</div>
 	</div>
 </div>

 

 <?php require('components/script.php');?>
</body>
</html>
