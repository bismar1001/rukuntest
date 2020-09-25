<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/lib/';?>bootstrap/dist/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/lib/';?>font-awesome/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/';?>dist/css/AdminLTE.css"> 
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/';?>dist/css/skins/_all-skins.min.css"> 
    <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/';?>lib/datatables.net-bs/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/dashboard/';?>lib/datatables.net-bs/css/buttons.dataTables.min.css">
  <script src="<?php echo base_url().'assets/dashboard/lib/';?>jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url().'assets/dashboard/lib/';?>bootstrap/dist/js/bootstrap.min.js"></script>   
<script src="<?php echo base_url().'assets/dashboard/';?>dist/js/adminlte.min.js"></script> 
<script src="<?php echo base_url().'assets/dashboard/';?>plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/jszip.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/pdfmake.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/vfs_fonts.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url().'assets/dashboard/lib/';?>datatables.net-bs/js/buttons.print.min.js"></script> 
<script src="<?php echo base_url().'assets/dashboard/';?>dist/js/demo.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url().'assets/dashboard/';?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa  fa-commenting"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" data-toggle="control-sidebar" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/dashboard/';?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a> 
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" ><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>