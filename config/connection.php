<?php 
define('SERVER', 'localhost');

define('USER', 'root');
define('PASSWORD','');
define('DATABASE', 'ecom');

$connect = new mysqli(SERVER,USER,PASSWORD,DATABASE);

if($connect->connect_error)
{
	header("LOCATION:down/sorry.php");
	exit();
}


 ?>