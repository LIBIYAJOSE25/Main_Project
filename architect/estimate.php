<?php

include('../connection.php');	
session_start();
error_reporting(0);
$uid = $_SESSION['id'];
echo $uid;
// error_reporting(0); 
// $id=$_SESSION['loginid'];
// echo $_SESSION['loginid'];

//$q="select loginid from tbl_login where id='loginid'";
// $res=mysqli_query($con,$q);
// $row=mysqli_fetch_array($res);
// $loginid= $row['loginid'];




if(isset($_POST['submit']))
{
	
	
    $painttype=$_POST['painttype'];
    $area=$_POST['area'];
	$material=$_POST['material'];
    $labour=$_POST['labour'];
	$amount=$_POST['amount'];
    $paint=$_POST['paint'];
    $surfacearea=$_POST['surfacearea'];
	$paintmateral=$_POST['paintmateral'];
    $labours=$_POST['labours'];
	$amountt=$_POST['amountt'];
    $paintttype=$_POST['paintttype'];
    $areaa=$_POST['areaa'];
	$materall=$_POST['materall'];
    $labourr=$_POST['labourr'];
	$amounnt=$_POST['amounnt'];
	
	


$sql="insert into tbl_estimate(loginid,painttype,area,material,labour,amount,paint,surfacearea,paintmateral,labours,amountt,paintttype,areaa,materall,labourr,amounnt) values('$uid','$painttype','$area','$material','$labour','$amount','$paint','$surfacearea','$paintmateral','$labours','$amountt','$paintttype','$areaa','$materall','$labourr','$amounnt')";
$result = mysqli_query($con,$sql);
echo "<script> alert('Item Added'); window.location.href='estimate.php';</script>";

}

?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>COLORMYWORLD</title>
<link rel="stylesheet" id="css-main" href="vendor/css/codebase.min.css">

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
                    <h2 class="content-heading">Estimation</h2>
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
                                            <label class="col-10" for="register1-password">wall surface</label>
                                            <div class="col-12">
                                               Paint type  <input type="text" class="form-control" name="painttype" id="painttype"  required>
                                            </div><br></br>

                                            <div class="col-12">
                                               Area <input type="text" class="form-control" name="area" id="area"  required>
                                            </div>

                                            <div class="col-12">
                                               Material <input type="number" class="form-control" name="material" id="material"  required>
                                            </div><br></br>

                                            <div class="col-12">
                                               Painter  <input type="number" class="form-control" name="labour" id="labour"  required>
                                            </div><br></br>
                                            
                                            <div class="col-12">
                                               Amount  <input type="number" class="form-control" name="amount" id="amount"  required>
                                            </div><br></br>



                                            <div class="form-group row">
                                            <label class="col-12" for="register1-password">Celling</label>
                                            
                                            <div class="col-12">
                                               Paint type  <input type="text" class="form-control" name="paint" id="paint"  required>
                                            </div><br></br>

                                            <div class="col-12">
                                               Area <input type="text" class="form-control" name="surfacearea" id="surfacearea1"  required>
                                            </div>

                                            <div class="col-12">
                                               Material <input type="number" class="form-control" name="paintmateral" id="paintmateral"  required>
                                            </div><br></br>

                                            <div class="col-12">
                                               Painter  <input type="number" class="form-control" name="labours" id="labours"  required>
                                            </div><br></br>
                                            
                                            <div class="col-12">
                                               Amount  <input type="number" class="form-control" name="amountt" id="amountt"  required>
                                            </div><br></br>

                                            
                                            <div class="form-group row">
                                            <label class="col-12" for="register1-password">Trim</label>
                                            
                                            <div class="col-12">
                                               Paint type  <input type="text" class="form-control" name="paintttype" id="paintttype"  required>
                                            </div><br></br>

                                            <div class="col-12">
                                               Area <input type="text" class="form-control" name="areaa" id="areaa"  required>
                                            </div>

                                            <div class="col-12">
                                               Material <input type="number" class="form-control" name="materall" id="materall"  required>
                                            </div><br></br>

                                            <div class="col-12">
                                               Painter  <input type="number" class="form-control" name="labourr" id="labourr"  required>
                                            </div><br></br>
                                            
                                            <div class="col-12">
                                               Amount  <input type="number" class="form-control" name="amounnt" id="amounnt"  required>
                                            </div><br></br>


	                                    
										
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

