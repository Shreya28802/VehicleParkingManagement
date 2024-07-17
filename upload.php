<?php
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['sub'])){
	$location=mysqli_real_escape_string($con,$_POST['location']);
	$area = mysqli_real_escape_string($con,$_POST['area']);
	/*$name=mysqli_real_escape_string($con,$_POST['name']);*/
	$slot=mysqli_real_escape_string($con,$_POST['slot']);
	$remaining_slots=mysqli_real_escape_string($con,$_POST['remaining_slots']);
	$rent=mysqli_real_escape_string($con,$_POST['rent']);
	/*$attendant=mysqli_real_escape_string($con,$_POST['attendant']);*/
	#$date=mysqli_real_escape_string($con,$_POST['date']);
	$remaining_slots=$slot;


	   if($location==''&& $area=='' && $slot=='' && $rent==''){
		echo"<script>alert('please fill all field')</script>";
		echo"<script>window.open('blank.php','_self')</script>";
		exit();
	 }

	else{
		
		$insert="Insert into parkings values( '$location', '$area', '$slot' , '$remaining_slots','$rent')";
		//$slot=$remaining_slots;
		$run_insert=mysqli_query($con,$insert);

		if($run_insert){
			echo"<script>alert('Successful added!')</script>";
			echo"<script>window.open('admin.php','_self')</script>";

		}
		else{
			echo"<script>alert('Error please try again')</script>";
			echo"<script>window.open('blank.php','_self')</script>";
		}
}}

?>
