<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>


<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>Admin </title>

        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

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
                    <h2 class="content-heading">View architect</h2>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">View architect</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="">Name</th>
                                        <th class="d-none d-sm-table-cell">Age</th>
										<th class="d-none d-sm-table-cell">Gender</th>
										<th class="d-none d-sm-table-cell">Phone-Number</th>
										<th class="d-none d-sm-table-cell">E-Mail</th>
										<th class="d-none d-sm-table-cell">Id-Proof</th>
										<th class="d-none d-sm-table-cell">Image</th>
										
										
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                                       </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php
						
include '../connection.php';
$sql3="select * from architect WHERE status=1";
$res = mysqli_query($con,$sql3);
//$r = mysqli_fetch_assoc($res);
while($r=mysqli_fetch_array($res))
{?>
		<tr><td><?php echo $r['name'];?></td>
        <td><?php echo $r['age'];?></td>
     <td><?php echo $r['gender'];?></td>
	 <td><?php echo $r['phonenumber'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100"></td>
	  <td><img src="../uploads/<?php echo $r['file'];?>" width="100" height="100"></td>
	 
	
                <td><a style="color:red" href="deletearchitect.php?id=<?php echo $r['loginid'];?>"><b>Delete</a></td></tr>
                      <?php
}
?>
                                
                                
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

                    <!-- END Dynamic Table Simple -->
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

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
    </body>
</html>
<?php
}
else
header('location:../sign in.php');
?>