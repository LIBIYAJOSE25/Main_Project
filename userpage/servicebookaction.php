<?php
include '../connection.php';
session_start();
error_reporting(0);
$uid = $_SESSION['id'];
if($_SESSION['id']==""){
  header('location:sign in.php');
}
$cartid = $_GET['cid'];
$price = $_GET['price'];
$order="INSERT INTO `order_tbl`(`login_id`, `cartid`, `price`,`status`) VALUES ('$uid', '$cartid', '$price','placed')";
$or1=mysqli_query($con,$order);
$sqlls = "DELETE from tbl_cart where id=$cartid";
mysqli_query($con,$sqlls);
$orid = mysqli_insert_id($con);
$qq = mysqli_query($con,"UPDATE `cart_tbl` SET sts=1, orderid ='$orid' WHERE sts = 0 and login_id = '$uid' ");

echo"<script>window.location='servicefinal.php';</script>";
?>