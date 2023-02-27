<?php
  session_start();
  $id=$_GET['id'];
  include '../connection.php';
  $sq = "UPDATE `headcook` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "UPDATE `login` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('Headcook removed'); window.location.href='viewheadcook.php';</script>";
?>