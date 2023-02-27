<?php
session_start();
?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>ColorMyWorld</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script>
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
                    <h2 class="content-heading">Change Password</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Change Password</h3>
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
                                            <label class="col-12" for="register1-email">New Password:</label>
                                            <div class="col-12">
                                                 <input type="password" class="form-control" name="npw" id="npw"  placeholder="New Password" class="form-control" required onchange="Validp();">
                                            </div>
                                        </div>
										<span id="msg1" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('npw').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg1').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('npw').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-password">Confirm Password:</label>
                                            <div class="col-12">
                                                <input type="password" class="form-control" name="cpw" id="cpw" placeholder="Confirm New Password" required onchange="check();">
                                            </div>
                                        </div>
										<span id="msg2" style="color:red;"></span>
<script>
function check()
{
var pas1=document.getElementById('npw');
							  var pas2=document.getElementById('cpw');
							
							  if(pas1.value=="")
	{
		document.getElementById('msg2').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg2').innerHTML="Please confirm password!!";
		pas2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg2').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg2').innerHTML=" "; 
	return true;
	
}
	</script>
                                      
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-success" name='b'>
                                                    <i class="fa fa-plus mr-5"></i> Change
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
                        
                       </div>
					   <?php
if(isset($_POST['b']))
{
extract($_POST);

$cpw=$_POST["cpw"];
$npw=$_POST["npw"];


include '../connection.php';
$rs=mysqli_query($con,"SELECT * FROM login WHERE status='1' and type1='admin'");
$row1=mysqli_fetch_assoc($rs);
$logid=$row1['loginid'];
$sql="update login set password='$npw' where loginid=$logid";
	$res3=mysqli_query($con,$sql);
	if($res3>0)
{
echo "<script>
window.onload=function()
{
alert('successfully  updated your password.....!');
window.location='change-password.php';
}
</script>";
}
}
	
?>
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