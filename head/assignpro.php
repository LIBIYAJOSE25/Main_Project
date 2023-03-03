<?php
extract($_POST);
$cid=$_GET["cid"];
$dname=$_POST["dname"];
include '../connection.php';
$sql2="UPDATE `order_tbl` SET `status` = 'Assigned',`wid` ='$dname' WHERE `order_tbl`.`id` = '$cid'";
$res1=mysqli_query($con,$sql2);
?>
<script>
alert('Waiter Assigned....!');
window.location='viewfoodorder.php';
</script>

