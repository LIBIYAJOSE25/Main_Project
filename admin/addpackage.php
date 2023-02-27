<?php
session_start();
include('../connection.php');	

if(isset($_POST['submit']))
{
	
	$arrivaldate=$_POST['arrivaldate'];
    $sttime=$_POST['stime'];
	$etime=$_POST['etime'];
    $place=$_POST['place'];
	$package=$_POST['package'];
	$rate=$_POST['rate'];
	


$sql="insert into package(stime,etime,place,package,rate,status) values('$stime','$etime','$place','$package','$rate','active')";
$result = mysqli_query($con,$sql);
echo "<script> alert('Item Added'); window.location.href='addpackage.php';</script>";

}
?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>COLORMYWORLD</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

</head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

             <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                    <h2 class="content-heading">Packages</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title"></h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                   
                                    <form method="post" enctype="multipart/form-data">
                                        
                                        
										
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Service Starting Time:</label>
                                            <div class="col-12">
                                                 <input type="time" class="form-control" name="stime"  placeholder="Staring time" value="" required  />
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12" for="register1-email">Service Ending Time</label>
                                            <div class="col-12">
                                                 <input type="time" class="form-control" name="etime"  placeholder="ending Time" value="" required  />
                                            </div>
                                        </div>
									
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Place:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="place"  placeholder="Enter place" value="" required  />
                                            </div>
                                        </div>
									<div class="form-group row">
                                            <label class="col-12" for="register1-email">Packages:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="package"  placeholder="Enter packages" value="" required  />
                                            </div>
                                        </div>
									

                                        
	                                    
	                                    <div class="form-group row">
                                            <label class="col-12" for="register1-password">Rate:</label>
                                            <div class="col-12">
                                                 <input type="number" class="form-control" placeholder="Enter Rate" name="rate" id="rrate" required>
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit"  name="submit" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-5"></i> Add 
                                                </button>
                                            </div>
                                        </div>
                                    </form>
										
                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
						
                        
                       </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

          <?php include_once('includes/footer.php');?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
    </body>
</html>

