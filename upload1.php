<?php
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['sub'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$mobile_no=mysqli_real_escape_string($con,$_POST['mobile_no']);
	$location=mysqli_real_escape_string($con,$_POST['location']);
	$area=mysqli_real_escape_string($con,$_POST['area']);
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);


	   if($name==''&& $address==''&& $mobile_no=='' && $location==''&& $area==''&& $username==''&& $password==''){
		echo"<script>alert('please fill all field')</script>";
		echo"<script>window.open('attendant.php','_self')</script>";
		exit();
	 }

	else{
		$insert="Insert into guard values( '$name','$address','$mobile_no','$location','$area','$username','$password')";
		$run_insert=mysqli_query($con,$insert);

		if($run_insert){
			echo"<script>alert('Successfully added!')</script>";
			echo"<script>window.open('admin.php','_self')</script>";

		}
		else{
			echo"<script>alert('Error please try again')</script>";
			echo"<script>window.open('attendant.php','_self')</script>";
		}
}}

?>
