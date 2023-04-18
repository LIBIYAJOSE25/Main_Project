 <?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  include'../connection.php';
  check_login();
  //$aid=$_SESSION['u_id'];
  //Add Booking
  if(isset($_POST['delete_booking']))
  
  {
      $bid= $_GET['bid'];
      //$loginid= $_GET['loginid'];
      $del_cart_item_res= mysqli_query($con,"DELETE FROM tbl_bookings WHERE bid='$bid'");
      if($del_cart_item_res){
        echo "<script>
            alert('Service Booking deleted successfully.');
            window.location.href='user-manage-booking.php';
        </script>";
    }
   }

// $bid=$_GET['bid'];echo "<script> alert($bid);</script>";
// // $sname = $_POST['sname'];
// //  $description = $_POST['description'];
// //  $date = $_POST['date'];
// // //$status  = $_POST['status'];

//$query=mysqli_query($con, "INSERT INTO `tbl_bookings`(loginid,seid,sname,description,date,status)VALUES('$loginid','$seid','$sname','$description','$date','pending')");
   
 
//  if($query)
            //     {
            //     $succ = "Booking Cancelled";
            //     }
            //     else 
            //     {
            //         $err = "Please Try Again Later";
            //     }
            // }
?>
 
 <!DOCTYPE html>
 <html lang="en">

 <?php include('vendor/inc/head.php');?>
 

 <body id="page-top">
     <!--Start Navigation Bar-->
     <?php include("vendor/inc/nav.php");?>
     <!--Navigation Bar-->

     <div id="wrapper">

         <!-- Sidebar -->
         <?php include("vendor/inc/sidebar.php");?>
         <!--End Sidebar-->
         <div id="content-wrapper">
             
             <div class="container-fluid">
                 <?php if(isset($succ)) {?>
                 <!--This code for injecting an alert-->
                 <script>
                 setTimeout(function() {
                         swal("Success!", "<?php echo $succ;?>!", "success");
                     },
                     100);
                 </script>

                 <?php } ?>
                 <?php if(isset($err)) {?>
                 <!--This code for injecting an alert-->
                 <script>
                 setTimeout(function() {
                         swal("Failed!", "<?php echo $err;?>!", "Failed");
                     },
                     100);
                 </script>

                 <?php } ?>
                
                 
                 <!-- Breadcrumbs-->
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="user-dashboard.php">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">Booking</li>
                     <li class="breadcrumb-item ">Cancel My Booking</li>
                 </ol>
                 <hr>
                 <div class="card">
                     <div class="card-header">
                         Approve Booking
                     </div>
                     <div class="card-body">
                         <!--Add User Form-->
                         <!--php
            $aid=$_GET['u_id'];
            $ret="select * from tms_user where u_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
            //$cnt=1;
            while($row=$res->fetch_object())
        {
        ?>-->
                        
    





   

                        <!-- <form method="POST">
--> <form  action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            
        <?php
                        $bid=$_GET['bid'];
                                                      // $eid=$_REQUEST['id'];

$query=mysqli_query($con," SELECT tbl_bookings.bid, tbl_bookings.sname, tbl_bookings.description, tbl_bookings.date, tbl_bookings.status, register.fname, register.lname, register.phone from tbl_bookings INNER JOIN register ON register.loginid= tbl_bookings.loginid");



$num2=mysqli_num_rows($query);
    if($num2 > 0){
        $row= mysqli_fetch_array($query);
   }
    else{
        $row= null;
    }




?>

                             <div class="form-group">
                                 <label for="exampleInputEmail1">First Name</label>
                                 <input type="text" readonly value="<?php echo $row['fname'];?>" required class="form-control" id="fname" name="fname">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Last Name</label>
                                 <input type="text" readonly class="form-control" value="<?php echo $row['lname'];?>" id="lname" name="lname">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Contact</label>
                                 <input type="text" readonly class="form-control" value="<?php echo $row['phone'];?>" id="phone" name="phone">
                             </div>
                             
 
            <div class=" form-group">
                                 <label for="exampleInputEmail1">Service Name</label>
                                 <input type="sname" readonly placeholder="<?php echo $row['sname'];?>" class="form-control" name="sname">
                             </div>

                             

                             <div class="form-group">
                                 <label for="exampleInputEmail1">Booking Date</label>
                                 <input type="text" readonly placeholder="<?php echo $row['date'];?>"class="form-control" name="date">
                             </div>

                             <div class="form-group">
                                 <label for="exampleInputEmail1">Booking Status</label>
                                 <input type="text" readonly placeholder="<?php echo $row['status'];?>" class="form-control" id="exampleInputEmail1" name="status">
                             </div>

                          

                             <button type="submit" name="delete_booking" class="btn btn-danger">Cancel Booking</button>
                         </form>
                         <!-- End Form-->
                         <?php ?>
                     </div>
                 </div>

                 <hr>


                 <!-- Sticky Footer -->
                 <?php include("vendor/inc/footer.php");?>

             </div>
             
         </div>
         <!-- /#wrapper -->

         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
             <i class="fas fa-angle-up"></i>
         </a>
        
         <!-- Logout Modal-->
         <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">×</span>
                         </button>
                     </div>
                     <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                     <div class="modal-footer">
                         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                         <a class="btn btn-danger" href="user-booking- dashboard.php">Logout</a>
                     </div>
                 </div>
             </div>
         </div>
       
         <!-- Bootstrap core JavaScript-->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

         <!-- Core plugin JavaScript-->
         <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

         <!-- Page level plugin JavaScript-->
         <script src="vendor/chart.js/Chart.min.js"></script>
         <script src="vendor/datatables/jquery.dataTables.js"></script>
         <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
         <!-- Custom scripts for all pages-->
         <script src="vendor/js/sb-admin.min.js"></script>

         <!-- Demo scripts for this page-->
         <script src="vendor/js/demo/datatables-demo.js"></script>
         <script src="vendor/js/demo/chart-area-demo.js"></script>
         <!--INject Sweet alert js-->
         <script src="vendor/js/swal.js"></script>

 </body>
 
 </html>