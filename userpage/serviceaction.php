 <?php
 include '../connection.php';
 if(isset($_POST['movie'])){
    session_start(); 
    $uid = $_SESSION['id'];
    $sid = $_GET['serviceid'];
    $sql = mysqli_query($con,"SELECT * from service where seid='$sid'");
    $data=mysqli_fetch_array($sql);
    $imageurl='images'.$data["image"];
    $pname=$data["sname"];
    $pprice=$data["price"];
    //$location=$_POST["location"];
    $days=$_POST['days'];
	$suss=mysqli_query($con,"SELECT * from booking_tbl where seid='$sid' and loginid='$uid'");
	$hh=mysqli_num_rows($suss);
	if($hh > 0){
	echo"<script>alert('service already Added');</script>";
    echo"<script>window.location='servicebooking.php';</script>";
	}else{
	
    $product = "SELECT * from service where seid='$sid'";
    $products = mysqli_query($con,$product);
    $totalprice=0;
    $totalprice=$days*$pprice;
     $sql2 = "INSERT INTO `booking_tbl`(`loginid`,`seid`,`days`,`price`,`totalprice`,`status`) VALUES('$uid','$sid','$days','$pprice','$totalprice',1)";
       $food = mysqli_query($con,$sql2);
	}
	  
   
       if (!$product) {
        echo "Error: " . mysqli_error($con);
    }else{
        header("location:servicecheckout.php");
    }
}

    
      
    


?>