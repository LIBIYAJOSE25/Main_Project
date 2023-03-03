<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
	body {
	margin:  0;
}
.page-content {
	width: 100%;
	margin:  0 auto;
	/*background-image: -moz-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
    background-image: -webkit-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
    background-image: -ms-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);*/
	background-image:url(images/bg1.png) ;
	display: flex;
	display: -webkit-flex;
	justify-content: center;
	-o-justify-content: center;
	-ms-justify-content: center;
	-moz-justify-content: center;
	-webkit-justify-content: center;
	align-items: center;
	-o-align-items: center;
	-ms-align-items: center;
	-moz-align-items: center;
	-webkit-align-items: center;
}
.form-v6-content  {
	background: #fff;
	width: 968px;
	border-radius: 8px;
	-o-border-radius: 8px;
	-ms-border-radius: 8px;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	margin: 180px 0;
	font-family: 'Nunito', sans-serif;
	color: #fff;
	font-weight: 700;
	position: relative;
	display: flex;
	display: -webkit-flex;
}
.form-v6-content .form-left {
	margin-bottom: -6px;
}
.form-v6-content .form-left img {
	border-top-left-radius: 8px;
	border-bottom-left-radius: 8px;
}
.form-v6-content .form-detail {
    padding: 15px 45px;
	position: relative;
	width: 100%;
}
.form-v6-content .form-detail h2 {
	color: #333;
	font-size: 35px;
	text-align: center;
	position: relative;
	padding: 6px 0 0;
	margin-bottom: 40px;
}
.form-v6-content .form-row {
    width: 100%;
}
.form-v6-content .form-detail .form-row-last {
	text-align: center;
}
.form-v6-content .form-detail .input-text {
	margin-bottom: 40px;
}
.form-v6-content .form-detail input {
	width: 92%;
    padding: 0px 15px 10px 15px;
    border: 2px solid transparent;
    border-bottom: 2px solid #e5e5e5;
    appearance: unset;
    -moz-appearance: unset;
    -webkit-appearance: unset;
    -o-appearance: unset;
    -ms-appearance: unset;
    outline: none;
    -moz-outline: none;
    -webkit-outline: none;
    -o-outline: none;
    -ms-outline: none;
    font-family: 'Nunito', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #333;
}
.form-v6-content .form-detail .form-row input:focus {
	border-bottom: 2px solid #fe892a;
}
.form-v6-content .form-detail .register {
	background: #fe892a;
	border-radius: 6px;
	-o-border-radius: 6px;
	-ms-border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-border-radius: 6px;
	width: 160px;
	box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-o-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-ms-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	-webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
	border: none;
	margin: 11px 0 50px 0px;
	cursor: pointer;
	font-family: 'Nunito', sans-serif;
	color: #fff;
	font-weight: 700;
	font-size: 18px;
}
.form-v6-content .form-detail .register:hover {
	background: #e37b27;
}
.form-v6-content .form-detail .form-row-last input {
	padding: 13px;
}
input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #666;
  font-size: 16px;
}
input::-moz-placeholder { /* Firefox 19+ */
  color: #666;
  font-size: 16px;
}
input:-ms-input-placeholder { /* IE 10+ */
  color: #666;
  font-size: 16px;
}
input:-moz-placeholder { /* Firefox 18- */
  color: #666;
  font-size: 16px;
}

/* Responsive */
@media screen and (max-width: 991px) {
	.form-v6-content {
		margin: 180px 20px;
		flex-direction:  column;
		-o-flex-direction:  column;
		-ms-flex-direction:  column;
		-moz-flex-direction:  column;
		-webkit-flex-direction:  column;
	}
	.form-v6-content .form-left {
		width: 100%;
	}
	.form-v6-content .form-left img {
		width: 100%;
		border-bottom-left-radius: 0px;
	    border-top-right-radius: 8px;
	}
	.form-v6-content .form-detail {
		padding: 30px 20px 30px 20px;
	    width: auto;
	}
	.form-v6-content .form-detail .form-row input {
		width: 96%;
	}
	.form-v6-content .form-detail .register {
		margin-bottom: 80px;
	}
}
@media screen and (max-width: 767px) {
	.form-v6-content .form-detail .form-row input {
		width: 94%;
	}
}

@media screen and (max-width: 575px) {
	.form-v6-content .form-detail .form-row input {
	    width: 89%;
	}
}
</style>
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <!--link rel="stylesheet" href="css/style.css"/>-->
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
			<img src="images/l1.jpg" width="500" height="780" alt="form">
			</div>
			<form class="form-detail" action="registeracc.php" method="POST">


				<h2>Registration</h2>
				<div class="form-row">
					<input type="text" name="fname" id="fname" class="input-text" placeholder="First Name" required onchange="Validate();">
				</div>
				<span id="msg1" style="color:red;"></span>
				<script>		
					function Validate() 
					{
						var val = document.getElementById('fname').value;
					
						if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
						{
							document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
										document.getElementById('fname').value = "";
							return false;
						}
					document.getElementById('msg1').innerHTML=" ";
						return true;
					}
					</script>
				<div class="form-row">stat
					<input type="text" name="lname" id="lname" class="input-text" placeholder="Last Name" required onchange="Validate1();">
				</div>
				<span id="msg2" style="color:red;"></span>
				<script>		
					function Validate1() 
					{
						var val = document.getElementById('lname').value;
					
						if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
						{
							document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
										document.getElementById('lname').value = "";
							return false;
						}
					document.getElementById('msg2').innerHTML=" ";
						return true;
					}
					</script>
					

				<div class="form-row">
					<input type="text" name="email" id="email" class="input-text" placeholder="Email Address" required onchange="Validatet();">
				</div>
				<span id="msg3" style="color:red;"></span>
<script>		
function Validatet() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg3').innerHTML="Enter a valid emailid";
		            document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>

				<div class="form-row">
					<input type="number" name="phone" maxlength="10" id="phone" class="input-text" placeholder="Phone no" required onchange="Validat();">
				</div>
				<span id="msg4" style="color:red;"></span>
<script>		
function Validat() 
{
    var val = document.getElementById('phone').value;

    if (!val.match(/^[789][0-9]{9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Must contain 10 numbers";
		            document.getElementById('phone').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
</script>

				
				<!--<div class="form-row">
					<input type="text" name="idnum" id="idnumber" class="input-text" placeholder="Ticket number" required onchange="Validate2();">
				</div>
				<span id="msg8" style="color:red;"></span>
				<script>		
					function Validate2() 
					{
						var val = document.getElementById('idnumber').value;
					
						if (!val.match(/^[0-9][0-9]{1,9}$/)) 
						{
							document.getElementById('msg8').innerHTML="Enter a valid id";
							
								 document.getElementById('idnumber').value = "";
							return false;
						}
					document.getElementById('msg8').innerHTML=" ";
						return true;
					}
					
							</script>
							<div class="form-row">
					<input type="number" name="room" id="room" class="input-text" placeholder="Room  number" required onchange="Validate3();">
				</div>
				<span id="msg8" style="color:red;"></span>
				<script>		
					function Validate3() 
					{
						var val = document.getElementById('room').value;
					
						if (!val.match(/^[0-9][0-9]{1,3}$/)) 
						{
							document.getElementById('msg8').innerHTML="Enter a valid room number";
							
								 document.getElementById('room').value = "";
							return false;
						}
					document.getElementById('msg8').innerHTML=" ";
						return true;
					}
					
							</script>
				<!--<div class="form-row">
					<input type="file" name="phto" id="photo" class="input-text" placeholder="" required>
				</div>-->
				<div class="form-row">
					<span class="lnr lnr-lock"></span>
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required onchange="Validp();">
				</div>
				<span id="msg9" style="color:red;"></span>
<script>		
function Validp() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/))
    {
        document.getElementById('msg9').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}

</script>
				
				<div class="form-row">
					<input type="password" name="confirm_password" id="confirm_password" class="input-text" placeholder="Confirm Password" required onchange="check();">
				</div>
				<span id="msg10" style="color:red;"></span>
<script>		
function check() 
{
	{
var pas1=document.getElementById("password");
							  var pas2=document.getElementById("confirm_password");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg10').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg10').innerHTML="Please confirm password!!";
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg10').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg10').innerHTML=" "; 
	return true;
}
}
</script>
              <div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">				
				</div>
				<div>
				<a href="index.php">Home</a>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
