<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
error_reporting(0);
if (strlen($_SESSION['khuvmsaid']==0)) {
  header('location:logout.php');
  } else{ 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard | KHU-VMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is the main dashboard to the Visitors' Management System.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>  

            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item" onclick="window.location='admin-profile.php'"><i class="fa fa-user"></i>&nbsp; Profile</button></a>
                                            <!--<button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-cog"></i>&nbsp; Settings</button>-->
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item" onclick="window.location='logout.php'"><i class="fa fa-lock"></i>&nbsp; Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info"> 
                                    <div class="widget-heading">
                                        <?php
                                        $id=$_SESSION['khuvmsaid'];
                                        $ret=mysqli_query($con,"select name from admin where id='$id'");
                                        $row=mysqli_fetch_array($ret);
                                        $name=$row['name'];
                                        echo $name;
                                        ?>
                                    </div>
                                    <div class="widget-subheading">
                                        <?php
                                        $id=$_SESSION['khuvmsaid'];
                                        $ret=mysqli_query($con,"select username from admin where id='$id'");
                                        $row=mysqli_fetch_array($ret);
                                        $username=$row['username'];
                                        echo $username;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>       

    <!--
    =========================================================
    sidebar
    =========================================================
    -->
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="dashboard.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Operations</li>
                                <li>
                                    <a href="new-personnel.php">
                                        <i class="metismenu-icon pe-7s-add-user"></i>
                                        New Personnel
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-tools"></i>
                                        Manage Personnel
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="search-personnel-form.php">
                                                <i class="metismenu-icon">
                                                </i>Search Personnel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view-personnel.php">
                                                <i class="metismenu-icon">
                                                </i>View Personnel
                                            </a>
                                        </li>  
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-tools"></i>
                                        Manage Visitors
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="search-visitor-form.php">
                                                <i class="metismenu-icon">
                                                </i>Search Visitor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view-visitors.php">
                                                <i class="metismenu-icon">
                                                </i>View Visitors
                                            </a>
                                        </li>  
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Faqs</li>
                                <li>
                                    <a href="about.php">
                                        <i class="metismenu-icon pe-7s-info">
                                        </i>About
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
    <!--
    =========================================================
    /sidebar
    =========================================================
    -->
    


    <!--
    =========================================================
    main app
    =========================================================
    -->

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
                        </div>
                        <div>Analytics Dashboard
                            <div class="page-title-subheading">Main dashboard that summarises all personnel and visitors' details
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    

    <!--
    =========================================================
    page content
    =========================================================
    -->

    <!-- the list of personnel -->
    <div class="col-lg-12">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">List of Personnel</h5>
            <table class="mb-0 table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <?php
                    $ret=mysqli_query($con,"select * from personnel");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {
                        ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['regdate']; ?></td>
                        <td><a href="personnel-details.php?editid=<?php echo $row['id'];?>" title="Full details"><i class="fa fa-user fa-1x"></i></a></td>
                    </tr>
                <?php
                $cnt=$cnt+1;
            }?>
            </table>
        </div>
    </div>
    </div>
    <!-- /the list of personnel -->

    <!-- the list of visitors -->
    <div class="col-lg-12">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">List of Visitors</h5>
            <table class="mb-0 table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Whom to Meet</th>
                        <th>Department</th>
                        <th>Check-in</th>
                        <th>Check out</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <?php
                    $ret=mysqli_query($con,"select * from visitor");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {
                        ?>
                    <tr>
                            <td><?php echo $cnt; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['whomtomeet']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['enterdate']; ?></td>

                            <?php
                            if($row['remark']==""){
                                ?>
                            <td><div class="mb-2 mr-2 badge badge-pill badge-warning">Pending</div></td>
                        <?php } else{ ?>
                            <td><?php echo $row['outtime']; ?></td>
                        <?php } ?>

                            <td><a href="visitor-details.php?editid=<?php echo $row['id']; ?>"><i title="Full visitor details" class="fa fa-user fa-1x"></i></a></td>
                        </tr>
                        <?php
                        $cnt=$cnt+1;
                    }?>
                </table>
            </div>
        </div>
    </div>
    <!-- /the list of visitors -->
    
    </div><!--marks the end of the main page content; leaves room for footer-->

     <!--
    =========================================================
    /page content
    =========================================================
    -->

    

    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link"><i class="fa fa-info"></i>&nbsp;
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                KHU-VMS &copy; <span id="copyright"></span>
                                <!--JS Code to auto update copyright year-->
                                <script type="text/javascript">
                                    document
                                    .getElementById("copyright")
                                    .appendChild(document.createTextNode(new Date().getFullYear()));
                                </script>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<?php } ?>