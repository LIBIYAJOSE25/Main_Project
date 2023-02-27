<?php
session_start();
include('../connection.php');	

if(isset($_POST['submit']))
{
	//$customizable=$_POST['custom'];
	$cname=$_POST['cname'];
	$description=$_POST['description'];
    //$productimage=$_FILES["image"]["name"];
 
  
//for getting product id
   

     $valid=mysqli_query($con,"select * from category where cname='$cname'");
if(mysqli_num_rows($valid)>0){
	echo"<script>alert('Item already exists')</script>";
	echo"<script>location=insertcategory.php</script>";
}else{


	//move_uploaded_file($_FILES["image"]["tmp_name"],"categoryimages/".$_FILES["image"]["name"]);
$sql=mysqli_query($con,"insert into category(cname,description,status) values('$cname','$description''active')");

echo "<script>alert('category added');</script>";
}
}
?>

<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Cruiseliner-Headcook Dashboard</title>
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
                                            <label class="col-12" for="register1-email">Category Name:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Category Name" required onchange="Validate();">
                                            </div>
                                        </div>
										<span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('cname').value;

    if (!val.match(/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/)) 
    {
        document.getElementById('msg1').innerHTML="Only alphabets are allowed!!";
		            document.getElementById('cname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
									
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Description:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="description" placeholder="Enter Description">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit"  name="b" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-5"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </form>
									<?php
include '../connection.php';
if(isset($_POST['b']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$idproof=$_FILES['idproof']['name'];
move_uploaded_file($_FILES['idproof']['tmp_name'],"../uploads/".$file);
$file1=$_FILES['file1']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'],"../uploads/".$file1);
$experiencedyears=$_POST['experiencedyears'];
$username=$_POST['username'];
$password=$_POST['password'];
 $s1 = "SELECT * FROM login WHERE username = '$username'";
    $result1 = mysqli_query($con, $s1);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['username']) ? $row1['username'] : '';
if ($uname!="")
            {
            echo "<script>alert('please enter another username'); window.location.href='addheadcook.php';</script>";
            }
            else
{

            $sq = "INSERT INTO login (username,password,type1,status) VALUES ('$username','$password','headcook','1')";
            mysqli_query($con, $sq);
            $sqll = "SELECT * FROM login WHERE username = '$username' and password = '$password' and type1 = 'headcook'";
            $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $loid=$row['loginid'];
             $sql = "INSERT INTO headcook (loginid,name,age,gender,phonenumber,email,file1,experiencedyears,idproof,status)values($loid,'$name','$age','$gender','$phonenumber','$email','$file1','$experiencedyears','$idproof',1)";
            mysqli_query($con, $sql);
            echo "<script> alert('Headcook Added'); window.location.href='addheadcook.php';</script>";
            }
        }
       
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
