<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$id=$_GET["id"];
include '../connection.php';
$sql2="update  `food`  set status='inactive' where fid=$id";
 mysqli_query($con, $sql2);
header("location:viewfooditem.php");
?>
</body>
</html>
