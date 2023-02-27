    
   <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="headcook.php">
                                      
                                        <span class="font-size-xl text-dual-primary-dark"></span><span class="font-size-xl text-primary">Headcook</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar15.jpg" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="headcook.php">
                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="admin-profile.php"></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="admin-profile.php">
                                          
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li class="open">
                                    <a href="headcook.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>
                                   
                                </li>
                              
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden"></span></li>
								<!--<li>
                                    <a  href="addcategory.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">Add Category</span></a>
                                 
                                </li>-->
								
								<li>
                                    <a  href="viewcategory.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">View Category</span></a>
                                 
                                </li>
                                <!--<li>
                                    <a  href="addfooditem.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">Add Food Item</span></a>
                                 
                                </li>-->
								<li>
                                    <a  href="viewfooditem.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">View Cusine</span></a>
                                 
                                </li>
								<li>
                                    <a  href="viewwaiters.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">View Waiters</span></a>
                                 
                                </li>
								<li>
                                    <a  href="viewfoodorder.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">View Order</span></a>
                                 
                                </li>
								<li>
                                    <a  href="viewdeliveredfood.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">Delivered Food</span></a>
                                 
                                </li>
								<!--<li>
                                    <a  href="viewdrinkorder.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">View Drink Order</span></a>
                                 
                                </li>-->
								<!--<li>
                                    <a  href="adddrinks.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">Add Drinks</span></a>
                                 
                                </li>-->
								<!--<li>
                                    <a  href="viewdrinks.php"><i class="fa fa-food"></i><span class="sidebar-mini-hide">View Drinks</span></a>
                                 
                                </li>-->
                             
								<!--<li>
                                    <a  href="addshow.php"><i class="fa fa-film"></i><span class="sidebar-mini-hide">Add Shows</span></a>
                                 
                                </li>
								<li>
                                    <a  href="viewshow.php"><i class="fa fa-film"></i><span class="sidebar-mini-hide">View Shows</span></a>
                                 
                                </li>-->
                                <!--<li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Pages</span></a>
                                    <ul>
                                        <li>
                                            <a href="aboutus.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contactus.php">Contact Us</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Booking</span></a>
                                    <ul>
                                        <li>
                                            <a href="new-booking.php">New Booking</a>
                                        </li>
                                        <li>
                                            <a href="approved-booking.php">Approved Booking</a>
                                        </li>
                                        <li>
                                            <a href="cancelled-booking.php">Cancelled Booking</a>
                                        </li>
                                        <li>
                                            <a href="all-booking.php">All Booking</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Contact Us Queries</span></a>
                                    <ul>
                                        <li>
                                            <a href="unread-queries.php">Unread Queries</a>
                                        </li>
                                        <li>
                                            <a href="read-queries.php">Read Queries</a>
                                        </li>
                                      
                                    </ul>
                                </li>
                               
                                <li>
                                    <a  href="between-dates-report.php"><i class="si si-vector"></i><span class="sidebar-mini-hide">B/w Dates Report</span></a>
                                 
                                </li>
                               
                                <li>
                                    <a href="booking-search.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">Booking Search</span></a>
                                   
                                </li>-->
                            
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
           