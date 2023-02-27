<?php      
    include '../connection.php';
    $packageid=$_GET['packageid'];
    $sql="select *from `package` where packageid='$packageid'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $stime = $row['stime'];
	$etime = $row['etime'];
	$place=$row['place'];
	$package=$row['package'];
	$rate=$row['rate'];
    //$file = $row['file'];
    //$officer_email = $row['officer_email'];
    //$officer_password = $row['officer_password'];

    if(isset($_POST['s']))
    {
    $packageid=$_GET['packageid'];
	$stime = $_POST['stime'];
	$etime = $_POST['etime'];
	$place = $_POST['place'];  
    $package = $_POST['package'];
	$rate = $_POST['rate'];
    
        //{
            //$path=$_POST['old'];
       // }
      //  else {
                //$pimg=$_FILES['pimg']['name'];
                //$pimg_tmp=$_FILES['files']['tmp_name'];
                //$path="../upload/".$pimg;
				//move_uploaded_file($_FILES['pimg']['tmp_name'],"../uploads/".$pimg);
               
            //}
	
    //$officer_email = $_POST['email'];
   // $officer_password = $_POST['password'];
    
   
        mysqli_query($con,"UPDATE `package` SET `packageid`='$packageid',`stime`='$stime',`etime`='$etime',`place`='$place',`package`='$package',`rate`='$rate' where packageid='$packageid'");
    
            header('location: viewpackage.php');
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
     

   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                    <h2 class="content-heading">UPDATE PACKAGE</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Update </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    
                                    <form method="post">
                                        
										<div class="form-group row">
                                            <label class="col-12" for="register1-password">Service Staring Time</label>
                                            <div class="col-12">
                                                 <input type="time" class="form-control" name="stime" id="stime"  onfocusout="f1()" value="<?php echo $enttime ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Service Ending Time</label>
                                            <div class="col-12">
                                                 <input type="time" class="form-control" name="etime" id="etime"  onfocusout="f1()" value="<?php echo $enttime ?>">
                                            </div>
                                        </div>
									
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">PLACE</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="place"  id="places"    onfocusout="f1()" value="<?php echo $place?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">PACKAGE</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="package"  id="packages"  onfocusout="f1()" value="<?php echo $package?>" required onChange="Vallawcr();">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12" for="register1-password">RATE</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="rate"  id="rrate"  onfocusout="f1()" value="<?php echo $rate?>" required onChange="Vallawcri();">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success" name="s">
                                                    <i class=""></i> Update
                                                </button>
												<button type="submit" class="btn btn-alt-success" >
                                                    <a href="viewpackage.php"><i class=""></i> Cancel
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
