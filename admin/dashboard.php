<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>

<?php
include '../connection.php'
?>


<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
 <head>
 <title>Admin</title>
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
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
						<div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    
                                    <div class="ribbon-box"></div>
                                    <p class="mt-5">
                                        <i class="si si-people fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">TOTAL USERS</p>
									<?php
                            $query = "SELECT id FROM register ORDER BY id";  
                            $query_run = mysqli_query($con, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4>'.$row.'</h4>';
                                      ?> 
                                </div>
                            </a>
                        </div>
						<div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    
                                    <div class="ribbon-box"></div>
                                    <p class="mt-5">
                                        <i class="si si-people fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">TOTAL Architect</p>
									<?php
                            $query = "SELECT aid FROM architect ORDER BY aid";  
                            $query_run = mysqli_query($con, $query);
                            $r1 = mysqli_num_rows($query_run);
                            echo '<h4>'.$r1.'</h4>';
                                      ?> 
                                </div>
                            </a>
                        </div>
						<br>
						
						<div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    
                                    <div class="ribbon-box"></div>
                                    <p class="mt-5">
                                        <i class="si si-people fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">TOTAL Service</p>
									<?php
                            $query = "SELECT seid FROM service ORDER BY seid";  
                            $query_run = mysqli_query($con, $query);
                            $r2 = mysqli_num_rows($query_run);
                            echo '<h4>'.$r2.'</h4>';
                                      ?> 
                                </div>
                            </a>
                        </div>
                        
                    
                        <!-- END Row #1 -->
                    </div>
                  
                  
                </div>
                
                        
                    
                        <!-- END Row #1 -->
                    </div>
                  
                  
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
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>
    </body>
</html>
<?php
}
else
header('location:../sign in.php');
?>