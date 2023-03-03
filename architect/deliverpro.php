<?php
extract($_POST);
$cid=$_GET["cid"];
include '../connection.php';
$sql2="UPDATE `order_tbl` SET `status` = 'Delivered' WHERE `order_tbl`.`id` = '$cid'";
$res1=mysqli_query($con,$sql2);
?>
<script>
alert('Product Delivered....!');
window.location='viewproductitem.php';
</script>


