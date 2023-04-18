<?php
session_start();
include('../connection.php');	

if(isset($_POST['submit']))
{
	$cname=$_POST['cname'];
	$Description=$_POST['Description'];
	/*$category=$_POST['category'];
	$file=$_FILES["file"]["name"];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];*/
	
 
  
   // $query=mysqli_query($con,"select max(fid) as fid from  food");
	//$result=mysqli_fetch_array($query);
	//$fid=$result['fid']+1;
	//$dir="file/$fid";
//if(!is_dir($dir))
		//mkdir("file/".$fid);

/*move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/".$_FILES["file"]["name"]);*/
$sql="insert into category(cname,Description,status) values('$cname','$Description','active')";
$result = mysqli_query($con,$sql);
echo "<script> alert('Item Added'); window.location.href='addcategory.php';</script>";

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
                    <h2 class="content-heading">Add Category</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Add Category</h3>
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
                                            <label class="col-12" for="register1-email">Name:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter category Name" value="" required >
                                            </div>
                                        </div>
										
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Description:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="Description"  placeholder="Enter Description" value="" required  />
                                            </div>
                                        </div>
									
                                        

                                       <!-- <div class="form-group row">
                                            <label class="col-8" for="register1-password">Product Category:</label>
                                            <select class="form-control"name="category">
                             <option value="">Select Category</option>
                            <?php $query=mysqli_query($con,"select * from category");
                           while($row=mysqli_fetch_array($query))
                              { 
                              ?>
                             <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?>
                            </option>
                             <?php }?>
	                     </select>
                                        </div>
										<span id="msg4" style="color:red;"></span>
		
<script>
function Validat() 
{
    var val = document.getElementById('phonenumber').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phonenumber').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Quantity:</label>
                                            <div class="col-12">
                                                 <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity" id="quantity" required>
                                            </div>
                                        </div>
		                                <div class="form-group row">
                                            <label class="col-12" for="register1-password">Image:</label>
                                            <div class="col-12">
                                                 <input type="file"  id="file"  name="file" required onchange="fileValidation1();">
                                            </div>
                                        </div>
										<script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('file');
              
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
                                            <label class="col-12" for="register1-password">Price:</label>
                                            <div class="col-12">
                                                 <input type="number" class="form-control" placeholder="Enter Price" name="price" id="price" required>
                                            </div>
                                        </div>-->
										
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit"  name="submit" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-5"></i> Add Category
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

