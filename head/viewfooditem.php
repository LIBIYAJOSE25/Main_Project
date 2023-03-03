<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>

<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>Cruiseliner-Headcook Dashboard</title>

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
                    <h2 class="content-heading">View Food Items</h2>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <button type="submit"  name="submit" class="btn btn-alt-success">
                                                    <i class="fa fa-plus mr-5"></i> <a href="addfooditem.php">Add Cusine</a>
                                                </button>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class=""> Name</th>
                                      
										<th class="d-none d-sm-table-cell">Description</th>
										<th class="d-none d-sm-table-cell">Category</th>
										<th class="d-none d-sm-table-cell">Quantity</th>
										<th class="d-none d-sm-table-cell">Image</th>
										<th class="d-none d-sm-table-cell">Price</th>
										
                                        <th class="d-none d-sm-table-cell">Action</th>
                                       </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php
include '../connection.php';
$sql="select * from food WHERE status='active'";

$result = mysqli_query($con, $sql);
//$r= mysqli_fetch_assoc($result);
while($r=mysqli_fetch_array($result))
{
$id=$r['category'];
$sql1="select * from category WHERE cid=$id";
$res1 = mysqli_query($con,$sql1);
$r1 = mysqli_fetch_array($res1);
?>
		<tr><td><?php echo $r['name'];?></td>
		<td><?php echo $r['Description'];?></td>
		<td><?php echo $r1['cname'];?></td>
		<td><?php echo $r['quantity'];?></td>
        <td><img src="../uploads/<?php echo $r['file'];?>" width="100" height="100"></td>
		<td><?php echo $r['price'];?></td>
		<td><a style="color:blue" href="editfood.php?fid=<?php echo $r['fid'];?>"><b>Edit</a></td>
		<td><a style="color:#F63" href="deletefooditems.php?id=<?php echo $r['fid'];?>"><b>Delete</a></td>
                </tr>
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