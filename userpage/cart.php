 <?php
include '../connection.php';
session_start();
//error_reporting(0);
$uid = $_SESSION['id'];
if($_SESSION['id']==""){
  header('location:sign in.php');
}
$sql = mysqli_query($con,"SELECT * from tbl_cart where loginid='$uid'");
while($row=mysqli_fetch_array($sql)){
  $cartid = $row['id'];
  $price = $row['totalprice'];
  
 
}
?>
<?php

if(isset($_POST['remove'])){
$cartid = $_POST['id'];
$sqlls = "DELETE from tbl_cart where id=$cartid";
mysqli_query($con,$sqlls);
echo"<script>alert('Item Removed');</script>";
echo"<script>window.location='cart.php';</script>";

}

if(isset($_POST['update'])){
    $price = $_POST['price'];
    $quan = $_POST['quantity'];
    $total=$_POST['price'] * $_POST['quantity'];
    $cartid = $_POST['id'];
    
  

    $sqll = "UPDATE tbl_cart SET quantity=$quan,totalprice=$total where id=$cartid";
    mysqli_query($con,$sqll);
	echo"<script>alert('Item Updated');</script>";
echo"<script>window.location='cart.php';</script>";
    
    
    }
	
if(isset($_POST['order'])){
    $total=$_POST['total'];
	$car2 = mysqli_query($con,"SELECT * FROM `tbl_cart` where loginid=$uid");
    while($row = mysqli_fetch_array($car2))  { 
    $cartid = $_POST['id'];
	$order="INSERT INTO `order_tbl`(`login_id`, `cartid`, `price`,`status`) VALUES ('$uid', '$cartid', '$total','placed')";
	$or1=mysqli_query($con,$order);

   
     

    }
    //echo"<script>window.location='checkout.php';</script>";
	header("location:checkout.php");
}
	




   


?>





<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>COLORMYWORLD</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
				<p class=""><i class=""></i><h3><b>WELCOME</b></h3><b><h2></h2></b></strong></p>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="package.php">Package</a></li>
						<li class="nav-item"><a class="nav-link" href="placeorder.php">Place Product Order</a></li>
				
						<li class="nav-item"><a class="nav-link" href="cart.php">My cart</a></li>
						<!--<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>-->
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>-->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">My Account</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="userprofile.php">Profile</a>
								<a class="dropdown-item" href="changepassword.php">Change Password</a>
								<a class="dropdown-item" href="../logout.php">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	
	<!-- End slides -->
	
	
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
						
						
					</div>
				</div>
			</div>
			<form name="cart" method="POST">
			
			            <table class="table">
                            <thead>
                                <tr>
                                    <th align="center">Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
							
                                   <!-- <th>Total</th>-->
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php			
                                    $result = mysqli_query($con,"SELECT tbl_cart.id,tbl_cart.quantity,tbl_cart.price,tbl_cart.totalprice, tbl_cart.pid,product.name, product.file FROM tbl_cart LEFT JOIN product ON tbl_cart.pid = product.pid where loginid='$uid' and tbl_cart.status = 1 or tbl_cart.status= 0");
                                    while ($raw = mysqli_fetch_array($result)){
                                       
										$rrrr=$raw['quantity'];
                                        $yy=$raw['pid'];
                                        
                                      ?>
                                   
                                
                            
                                <tr>
                                    <td class="thumbnail-img">

									<img class="img-fluid" src="images/<?php echo $raw['file']; ?>" alt="" />
								
                                    </td>
                                    <td class="name-pr">
                                   
                                        <?php echo $raw['name']; ?>
								
                                    </td>
                                    <td class="price-pr">
                                        <input type="text" name="price" value="<?php echo $raw['price']; ?>" style="border: none;ont-family: 'Quattrocento Sans', sans-serif;color:#666666"  readonly>
                                    </td>
                                    <td class="quantity-box">
                                        <input type="number" name="quantity" size="4" value="<?php echo $raw['quantity']; ?>" min="1" class="c-input-text qty text">
                                    </td>
									
                                  <!-- <td class="total-pr">
                                    <input type="text" name="totalprice" value="<?php echo $ss ?>" style="border: none;ont-family: 'Quattrocento Sans', sans-serif;color:#666666" readonly>
                                    </td>-->
                                    <td class="remove-pr">
                                        <button name="remove" onClick="return remove()" style="border: none;color: #fff; background-color:#146eb4 ;">Remove</button>
                                
                                    </td>
                                    <input type="hidden" name="id" value="<?php echo $raw['id']; ?>">
                                 
                                </tr>
                                
                
                                <?php }  ?>
                               
                            </tbody>
                        </table>
						<div class="row my-5">
                
                <div class="col-lg-4 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit" name="update" style="border: none;color: #fff; background-color:#146eb4 ;">
                    </div>
                </div>
               
						</div>
		</div>
	</div>
	
	       
						
						
						
			</form>
			
			           
			      <div class="cart-box-main">
        <div class="container">
           
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                
                            </div>
                            <div class="mb-3">
                            <?php
                $result = mysqli_query($con,"SELECT * FROM register where loginid='$uid'");
                                while ($raw = mysqli_fetch_array($result)){ ?>
                                <label for="username"> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" placeholder="<?php echo $raw['fname']; ?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address </label>
                                <input type="email" class="form-control" id="email" placeholder="<?php echo $raw['email']; ?>" readonly>
                                
                            </div>
                            <div class="mb-3">
                                <label for="email">Contact Number </label>
                                <input type="email" class="form-control" id="phone" placeholder="<?php echo $raw['phone']; ?>" readonly>
                                
                            </div>
                            <!--<div class="mb-3">
                                <label for="address">Room No:</label>
                                <input type="text" class="form-control" id="address" placeholder="<?php echo $raw['room']; ?>" >
                            
                            </div>-->
                                <?php } ?>
                            
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                   
                                  
                                </div>
                                <div class="col-md-4 mb-3">
                                   
                                </div>
                                <div class="col-md-3 mb-3">
                                    
                                </div>
                            </div>
                            <hr class="mb-4">
                            
                          
                            
                            <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                    <?php
                                $result = mysqli_query($con,"SELECT tbl_cart.id,tbl_cart.price,tbl_cart.quantity,tbl_cart.totalprice, tbl_cart.pid,product.name, product.file FROM tbl_cart LEFT JOIN product ON tbl_cart.pid = product.pid where loginid='$uid' and tbl_cart.status =0 or tbl_cart.status=1;");
                                while ($raw = mysqli_fetch_array($result)){ ?>
                                        <div class="media-body"> <a href="cart.php"> <?php echo $raw['name']; ?></a>

                                            <div class="small text-muted">Price: <?php echo $raw['price']; ?> <span class="mx-2">|</span> Qty: <?php echo $raw['quantity']; ?>  Subtotal: <?php echo $raw['totalprice']; ?> </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                   
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                              
                            
                          
                               
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <?php
                                    $qq = mysqli_query($con,"SELECT SUM(totalprice) FROM `tbl_cart` WHERE loginid='$uid' and status in('0','1') ");
                                    while($er=mysqli_fetch_array($qq)){
                                    ?>
                                    <div class="ml-auto h5"> <?php echo $er['SUM(totalprice)']; ?> </div>
                                    <?php } ?>
                                </div>
                                <hr> </div>
                        </div>
                        
                        <!-- <div class="button" style=" margin-left: 350px; " > <a href="billpdf.php" class="ml-auto btn hvr-hover" style= "color: black;  background-color: skyblue; ">Generate Bill</a> </div> -->
                        <!-- <div class="button1"  > <a href="orderaction.php?cid=<?php echo $cartid ?>&&price=<?php echo $price ; ?>&&qua=<?php echo $rrrr ; ?>&&ui=<?php echo $f ; ?>&&bb=<?php echo $yy ; ?>" class="ml-auto btn hvr-hover" style="color: black; background-color: skyblue; ">Place Order</a> </div> -->
                                    




                                   
	<div class="button1"  > <a href="orderaction.php?cid=<?php echo $cartid ?>&&price=<?php echo $price ; ?>&&qua=<?php echo $rrrr ; ?>&&bb=<?php echo $yy ; ?>" class="ml-auto btn hvr-hover" style="color: black; background-color: skyblue; ">Place Order</a> </div>

                                       



                    </div>
                </div>
            </div>

        </div>
    </div>
				
			
			
		
	
	<!-- End Menu -->
	
	
	<!-- Start Footer -->
	
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
