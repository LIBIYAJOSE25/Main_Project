<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo.jpg">

    <!-- Title Page-->
    <title></title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css_insert/main.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #f5f5f5;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #d33b33;">
                    <h2 class="title">Change Password</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="changepasswordprocess.php">
                        <div class="form-row m-b-55">
                            <div class="name">New Password</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" id="pass" name="pass"  required onChange="return Validp();" style="width: 484px;">
                                                <span id="msg1" style="color:red;"></span>
                                            <label class="label--desc"></label>
                                        </div>
										
                                    </div>


                                </div>
                            </div>
                            </div>
							<span id="msg6" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('pass').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg6').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('pass').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
                            <!--<div class="form-row">
                            <!--<div class="name">If Customizable</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="custom">
                                        <option value="">Select Category</option>
                                            
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>

                                           
                                        </select>
                                        <div class="select-dropdown"></div>-->
                                   <!-- </div>
                                </div>
                            </div>
                        </div>-->
                       
                        <div class="form-row">
                            <div class="name">Confirm Password </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="cpass" id="cpass" required onchange="check();" style="height: 100px; width: 480px">
                                </div>
                            </div>
                      

                    </div>
					<span id="msg7" style="color:red;"></span>
					<script>
function check()
{
var pas1=document.getElementById("pass");
							  var pas2=document.getElementById("cpass");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg7').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg7').innerHTML="Please confirm password!!";
		pas2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg7').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg7').innerHTML=" "; 
	return true;
	
}
	</script>


                        <!--<div>
                        <div class="form-row">
                            <div class="name">Image</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="file" name="image" id="image">

                                </div>
                            </div>
                        </div>-->





                        <div>
                        <br>
                            <button class="btn btn--radius-2 btn--red"  name="b" type="submit" name="submit">Add</button><br>
                        </div><br>
						<a href="architect.php">Back to home</a>
                    </form>
                </div>
				
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>