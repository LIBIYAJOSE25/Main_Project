<?php
include '../connection.php';
session_start();
error_reporting(0);
$uid = $_SESSION['id'];
if($_SESSION['id']==""){
  header('location:sign in.php');
}

$cart=$_GET['id'];



$sql = mysqli_query($con,"SELECT * from tbl_cart where loginid='$uid'");
while($row=mysqli_fetch_array($sql)){
  $cartid = $row['id'];
  $price = $row['totalprice'];
  
 
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
						<li class="nav-item"><a class="nav-link" href="placeorder.php">Place Food Order</a></li>
						
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">My Cart</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="cart.php">Product Cart</a>
								
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
	
	<!-- Start About -->
	<!--<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>CRUISELINER</span></h1>
						<p>Perhaps this cruise ship fact isn’t a fun one, but it’s true. Many people wonder if cruise ships have a morgue on board, and they do. This isn’t something cruise lines publicize, but of course people can die anywhere, even on a cruise vacation. So, all cruise ships sail with a morgue, usually located on the lowest decks away from passengers.</p>
						<p>This may go without saying for seasoned cruisers, but this fact might surprise you if you’re cruising for the first time. Internet on a cruise just isn’t the same as at a land resort.Wifi has been limited, slow and pretty expensive for years. However, this is changing. We’re now seeing that cruise ship internet is making strides, and is faster and less expensive than in the past. An example of this is the innovative Princess Cruises Ocean Medallion, which has the fast and affordable MedallionNet.</p>
						
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/port-img7.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>-->
	<!-- End About -->
	
	<!-- Start QT -->
	<!--<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Billing Address</h2>
						
						
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h2><b>Billing address</b></h2>
                        </div>
                        
                        <form action="orderaction.php?cid=<?php echo $cartid; ?>&&price=<?php echo $price ; ?>&&qua=<?php echo $rrrr ; ?>&&bb=<?php echo $yy ; ?>" class="needs-validation" novalidate>
                            <div class="row">
                                
                            </div>
                            <div class="mb-3">
                            <?php
                $result = mysqli_query($con,"SELECT * FROM register where loginid='$uid'");
                                while ($raw = mysqli_fetch_array($result)){ ?>
                                <label for="username">Name</label>
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
                                    <h2><b>Shopping cart</b></h2>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <div class="media mb-2 border-bottom">
                                    <?php
                                $result = mysqli_query($con,"SELECT tbl_cart.id,tbl_cart.price,tbl_cart.quantity,tbl_cart.totalprice, tbl_cart.pid,product.name, product.file FROM tbl_cart LEFT JOIN product ON tbl_cart.pid = product.pid where loginid='$uid'");
                                while ($raw = mysqli_fetch_array($result)){ ?>
                                        <div class="media-body"> <a href="cart.php"> <b><?php echo $raw['name']; ?></b></a>

                                            <div class="large text-muted"><b>Location:</b><?php echo $raw['location']; ?><br>Price: <?php echo $raw['price']; ?> <span class="mx-2"><br></span> Quantity: <?php echo $raw['quantity']; ?> <br> Subtotal: <?php echo $raw['totalprice']; ?> </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                   
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3><b>Your order</b></h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold"><b>Product</b></div>
                                    <div class="ml-auto font-weight-bold"><b>Total</b></div>
                                </div>
                              
                            
                          
                               
                                <hr>
                                <div class="d-flex gr-total">
                                    <h3 style="color:#1e90ff;"><b>Grand Total</b></h3>
                                    <?php
                                    $qq = mysqli_query($con,"SELECT SUM(totalprice) FROM `tbl_cart` WHERE loginid='$uid'");
                                    while($er=mysqli_fetch_array($qq)){
                                    ?>
                                    <div class="ml-auto h5"> <?php echo $er['SUM(totalprice)']; ?> </div>
                                    <?php } ?>
                                </div>
                                <hr> </div>
                        </div>
						</form>
                        <button style="color:#d65106;"><a href="final.php" class="ml-auto btn hvr-hover">Place Order</a></button>
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
