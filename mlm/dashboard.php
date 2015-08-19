
<!DOCTYPE html>
<?php require("config.php") ;
//validation before entery
//check if sesseions are set
( !empty($_SESSION['memberID']) && !empty($_SESSION["username"]))?  :  header("location: index.php"); 
?>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Letsliftgh is a Multi-level Marketing Company in Ghana.">
  <meta name="keywords" content="mlm, matrix, multi-level, marketing, multi-level marketing, business, commission, lets, lift, ghana" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Member - Dashboard</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
 <?php  include ('includes/header.php');?>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix navbar-fixed-top">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN MENU</li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Dashboard<span class="caret"></span></a>
    <ul>
        <li><a href="viewProfile.php">View Profile</a></li>
      <li><a href="updateProfile.php">Update Profile</a></li>
    </ul>
  </li>
    
  <li><a href="#"><span class="icon color9"><i class="fa fa-user"></i></span>My Account<span class="caret"></span></a>
    <ul>
      <li><a href="genealogy_tree">Genealogy Report</a></li>
      <li><a href="downline_status">Downline Status</a></li>
      <li><a href="g_print">Print Report</a></li>
      <li><a href="g_income">Total Income Earned</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-wrench"></i></span>Support<span class="caret"></span></a>
    <ul>
      <li><a href="admin_contact">Contact Admin</a></li>
      <li><a href="faqs">FAQs</a></li>
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
    <h1 class="title">Dashboard</h1>
    <ol class="breadcrumb">
        <li>Dashboard</li>
      </ol>
    
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

<!-- Start Presentation -->
  <div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color8-bg"><i class="fa fa-thumbs-o-up"></i></span>
      <h1>Welcome <?php echo strtoupper($_SESSION['username']); ?></h1>
      <h4>Congratulations <?php echo strtoupper($_SESSION['username']); ?>! You have been successfully logged in.
          However you are 10&percnt; done and you have to complete your profile before
          our Administrators can approve your account.<br>Click <a href="updateProfile.php">here</a> to do so.</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i><a href="#" target="_blank">Support</a><li>
        <li><i class="fa fa-check"></i><a href="#" target="_blank">Terms & Conditions</a><li>
        <li><i class="fa fa-check"></i><a href="#" target="_blank">Privacy Policy</a><li>
      </ul>
    </div>

  </div>
  <!-- End Presentation -->


</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
      Copyright &COPY; 2015 <a href="http://http://www.letsliftgh.com" target="_blank">Letsliftgh</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Powered by <a href="http://www.blanqcheq.com" target="_blank">Blanqcheq</a>
  </div> 
</div>
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