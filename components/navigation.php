
<header>
	<div class="container-fluid">
		<div class="heads">
			<div class="brand">
				<h1>E-Commerce</h1>
			</div>
			<div class="headSearch">
				<form>
					<input type="search" name="search" placeholder="search">
					<input type="submit" name="submit" value="search">
				</form>
			</div>
			<div class="toggle">
				<a href="#"><i class="fas fa-bars"></i></a>
			</div>
		</div>
	</div>
</header>
<!-- header ends -->
<!-- pc navigation -->
<nav>
	<section class="container-fluid">
		<section class="navWrap">

			<ul class="menu">
				<li><a href="index.php">home</a></li>
				<li><a href="#">shop</a>
                   <div class="megaMenu">
                     <div class="contaner-fluid">
                     	<div class="row">
                     		<div class="col-lg-3">
                     			<img src="assets/m2.jpg" style="width: 100%;height: auto;overflow: hidden;">
                     		</div>
                     		<div class="col-lg-2">
                     			<ul>
                     				<h3 class="navTitle">MEN's Clothing</h3>
                     				<?php 
                                     $navExe =$connect->query('SELECT * FROM catagory');
                                     $navResult=$navExe->fetch_object();
                                     do
                                     {
                                     echo '<li><a href="product.php?catagoryID='.$navResult->catagoryID.'">'.ucfirst($navResult->catagoryName).'</a></li>';
                                     
                                     // mysqli_fetch_assoc()
                                     }
                                     while($navResult=$navExe->fetch_object());
                     				?>
			                   	  	
									<!-- <li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li> -->
								 </ul>	
                     		</div>
                     		<div class="col-lg-3">
                     			<ul>
                     				<h3 class="navTitle">WOMEN's Clothing</h3>
			                   	  	<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
								 </ul>	
                     		</div>
                     			<div class="col-lg-2">
                     			<ul>
                     				<h3 class="navTitle">KID's Clothing</h3>
			                   	  	<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
								 </ul>	
                     		</div>

                     		<div class="col-lg-2">
                     			<ul>
                     				<h3 class="navTitle">ACCESSORIES</h3>
			                   	  	<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
									<li><a href="#">sHOME</a></li>
								 </ul>	
                     		</div>

                     	</div>
                     	
                     </div>

                   	 
                   </div>
				</li>
				<li><a href="#">New arrival</a></li>
				<li><a href="#">top brands</a></li>
				<li><a href="#">contact</a></li>
				<li style="text-align: right;float: right;"><a href="login.php"><i class="far fa-user"></i> <?php if(isset($_SESSION['userName']))
				{
					echo 'Welcome '.$_SESSION['userName'];
				}
				else{
					echo "Login";
				}


				?></a></li>
			    	<li style="text-align: right;float: right;"><a href="#" id="cart"><i class="fas fa-shopping-cart"></i> Cart</a>
                       <div class="subMenu">
                       	<section class="tableWrap">
                       	<?php
                          if(!empty($_SESSION['myCart']))
                          {
                         ?>
                       	 <table class="table" style="width:100%;">
						  <thead style="	background-color:  #ff1654;color:white">
						    <tr>
						      <th scope="col">No</th>
						      <th scope="col">Product Image</th>
						      <th scope="col">Product</th>
						      <th scope="col">Rs</th>
						       <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody id="cartBody">
						  	
						   
						 
						    <!-- end -->
						  </tbody>
						</table>
						</section>
						<button class="cartBtn">Checkout</button>
						<?php
                         }
                         else
                         {
                         	echo '<div class="cartEmpty">

                                   <h1>Cart is empty </>
                         	</div>';
                         }
						?>
						
                       </div>



			    	</li>
				<!-- <li><a href="#">HOME</a></li>
				<li><a href="#">HOME</a>
                    <div class="subMenu">
                   	 <ul>
                   	  	<li><a href="#">sHOME</a></li>
						<li><a href="#">sHOME</a></li>
						<li><a href="#">sHOME</a></li>
						<li><a href="#">sHOME</a></li>
						<li><a href="#">sHOME</a></li>
					 </ul>	
                   </div>
				</li> -->
			</ul>



		</section>
	</section>
</nav>
<!-- navigation ends-->
