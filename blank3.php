<?php
require 'mysqlConnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>smart-parking</title>
    <link rel="icon" href="Smart/assitant.pnj" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  
<!-- Bootstrap Core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="jquery/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>
<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">

            
            <a href="" class="logo"><b>Smart-parking</b></a>
          
            </header>
            MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a></p>
                  <h3 class="centered"><font color="white">Attendant </font></h3>
                  <li class="mt">
                      <a href="admin1.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--<a  class="logo"><h2><b>Smart-parking<b></h2></a>-->
        
        
        
             
  <!--<a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a>-->
                 
          </div>
          <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="angle-right"></i> Upload Parkings Details</h3>
            <div class="row mt">
            <div class="col-lg-10">
              <form class="form-horizontal" action="upload4.php" method="POST" >

        <div class="form-group">
        <div class="col-sm-10">
        <h5>Location</h5>
        <input type="text" class="form-control"  placeholder="location" name="location">
       
        </div>
        </div>
        <div class="row mt">
        <div class="col-lg-10">
</div>
</div>
        
<div class="form-group">
          <div class="col-sm-10">
          <h5>Parking Area</h5>
            <input type="text" class="form-control" placeholder="parking area" name="area">
          </div>
        </div>    

        <div class="form-group">
          <div class="col-sm-10">
          <h5> Total Slot</h5>
            <input type="text" class="form-control" placeholder="slot" name="slot">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
          <h5>Remaining Slot</h5>
            <input type="text" class="form-control" placeholder="Number of remaining slot" name="remaining_slots">
          </div>              
          </div>
        

        <div class="form-group">
        <div class="col-sm-10">
        <h5>Rent</h5>
            <input type="text" class="form-control" placeholder="Rent" name="rent">
          </div>
</div>
       
        <div class="form-group">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default" name="sub">Submit</button>
          </div>
      
      </form>
      <script src="script.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
      

        </body>
</html>
