<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
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
                    <h2 class="content-heading">Add Service</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Add Service</h3>
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
                                            <label class="col-12" for="register1-email">Service Name:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="sname" id="sname" placeholder="Enter Service Name" value="" required onchange="Validate();">
                                            </div>
                                        </div>
										<!--<div class="form-group row">
                                            <label class="col-12" for="register1-email">Language:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="language" id="lange" placeholder="Enter language" value="" required onchange="Validaten();">
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Cast:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="cast" id="cast"  placeholder="Enter Cast" value="" required onchange="Validage();" />
                                            </div>
                                        </div>-->
										<span id="msg2" style="color:red;"></span>
						                   

                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Description:</label>
                                            <div class="col-12">
                                                <textarea type="text" class="form-control" name="description"  id="description" placeholder="Enter Description" value="" required  onchange="Validat();"/></textarea>
                                            </div>
                                        </div>
										<span id="msg4" style="color:red;"></span>
		

                                          <!-- <div class="form-group row">
                                            <label class="col-12" for="register1-password">Release Date:</label>
                                            <div class="col-12">
                                                <input type="date" class="form-control" name="date" id="email" placeholder="Enter email">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12" for="register1-password">Screen:</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="screen" id="screen" placeholder="Enter screen">
                                            </div>
                                        </div>-->
										<div class="form-group row">
                                            <label class="col-12" for="register1-password">Rate per head:</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Charge">
                                        </div> 
                                            </div>
		                                <div class="form-group row">
                                            <label class="col-12" for="register1-password">Image:</label>
                                            <div class="col-12">
                                                 <input type="file"  id="image"  name="image" required onchange="fileValidation1();">
                                            </div>
                                        </div>
										<script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('image');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }
    </script>            
	                                    
	                                    <div class="form-group row">
                                            <label class="col-12" for="register1-password">Service Start Time:</label>
                                            <div class="col-12">
                                                 <input type="time"  id="stime"  name="stime" required>
                                            </div>
                                        </div>
										<!--<div class="form-group row">
                                            <label class="col-12" for="register1-password">AM/PM:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" id="sampm" placeholder="Enter Am/Pm"  name="ampm" required>
                                            </div>
                                        </div>-->

                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Service End Time:</label>
                                            <div class="col-12">
                                                 <input type="time"  id="etime"  name="etime" required>
                                            </div>
                                        </div>
										<!--<div class="form-group row">
                                            <label class="col-12" for="register1-password">AM/PM:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" id="eampm" placeholder="Enter Am/Pm"  name="ampm" required>
                                            </div>
                                        </div>-->

                                    
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit"  name="b" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-5"></i> Add Service
                                                </button>
                                            </div>
                                        </div>
                                    </form>
										<?php
include '../connection.php';
if(isset($_POST['b']))
{
$sname=$_POST['sname'];
/*$language=$_POST['language'];
$cast=$_POST['cast'];*/
$description=$_POST['description'];
/*$date=$_POST['date'];*/
$stime=$_POST['stime'];
$etime=$_POST['etime'];
/*$ampm=$_POST['ampm'];*/
/*$screen=$_POST['screen'];*/
$price=$_POST['price'];
$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
$sql="insert into service(sname,stime,etime,price,description,image,status) values('$sname','$stime','$etime','$price','$description','$image','active')";
$result = mysqli_query($con, $sql);
echo "<script> alert('Service Successfully added'); window.location.href='addservice.php';</script>";

							}
								
							?>

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
<?php
}
else
header('location:../sign in.php');
?>


