<?php
require_once('config/connection.php');
require_once('components/session.php');
if(isset($_GET['action']) and !empty($_GET['action']))
{
	$action=$_GET['action'];
}
$myProcess =new process();

if($action=='addCart')
{
	$myProcess->addCart();
}
if($action=='carts')
{
        $myProcess->carts();
}
class process
{
	function addCart()
	{
        $name=$_POST['productName'];
        $price=$_POST['productPrice'];
        $productImage =$_POST['productImage'];

        // echo $name.$price.$productImage;
        $addCart =array(
         'productID'=>$_SESSION['productID'],
         'productName'=>$name,
         'productPrice'=>$price,
         'productImage'=>$productImage
        );
         $_SESSION['productID'] =$_SESSION['productID']+1;
        array_push($_SESSION['myCart'], $addCart);

        print_r($_SESSION['myCart']);
	}

        function carts()
        {

                                                        $countMe =1;
                                foreach ($_SESSION['myCart'] as $key) {
                                                          // if($key['stockQty']!=0){

                             
                                                        ?>
                                                    <tr>
                                                      <th scope="row"><?php echo $countMe;?></th>
                                                      <td><img src="<?php echo $key['productImage']?>" style="width: 75px;overflow:hidden;align-content: center;"></td>
                                                      <td><p class="text-left"><?php echo $key['productName']?></p></td>
                                                      <td><?php echo $key['productPrice']?></td>
                                                      <td>Remove</td>
                                                    </tr>
                                                    <?php
                                                      $countMe++;
                                              }
                                                           // }
                                                
        }
}

?>