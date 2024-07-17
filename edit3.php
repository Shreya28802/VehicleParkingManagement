<?php
session_start();

require 'mysqlConnect.php';

if(isset($_GET['edit'])){
    $edit_id=$_GET['edit'];
    $sel="select * from customer where name='$edit_id'";
    $run=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($run);
    $name=$row['name'];
    $contact=$row['contact'];
    $address=$row['address'];
    $location=$row['location'];
    $area=$row['area'];
    $vehicle_id=$row['vehicle_id'];
    $date=$row['date'];
    $status=$row['status'];
    

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
            <h3><i class="fa fa-angle-right"></i> Update Customer Details</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
              <form class="form-horizontal"  method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"   name="name" value="<?php echo $name; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="contact" value="<?php echo $contact; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"   name="address" value="<?php echo $address; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"   name="location" value="<?php echo $location; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="area" value="<?php echo $area; ?>" />
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="vehicle_id" value="<?php echo $vehicle_id; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control"  name="date" value="<?php echo $date; ?>" />
          </div>
        </div>
        
        <select name="status" class="form-control">
<div class="col-sm-10">
              <div class="form-group">
                <option value="">Select status</option>
                 <option value="active">active</option>
                 <option value="deactive">deactive</option>
                 </select>
                
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
if(isset($_POST['update']))
{
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $contact=mysqli_real_escape_string($con,$_POST['contact']);
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $location=mysqli_real_escape_string($con,$_POST['location']);

  $area = mysqli_real_escape_string($con,$_POST['area']);
  $vehicle_id=mysqli_real_escape_string($con,$_POST['vehicle_id']);
  $date =mysqli_real_escape_string($con,$_POST['date']);
  $status =mysqli_real_escape_string($con,$_POST['status']);

 // $update="UPDATE `customer` SET `name` = '$name',`contact` = $contact,`address` = '$address',`location` = '$location',
 //`area` = '$area',  `vehicle_id` = '$vehicle_id',  `date` = '$date',`status` = '$status', WHERE `name`='$edit_id';";
   
 $update="UPDATE `customer` SET `name` = '$name',`contact` = '$contact',`address` = '$address', `location` = '$location',
 `area` = '$area',`vehicle_id` = '$vehicle_id',`date` = '$date',`status` = '$status' WHERE `name`='$edit_id'";
     $run_update=mysqli_query($con,$update);

    if($update){
     // if($status=="deactive")
     $newslot;
        $sel="SELECT * FROM parkings where area='$area' && location='$location'";
        $rs=($con->query($sel));
        $row = []; 

  
    if ($rs->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $rs->fetch_all(MYSQLI_ASSOC); 
        foreach($row as $rows)
        { 
        echo "DATA PARKING"; 
        echo $rows["area"];
		    $newslot=$rows["remaining_slots"];
		echo $newslot;
        }		
		if($status=="deactive")
		{
			$newslot=$newslot+1;
			echo $newslot;
		}
    else{
      $newslot=$newslot-1;
      echo $newslot;
    }
		
        
    }
    $sel="UPDATE parkings
    SET 
        remaining_slots='$newslot'
    WHERE
        area = '$area' && location='$location'";
    $rs=($con->query($sel));


      

    }
    if($run_update)
    {
      echo"<script>alert('Successful updated')</script>";
      echo"<script>window.open('basic_table3.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error please try again')</script>";
      echo"<script>window.open('basic_table3.php','_self')</script>";
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
