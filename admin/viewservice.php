<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>

<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>COLORMYWORLD</title>

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
                    <h2 class="content-heading">View Service</h2>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="">Service Name</th>
										<!-- <th class="">Language</th>
                                        <th class="d-none d-sm-table-cell">Cast</th>-->
										<th class="d-none d-sm-table-cell">Description</th>
										<!--<th class="d-none d-sm-table-cell">Release date</th>-->
										<th class="d-none d-sm-table-cell">Service Start Time</th>
                                        <th class="d-none d-sm-table-cell">Service End Time</th>
										<!--<th class="d-none d-sm-table-cell">Screen</th>-->
										<th class="d-none d-sm-table-cell"> Rate per head</th>
										<th class="d-none d-sm-table-cell">Image</th>
										
										
                                        <th class="d-none d-sm-table-cell">Action</th>
                                       </tr>
                                </thead>
                                <tbody>
                                    
                                      <?php
include '../connection.php';
$sql="select * from service WHERE status='active'";
$result = mysqli_query($con, $sql);
//$r= mysqli_fetch_assoc($result);
while($r=mysqli_fetch_array($result))
{?>
		<tr><td><?php echo $r['sname'];?></td>
		
        <td><?php echo $r['description'];?></td>
		
		<td><?php echo $r['stime'];?></td>
		<td><?php echo $r['etime'];?></td>
		<td><?php echo $r['price'];?></td>
        
        <td><img src="../uploads/<?php echo $r['image'];?>" width="100" height="100"></td>
		<td><a style="color:blue" href="editservice.php?seid=<?php echo $r['seid'];?>"><b>Edit</b></a></td>
        <td><a style="color:#F63" href="deleteservice.php?seid=<?php echo $r['seid'];?>"><b>Delete</b></a></td></tr>
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