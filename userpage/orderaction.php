<?php
include '../connection.php';
session_start();
//error_reporting(0);
$uid = $_SESSION['id'];
if($_SESSION['id']==""){
  header('location:sign in.php');
}
$cartid = $_GET['cid'];
$price = $_GET['price'];
$qun=$_GET['qua'];
$tt=$_GET['bb'];
$order="INSERT INTO `order_tbl`(`login_id`, `cartid`, `price`,`status`) VALUES ('$uid', '$cartid', '$price','unpaid')";
$or1=mysqli_query($con,$order);
$z=mysqli_insert_id($con);


$query="SELECT quantity FROM product WHERE pid='$tt'  ";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_array($result);
	 $dat=$data['quantity'];
   $total=0;
   $total=$dat-$qun;
     
			$n=mysqli_query($con,"UPDATE product set quantity='$total' where pid='$tt' ");
		
$sqlls = "UPDATE tbl_cart set status='2' where id=$cartid";
mysqli_query($con,$sqlls);
$orid = mysqli_insert_id($con);
$qq = mysqli_query($con,"UPDATE `tbl_cart` SET status=1 WHERE status = 0 and loginid = '$uid' ");

$sqlls = "UPDATE tbl_cart SET status='2' WHERE id='$cartid'";
mysqli_query($con,$sqlls);
$orid = mysqli_insert_id($con);
$qq = mysqli_query($con,"UPDATE `tbl_cart` SET status=1 WHERE status = 0 and loginid = '$uid' ");


echo"<script>window.location.href='final.php?cid=$cartid';</script>";
//header('location:final.php?id=echo $cartid');

?>





