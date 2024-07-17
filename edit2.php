<?php
session_start();

require 'mysqlConnect.php';

if(isset($_GET['edit'])){
    $edit_id=$_GET['edit'];
    $sel="select * from guard where name='$edit_id'";
    $run=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($run);
    $name=$row['name'];
    $address=$row['address'];
    $mobile_no=$row['mobile_no'];
    $location=$row['location'];
    $area=$row['area'];
    $username=$row['username'];
    $password=$row['password'];

  }
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
    <link rel="icon" href="assets/img/ny.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">+6
    
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">

            <!--logo start-->
            <a href="" class="logo"><b>smart-parking</b></a>
            <!--logo end-->
            <div class="top-menu">
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"> <?php echo $_SESSION['email']; ?></h5>

                    <li class="mt">
                      <a href="admin.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Update Attendant Details</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
              <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"   name="name" value="<?php echo $name; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"   name="address" value="<?php echo $address; ?>" />
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="mobile_no" value="<?php echo $mobile_no; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="location" value="<?php echo $location; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="area" value="<?php echo $area; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="username" value="<?php echo $username; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="password" value="<?php echo $password; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-6 col-sm-10">
            <button type="submit" class="btn btn-default" name="update">Update</button>
          </div>
        </div>
      </form>
          		</div>
          	</div>

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <?php
if(isset($_POST['update'])){
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $mobile_no=mysqli_real_escape_string($con,$_POST['mobile_no']);
  $location = mysqli_real_escape_string($con,$_POST['location']);
  $area=mysqli_real_escape_string($con,$_POST['area']);
  $username =mysqli_real_escape_string($con,$_POST['username']);
  $password =mysqli_real_escape_string($con,$_POST['password']);

  $update="UPDATE `guard` SET `name` = '$name',`address` = '$address',`mobile_no` = '$mobile_no',`location` = '$location', 
   `area` = '$area',  `username` = '$username',`password` = '$password' WHERE `name`='$edit_id'";
    $run_update=mysqli_query($con,$update);
    if($run_update){
      echo"<script>alert('Successful updated')</script>";
      echo"<script>window.open('admin.php','_self')</script>";

    }
    else{
      echo"<script>alert('Error please try again')</script>";
      echo"<script>window.open('admin.php','_self')</script>";
    }
}

?>
      <footer class="site-footer">
          <div class="text-center">
              &copy; <?php echo date("Y"); ?> Copyright.
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
