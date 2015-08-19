
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include('../includes/headtag.php');?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Dashboard</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

  	<!-- Start App Logo -->
  	<div class="applogo">
  		<a href="#" class="logo">Letsliftgh</a>
  	</div>
  	<!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><b>Admin</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="#"><i class="fa falist fa-wrench"></i> Settings</a></li>
	  <li class="divider"></li>
	  <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN MENU</li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Referral Accounts<span class="caret"></span></a>
    <ul>
      <li><a href="#l">Activate Accounts</a></li>
      <li><a href="#">Referrals' Genealogy</a></li>
      <li><a href="#">Print Referrals' Genealogy</a></li>
      <li><a href="#">List of all Referrals</a></li>
      <li><a href="#">Edit Referral's Profile</a></li>
      <li><a href="#">Delete Referral Account</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-wrench"></i></span>Control Panel<span class="caret"></span></a>
    <ul>
      <li><a href="#">Activate Referral Bonus</a></li>
      <li><a href="#">Referral Benefits</a></li>
      <li><a href="#">Payment History</a></li>
      <li><a href="#">Print Payment Report</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-book"></i></span>News & Updates<span class="caret"></span></a>
    <ul>
      <li><a href="#l">Newsletters</a></li>
      <li><a href="#l">SMS</a></li>
    </ul>
  </li>
</ul>

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Admin Dashboard</h1>
    
        <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="#" class="btn btn-light"><i class="fa fa-th"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-default">

<!-- Start Row -->
  <div class="row">
    <div class="col-md-12">
  <!-- Start Quick Menu -->
  <ul class="panel quick-menu clearfix">
    <li class="col-sm-2">
      <a href="#"><i class="fa fa-user-plus"></i>New Members<span class="label label-danger">7</span></a>
    </li>
    <li class="col-sm-2">
      <a href="#"><i class="fa fa-user"></i>Activated Members<span class="label label-danger">6</span></a>
    </li>
    <li class="col-sm-2">
      <a href="#"><i class="fa fa-users"></i>All Members<span class="label label-danger">13</span></a>
    </li>
    <li class="col-sm-2">
      <a href="#"><i class="fa fa-life-ring"></i>Members Support Center</a>
    </li>
  </ul>
  <!-- End Quick Menu -->

    </div>
  </div>
  <!-- End Row -->
<!-- Start Presentation -->
  <div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color8-bg"><i class="fa fa-thumbs-o-up"></i></span>
      <h1>Welcome Admin</h1>
      <h4>You have been successfully logged in. Please contact <a href="http://www.blanqcheq.com">Blanqcheq</a> for any technical assistance.</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i><a href="http://www.blanqcheq.com" target="_blank">Support</a><li>
        
      </ul>
    </div>

  </div>
  <!-- End Presentation -->


</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
<?php include('../includes/footer.php');?>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="js/plugins.js"></script>


</body>

</html>