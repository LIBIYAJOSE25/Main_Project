<?php
    include 'connection.php';
  //$cno = $_REQUEST['con_no'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    /*$idnum = $_POST['idnum'];
    $room = $_POST['room'];*/
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $s = "SELECT * FROM login WHERE email = '$email'";
    $result1 = mysqli_query($con, $s);
    $row1=mysqli_fetch_assoc($result1);
    $uname= isset($row1['email']) ? $row1['email'] : '';

    if($uname=="")
    {
            if($password===$confirm_password)
            {
            $sq = "INSERT INTO login (email,password,type1,status) VALUES ('$email','$password','user','1')";
           
             mysqli_query($con, $sq);

              $sqll = "SELECT * FROM login WHERE email = '$email' and password = '$password' and type1 = 'user'";
             $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
       
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $loid=$row['loginid'];
             echo $sql = "INSERT INTO register (loginid,fname,lname,email,phone,estatus) VALUES ('$loid','$fname','$lname','$email','$phone','0')";
             mysqli_query($con, $sql);
               echo "<script> alert('Registration successfull'); window.location.href='sign in.php';</script>";
             }
         }
         else
            echo "<script> alert('please enter password correctly'); window.location.href='Register.php';</script>";
}
else
echo "<script> alert('You are already registered'); window.location.href='index.php';</script>"

?>
