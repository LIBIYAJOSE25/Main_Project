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
                    <h2 class="content-heading">View Food Order</h2>

                   

                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">View Food Order</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                       <!-- <th class="">Order Details</th>-->
									   <th class="d-none d-sm-table-cell">User Details</th>
										<th class="d-none d-sm-table-cell">name</th>
										<th class="d-none d-sm-table-cell">Price</th>
                                        <th class="d-none d-sm-table-cell">Quantity</th>
										<th class="d-none d-sm-table-cell">Location</th>
										<th class="d-none d-sm-table-cell">Select Waiter</th>
										<th class="d-none d-sm-table-cell">Actions</th>
                                       </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php
                                    include '../connection.php';									 
                                    $rs=mysqli_query($con, "select order_tbl.login_id,order_tbl.id,tbl_cart.price,tbl_cart.location,tbl_cart.quantity,food.name from tbl_cart,order_tbl,food where order_tbl.login_id=tbl_cart.loginid and tbl_cart.fid=food.fid  and order_tbl.status='placed';");
									while($raw= mysqli_fetch_assoc($rs)){
										$t=$raw['id'];
										// $te=mysqli_query($con,"select *from food where fid='$t'");
										// $productname=$row['name'];
										// $row=mysqli_fetch_array($te);
										
										
									    $b=$raw['login_id'];
										$r=mysqli_query($con, "select *from register where loginid='$b'");
										$ro=mysqli_fetch_array($r);
										//$a=$ro['status'];
										
										// $n=$raw['fname'];
										// $d=$raw['totalprice'];
										// $f=$raw['quantity'];

                                        ?>
										
                                      
												<form method="post" action="assignpro.php?cid=<?php echo $t;?>">
												<input type="hidden" name="cid" />
												<tr>	 <td data-column="Item"> <?php echo $ro['fname']; ?><br>
												        <?php echo $ro['phone']; ?></td>
														 <td data-column="Item"> <?php echo $raw['name']; ?></td>
														 <td data-column="Item"> <?php echo $raw['price']; ?></td>
														 <td data-column="Item"> <?php echo $raw['quantity']; ?></td>
														  <td data-column="Price"> <?php echo $raw['location'];; ?></td>
														    		
               
<td><select name="dname" style="display:inline-flex">
				<option value="0">Choose Waiter</option>
				
		<?php
		$sql2="select * from waiter WHERE status=1";
$res2=mysqli_query($con,$sql2);
while($r2=mysqli_fetch_array($res2))
{
?>
				<option value="<?php echo $r2['wid'];?>"><?php echo $r2['name'];?></option>
				<?php
				}
				?>
				</select></td>
				
				
				<td><input type="submit" value="Assign" style="color:green" /></td>
		</form>
														  
														  
														  
														  
														 
												</tr>
														</form>		
											
												
							
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
