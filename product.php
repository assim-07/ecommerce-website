<?php 

    require_once('config/connection.php'); 
    require_once('components/session.php');
    if(!isset($_GET['catagoryID'])or empty($_GET['catagoryID']))
    {
    	header('LOCATION:index.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  require('components/css.php');?>
</head>
<body>
<?php  

  require('components/navigation.php');
  include('components/productSlider.php');

?>
<!-- hot scale -->
<div class="container-fluid minor">
<h1 class="text-center" style="color:#ff1654;letter-spacing: 10px;
 ">SHIRT</h1>
<div class="itemWrap">
	<!-- item start -->
<?php
$item =$connect->prepare("SELECT * FROM product WHERE catagoryID=?");
$item->bind_param('i',$_GET['catagoryID']);
$item->execute();
$itemExe= $item->get_result();
$itemResult=$itemExe->fetch_object();
$item->close();
if(mysqli_num_rows($itemExe)>0)
{
do
{
?>
<a href="view.php?productID=<?php echo $itemResult->productID; ?>">
	<div class="item">
		<div class="offer">
			<h6>
				<?php
                $mrpRate=$itemResult->productMrp;
 			    $sellRate =$itemResult->productRate;
 			    $discount=$mrpRate-$sellRate;
 			    echo round(($discount/$mrpRate)*100);   
 			    ?>% OFF
				
			</h6>
		</div>
		<div class="itemImg">
			<img src="assets/<?php echo $itemResult->productIcon; ?>">
		</div>
		<div class="discription">
			<h1><?php echo ucfirst($itemResult->productName); ?></h1>
			<h3><?php echo '<del>'.$mrpRate.'/- </del>';?><span style="color:red;padding-left: 5px;"><?php  echo $sellRate; ?></span></h3>

		<p><span style="font-weight: bolder;">Discription</span>
			<?php echo substr($itemResult->productDiscription,0,100)?>..</p>
		<ul>
			<li>Size</li>
			<li>32</li>
			<li>32</li>
			<li>33</li>
			<li>34</li>
			<li>35</li>
		</ul>
		<br>
		<button class="itemBtn" id="AddCart">View product</button>
		</div>
	</div>
</a>
	<!-- item end -->
<?php
}
    while($itemResult=$itemExe->fetch_object());
}
else
{
	echo "<h1>NO ITEM FOUND</h1>";
}
?>



</div>
</div>
<?php  require('components/script.php');?>
</body>
</html>