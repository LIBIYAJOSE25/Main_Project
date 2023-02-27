<?php
include '../connection.php';
session_start();
//error_reporting(0);
$uid = $_SESSION['id'];
// $name = $_GET['name'];
$amount = $_GET['amount'];
$artist = $_GET['ar'];
$rf= $_GET['rer'];

$sql="INSERT INTO `tbl_payment`(`login`, `order_id`, `amount`, `pay_status`) VALUES('$uid','$rf','$amount','Paid')";
$query_run=mysqli_query($con,$sql);
   

$qq = mysqli_query($con,"UPDATE `order_tbl` SET status='placed' WHERE  id = '$rf' ");

 

echo "<script>window.location='final.php?ar=$artist';</script>";

?>