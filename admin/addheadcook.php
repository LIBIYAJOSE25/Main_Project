<?php
session_start();
ob_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Cruiseliner-Admin Dashboard</title>
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
                    <h2 class="content-heading">Add Headcook</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Add Headcook</h3>
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
                                            <label class="col-12" for="register1-email">Enter Name:</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="" required onchange="Validate();">
                                            </div>
                                        </div>
										<span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/)) 
    {
        document.getElementById('msg1').innerHTML="Only alphabets are allowed!!";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Age:</label>
                                            <div class="col-12">
                                                 <input type="number" class="form-control" name="age" id="age"  placeholder="Enter Age" value="" required onchange="Validage();" />
                                            </div>
                                        </div>
										<span id="msg2" style="color:red;"></span>
						<script>		
function Validage() 
{
    var val = document.getElementById('age').value;

    if (!val.match(/^[1-9]+$/)) 
    {
        document.getElementById('msg2').innerHTML="Enter Correct age";
		            document.getElementById('age').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-email">Gender:</label>
                                            <div class="col-12">
                                                 <input type="radio" id="male" name="gender" value="Male" required />
                                                 <label for="male"><b>Male</b></label><br>
                                                 <input type="radio" id="female" name="gender" value="Female" required />
                                                 <label for="female"><b>Female</b></label><br>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Enter Phone Number:</label>
                                            <div class="col-12">
                                                <input type="number" class="form-control" name="phonenumber"  id="phonenumber" placeholder="Enter Number" value="" required  onchange="Validat();"/>
                                            </div>
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
                                            <label class="col-12" for="register1-password">Enter email id:</label>
                                            <div class="col-12">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="" required />
                                            </div>
                                        </div>
										
		                                <div class="form-group row">
                                            <label class="col-12" for="register1-password">Upload id Proof:</label>
                                            <div class="col-12">
                                                 <input type="file"  id="idproof" placeholder="upload your id proof" name="idproof" required onchange="fileValidation1();">
                                            </div>
                                        </div>
										<script>
        function fileValidation1() {
            var fileInput = 
                document.getElementById('idproof');
              
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
                                            <label class="col-12" for="register1-password">Upload Photo:</label>
                                            <div class="col-12">
                                                  <input type="file" id="file1" placeholder="upload photo" name="file1" required onchange="fileValidation();">
                                            </div>
                                        </div>
										<script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file1');
              
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
                                            <label class="col-12" for="register1-password">Enter Experienced Year:</label>
                                            <div class="col-12">
                                                  <input type="text" class="form-control" placeholder="Enter Experienced year" name="experiencedyears" required>
                                            </div>
                                        </div>
										<!--<div class="form-group row">
                                            <label class="col-12" for="register1-password">Username:</label>
                                            <div class="col-12">
                                                  <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                                            </div>
                                        </div>-->
										<div class="form-group row">
                                            <label class="col-12" for="register1-password">Password:</label>
                                            <div class="col-12">
                                                  <input type="password" class="form-control" placeholder="Enter password" name="password" required>
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
move_uploaded_file($_FILES['idproof']['tmp_name'],"../uploads/".$_FILES["idproof"]["name"]);
$file1=$_FILES['file1']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'],"../uploads/".$_FILES["file1"]["name"]);
$experiencedyears=$_POST['experiencedyears'];
//$username=$_POST['username'];
$password=$_POST['password'];
 $s1 = "SELECT * FROM login WHERE username = '$email'";
    $result1 = mysqli_query($con, $s1);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['username']) ? $row1['username'] : '';
if ($uname!="")
            {
            echo "<script>alert('please enter another username'); window.location.href='addheadcook.php';</script>";
            }
            else
{

            $sq = "INSERT INTO login (username,password,type1,status) VALUES ('$email','$password','headcook','1')";
            mysqli_query($con, $sq);
            $sqll = "SELECT * FROM login WHERE username = '$email' and password = '$password' and type1 = 'headcook'";
            $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
			 $email=$row['username'];
             $loid=$row['loginid'];
             $sql = "INSERT INTO headcook (loginid,name,age,gender,phonenumber,email,file1,experiencedyears,idproof,status)values($loid,'$name','$age','$gender','$phonenumber','$email','$file1','$experiencedyears','$idproof',1)";
            mysqli_query($con, $sql);
			 header("location:../src/verifymail.php?email=$email");
            ob_end_flush();
            //echo "<script> alert('Headcook Added'); window.location.href='addheadcook.php';</script>";
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
<?php
}
else
header('location:../sign in.php');
?>


