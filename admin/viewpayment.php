<?php
session_start();
include('../connection.php');
$id = $_SESSION['id'];
if($_SESSION['id']==""){
  header('location:sign in.php');
}


?>
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <title>ColorMyWorld Architect-Dashboard</title>

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
                    <h2 class="content-heading">View Payment</h2>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">View Payment</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                       <!-- <th class="">Order Details</th>-->
									   <th class="d-none d-sm-table-cell">User Details</th>
										<th class="d-none d-sm-table-cell">Product name</th>
										<th class="d-none d-sm-table-cell">Amount</th>
                                        <th class="d-none d-sm-table-cell">Quantity</th>
										<!--<th class="d-none d-sm-table-cell">Location</th>
										<th class="d-none d-sm-table-cell">Select Waiter</th>-->
										<th class="d-none d-sm-table-cell">Status</th>

                                       </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php
                                    include '../connection.php';
                                   // $rs	=mysqli_query($con ,"select tbl_payment.login,tbl_payment.id,tbl_payment.order_id,tbl_payment.amount,tbl_payment.pay_status");	//							 
                                   $rs=mysqli_query($con, "select tbl_payment.id,login.email,product.name,tbl_payment.amount,tbl_cart.quantity,tbl_payment.pay_status from tbl_payment INNER JOIN login ON tbl_payment.loginid= login.loginid INNER JOIN order_tbl ON tbl_payment.order_id=order_tbl.order_id INNER JOIN tbl_cart ON order_tbl.cartid=tbl_cart.cartid INNER JOIN product ON tbl_cart.pid=product.pid;");
									while($raw= mysqli_fetch_assoc($rs)){
										$t=$raw['id'];
                                        ?>	
                                        <tr>	 
                                            <td data-column="Item"> <?php echo $raw['email']; ?><br>
                                                
                                            </td>
                                            <td data-column="Item"> <?php echo $raw['name']; ?></td>
                                            <td data-column="Item"> <?php echo $raw['amount']; ?></td>
                                            <td data-column="Item"> <?php echo $raw['quantity']; ?></td>
                                            <td data-column="Item"> <?php echo $raw['pay_status']; ?></td>	 
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

