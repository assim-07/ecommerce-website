<?php
session_start();
 if(!isset($_SESSION['myCart']))
    {
        $_SESSION['myCart']=array();
        $_SESSION['productID']=0;
    }


?>