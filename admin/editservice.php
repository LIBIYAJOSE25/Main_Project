<?php      
    include '../connection.php';
    $seid=$_GET['seid'];
    $sql="select * from `service` where seid='$seid'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $sname=$row['sname'];
	/*$cast=$row['cast'];*/
	$description = $row['description'];
	/*$date=$row['date'];*/
	$stime=$row['stime'];
    $etime=$row['etime'];
   
    //$file = $row['file'];
    //$officer_email = $row['officer_email'];
    //$officer_password = $row['officer_password'];

    if(isset($_POST['s']))
    {
    $seid=$_GET['seid'];
	$sname = $_POST['sname'];
	/*$cast = $_POST['cast'];*/
	$description = $_POST['description'];
	/*$date = $_POST['date'];*/  
    $stime = $_POST['stime'];
    $etime = $_POST['etime'];
    
    //$file = $_FILES['file']['name'];
	//move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/$programid/".$_FILES["file"]["name"]);
	//move_uploaded_file($_FILES['pimg']['tmp_name'],"../uploads/".$pimg);
	//if($_FILES['pimg']['name']=='')
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
    
   
   mysqli_query($con,"UPDATE `service` SET `seid`='$seid',`sname`='$sname',`description`='$description',`stime`='$stime',`etime`='$etime',`image`='$image' where seid='$seid'");
    
            header('location: viewservice.php');
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
                    <h2 class="content-heading">UPDATE SERVICE</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Update Service</h3>
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
                                            <label class="col-12" for="register1-username">Service Name</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="sname" id="sname" onfocusout="f1()" value="<?php echo $sname ?>" required onChange="Valr();">
                                            </div>
                                        </div>
										<!--<div class="form-group row">
                                            <label class="col-12" for="register1-username">Cast</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="cast" id="cast" onfocusout="f1()" value="" required onChange="Valr();">
                                            </div>
                                        </div>-->
										<div class="form-group row">
                                            <label class="col-12" for="register1-password">Description</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="description" id="description"  onfocusout="f1()" value="<?php echo $description ?>">
                                            </div>
                                        </div>
									
                                        <!--<div class="form-group row">
                                            <label class="col-12" for="register1-email">Date</label>
                                            <div class="col-12">
                                                 <input type="date" class="form-control" name="date"  id="date"    onfocusout="f1()" value=""-->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Service Start Time</label>
                                            <div class="col-12">
                                                <input type="time" class="form-control" name="stime"  id="stime"  onfocusout="f1()" value="<?php echo $stime?>" required onChange="Vallawcr();">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Service End Time</label>
                                            <div class="col-12">
                                                <input type="time" class="form-control" name="etime"  id="etime"  onfocusout="f1()" value="<?php echo $etime?>" required onChange="Vallawcr();">
                                            </div>
                                        </div>

										
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success" name="s">
                                                    <i class=""></i> Update
                                                </button>
												<button type="submit" class="btn btn-alt-success" >
                                                    <a href="viewservice.php"><i class=""></i> Cancel
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
