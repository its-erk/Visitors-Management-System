<?php
session_start();
error_reporting(0);
include('includes/dbconnect.php');
if (strlen($_SESSION['khuvmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$eid=$_GET['editid'];
 
$remark=$_POST['remark'];
$query=mysqli_query($con,"update visitor set remark='$remark' where  id='$eid'");
 

    if ($query) {
    $msg="Visitor's remark has been updated";
  }
  else
    {
      $msg1="Something went wrong, please try again";
    }

  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Visitor Details | KHU-VMS</title>
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
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <!--Search form-->
                    <div class="search-wrapper">
                        <form class="form-inline d-flex justify-content-center md-form form-sm-0" name="search" action="search-visitor.php" method="post">
                            <button class="btn btn-primary" type="submit" name="search">
                            <i class="fa fa-search" aria-hidden="false"></i></button>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" name="searchdata" id="searchdata" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                    </ul>        
                </div>
                
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
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="fa fa-cog"></i>&nbsp; Settings</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item" onclick="window,location='logout.php'"><i class="fa fa-lock"></i>&nbsp; Logout</button>
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
                                    <a href="new-visitor.php">
                                        <i class="metismenu-icon pe-7s-add-user"></i>
                                        New Visitor
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-tools"></i>
                                        Manage Visitors
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="pending-checkouts.php">
                                                <i class="metismenu-icon">
                                                </i>Checkout Visitor
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
                                <li class="app-sidebar__heading">Miscelleneous</li>
                                <li>
                                    <a href="search-between-dates.php">
                                        <i class="metismenu-icon pe-7s-search"></i>
                                        Search Between Dates
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-graph3"></i>
                                        Visitor Reports
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="todays-visitors.php">
                                                <i class="metismenu-icon">
                                                </i>Today's Visitors
                                            </a>
                                        </li>
                                        <li>
                                            <a href="weekly-visitors.php">
                                                <i class="metismenu-icon">
                                                </i>Weekly Visitors
                                            </a>
                                        </li>
                                        <li>
                                            <a href="total-visitors.php">
                                                <i class="metismenu-icon">
                                                </i>Total Visitors
                                            </a>
                                        </li>   
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Faqs</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-shield">
                                        </i>Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
                            <i class="pe-7s-user icon-gradient bg-mean-fruit"></i>
                        </div>
                        <div>
                            <?php
                            $eid=$_GET['editid'];
                            $ret=mysqli_query($con, "select * from visitor where id='$eid'");
                            $cnt=1;
                            while ($row=mysqli_fetch_array($ret)) {
                               echo $row['name'];
                            } 
                            ?>
                            <div class="page-title-subheading">I am showing you the details of the named fellow (above) you just selected
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
    <div class="col-lg-12">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Full Details</h5>
            <!--alert in regards to register details-->
                <?php if($msg){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert" align="center">
                    <?php echo $msg; ?>
                </div>
                <?php }elseif ($msg1) {?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" align="center">
                    <?php echo $msg1; ?>
                </div>
                <?php } ?>

          <?php
          $eid=$_GET['editid'];
          $ret=mysqli_query($con, "select * from visitor where id='$eid'");
          $cnt=1;
          while ($row=mysqli_fetch_array($ret)) {

           ?>
            <table class="mb-0 table table-boardered">
              <tr>
                <th>Name</th>
                <td><?php echo $row['name']; ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?php echo $row['email'] ?></td>
              </tr>
              <tr>
                <th>Mobile Number</th>
                <td><?php echo $row['mobile'] ?></td>
              </tr>
              <tr>
                <th>Address</th>
                <td><?php echo $row['address'] ?></td>
              </tr>
              <tr>
                <th>Whom To Meet</th>
                <td><?php echo $row['whomtomeet'] ?></td>
              </tr>
              <tr>
                <th>Department</th>
                <td><?php echo $row['department'] ?></td>
              </tr>
              <tr>
                <th>Reason To Meet</th>
                <td><?php echo $row['reason'] ?></td>
              </tr>
              <tr>
                <th>Date & Time of Entry</th>
                <td><?php echo $row['enterdate'] ?></td>
              </tr>

              <?php
              if($row['remark']==""){
                ?>

                  <form method="post">
                    <tr>
                      <th>Outing Remark</th>
                      <td><textarea name="remark" placeholder="" required></textarea></td>
                  </tr>
                  <tr>
                    <td><button type="submit" name="submit" id="submit" class="btn btn-success">Update</button></td>
                  </tr>
                  </form>

                <?php } else{ ?>

                  <tr>
                    <th>Checkout Remark</th>
                    <td><?php echo $row['remark']; ?></td>
                  </tr>

                  <tr>
                    <th>Checkout Time</th>
                    <td><?php echo $row['outtime']; ?></td>
                  </tr>

                  <?php } ?>
                  
            </table>
        </div>
    </div>
    </div>
    
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
<?php } ?>