<?php
  session_start();
  $id=$_GET['id'];
  include '../connection.php';
  $sq = "UPDATE `architect` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sq);
  $sql = "UPDATE `login` SET status=0 WHERE loginid = '$id'";
  mysqli_query($con, $sql);
  echo "<script> alert('architect removed'); window.location.href='viewarchitect.php';</script>";
?>