<?php
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['sub'])){
	$location=mysqli_real_escape_string($con,$_POST['location']);
	$area = mysqli_real_escape_string($con,$_POST['area']);
	/*$name=mysqli_real_escape_string($con,$_POST['name']);*/
	$slot=mysqli_real_escape_string($con,$_POST['slot']);
	$remaining_slot=mysqli_real_escape_string($con,$_POST['remaining_slot']);
	$rent=mysqli_real_escape_string($con,$_POST['rent']);
	/*$attendant=mysqli_real_escape_string($con,$_POST['attendant']);*/
	#$date=mysqli_real_escape_string($con,$_POST['date']);


	   if($location==''&& $area=='' && $slot=='' && $remaining_slot=='' && $rent==''){
		echo"<script>alert('please fill all field')</script>";
		echo"<script>window.open('blank.php','_self')</script>";
		exit();
	 }

	else{

		#$insert="INSERT INTO parkings (`id`, `location`, `street`, `name`, `slot` , `remaining_slots','attendant',`price`) VALUES ('1', '$location', '$street', '$name', '$slot' , '$remaining_slots','$attendant','$price');";
		$insert="Insert into parkings values( '$location', '$area', '$slot' , '$remaining_slot','$rent')";
		$run_insert=mysqli_query($con,$insert);

		if($run_insert){
			echo"<script>alert('Successful added!')</script>";
			echo"<script>window.open('admin1.php','_self')</script>";

		}
		else{
			echo"<script>alert('Error please try again')</script>";
			echo"<script>window.open('blank.php','_self')</script>";
		}
}}

?>
