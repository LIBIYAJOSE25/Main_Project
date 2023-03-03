<?php      
    include '../connection.php';
    $fid=$_GET['fid'];
    $sql="select *from `food` where fid='$fid'";
    $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
	$Description=$row['Description'];
	 
    
    //$file = $row['file'];
    //$officer_email = $row['officer_email'];
    //$officer_password = $row['officer_password'];

    if(isset($_POST['s']))
    {
    $fid=$_GET['fid'];
	$name = $_POST['name'];
	$Description = $_POST['Description'];
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
    
   
        mysqli_query($con,"UPDATE `food` SET 
        `fid`='$fid',`name`='$name',`Description`='$Description' where fid='$fid'");
    
            header('location: viewfooditems.php');
     }
  
      
    
 ?>
 
 <!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: lightgreen;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: white;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style> 
<style> form{
  padding: 150px 170px;
}</style> 
</head>  
<body>  
<form method='post' action="" enctype="multipart/form-data">  
  
  <div class="container">  
  <center>  <h1>UPDATE FOOD ITEMS</h1> </center>  
  <hr>  
  <div class="modal-header">
 
                          </div>
                      <div class="modal-body">
                     <div class="card-body card-block">
					 <div class="form-group">
					  <span class="lnr lnr-user"></span>
                        <label for="company" class=" form-control-label"> Food Name</label>
                   <input type="text"   class="form-control" name="name"  id="name"  onfocusout="f1()" value="<?php echo $name?>" required>
                    </div>
					
               
                <div class="form-group">
                        <label for="company" class=" form-control-label">Description</label>
                    <input type="text"  class="form-control" name="Description" id="Description"  onfocusout="f1()" value="<?php echo $Description?>">
                </div>
            </div>  
                     
                </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="s">Update</button>
					 <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right: 66%"><a href="viewfooditems.php">Cancel</a></button>
            </div>
                   
            </div>
                </div>
            
</form>  
</body>  
</html>