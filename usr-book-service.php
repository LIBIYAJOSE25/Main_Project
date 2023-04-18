<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  include'../connection.php';
  check_login();
  $id=$_SESSION['id'];
?>
 <!DOCTYPE html>
 <html lang="en">

 <!--Head-->
 <?php include ('vendor/inc/head.php');?>
 <!--End Head-->

 <body id="page-top">
     <!--Navbar-->
     <?php include ('vendor/inc/nav.php');?>
     <!--End Navbar-->

     <div id="wrapper">

         <!-- Sidebar -->
         <?php include('vendor/inc/sidebar.php');?>
         <!--End Sidebar-->

         <div id="content-wrapper">

             <div class="container-fluid">

                 
                 <!-- Breadcrumbs-->
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="user-dashboard.php">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">Service</li>
                     <li class="breadcrumb-item active">Book Service</li>

                 </ol>


                 <!--Bookings-->
                 <div class="card mb-3">
                     <div class="card-header">
                         <i class="fas fa-bus"></i>
                         Available Services
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Service Name</th>
                                         <th>Description</th>
                                        <!-- <th>Reg No.</th>
                                         <th>Seats</th>
                                         <th>Driver</th>-->
                                         <th>Action</th>
                                     </tr>
                                 </thead>

                                 <tbody>


                                 <?php
              
              $query=mysqli_query($con, $sql = "SELECT * FROM service WHERE STATUS='active'" );
              
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
              <tr>
                  <td><?php echo htmlentities($cnt);?></td>
                 
                  <td><?php echo htmlentities($row['sname']);?></td>
                  <td><?php echo htmlentities($row['description']);?></td>
                  
                  <td><a style="color:#F63" href="user-confirm-booking.php?seid=<?php echo $row['seid']?>"><b>Book Service</a></td>
                
                 
                 
               
               <?php
                    //if($row['status']==1){
                       // echo '<p><a href="inactive.php?id='.$row['cid'].'$status=1">Disable</a></p>';
                   // }else{
                       // echo '<p><a href="active.php?id='.$row['cid'].'$status=0">Enable</a></p>';
                   // }
                    //?>
               <!--<td><a href="courseupdate1111.php?cid=<?php echo $row['seid']?>">update</a></td>-->
              </tr>
              <?php $cnt=$cnt+1; } ?>




                                     <!--php

                 $ret="SELECT * FROM service  where  status ='active' "; //get all bookings
                  $stmt= $mysqli->prepare($ret) ;
                  $stmt->execute() ;//ok
                  $res=$stmt->get_result();
                  $cnt=1;
                  while($row=$res->fetch_object())
                {
                ?>
                                     <!-- Author By: MH RONY
                Author Website: https://developerrony.com
                Github Link: https://github.com/dev-mhrony
                Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                -->
                                    <!-- <tr>
                                         <td><?php echo $cnt;?></td>
                                         <td><?php echo $row->sname;?></td>
                                         <td><?php echo $row->description;?></td>
                                        
                                         
                                         <td>
                                             <a href="user-confirm-booking.php?seid=<?php echo $row->seid;?>" class="btn btn-outline-success"><i class="fa fa-clipboard"></i> Book Service</a>
                                         </td>
                                     </tr>
                                     <?php  $cnt = $cnt +1; ?>-->

                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <div class="card-footer small text-muted">
                        
                     </div>
                 </div>

             </div>
             <!-- /.container-fluid -->

             <!-- Sticky Footer -->
             <?php include("vendor/inc/footer.php");?>
      </div>
         <!-- /.content-wrapper -->

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
                     <a class="btn btn-danger" href="index.php">Logout</a>
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

 </body>

 </html>