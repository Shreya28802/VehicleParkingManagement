<?php
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['sub'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$contact = mysqli_real_escape_string($con,$_POST['contact']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$location=mysqli_real_escape_string($con,$_POST['location']);
	$area=mysqli_real_escape_string($con,$_POST['area']);
	$vehicle_id=mysqli_real_escape_string($con,$_POST['vehicle_id']);
	$date=mysqli_real_escape_string($con,$_POST['date']);
	$status=mysqli_real_escape_string($con,$_POST['status']);


	   if($name==''&& $contact=='' && $address==''&& $location=='' && $area=='' && $vehicle_id==''&& $date==''&& $status==''){
		echo"<script>alert('please fill all field')</script>";
		echo"<script>window.open('admin1.php','_self')</script>";
		exit();
	 }

	else{
		$insert="Insert into customer values( '$name', '$contact', '$address','$location' , '$area','$vehicle_id','$date','$status')";
		$run_insert=mysqli_query($con,$insert);

		if($run_insert){
			echo"<script>alert('Successful added!')</script>";
			echo"<script>window.open('admin1.php','_self')</script>";

			
    //  $sel="UPDATE parking 
    //     SET 
    //         remaining_slots = '$newslot',
    //     where area='$area';
    //     $rs=($con->query($sel));
	$newslot;
        $sel="SELECT * FROM parkings where area='$area'";
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
		$remaining_slots=$slot;
        $newslot=$rows["remaining_slots"];
		echo $newslot;
        }		
		if($status=="active"&& $newslot!=0)
		{
			$newslot=$newslot-1;
			echo $newslot;
		}
		else 
		{
			$newslot=$newslot+1;
			echo $newslot;
		}
        
    }
    $sel="UPDATE parkings
    SET 
        remaining_slots='$newslot'
    WHERE
        area = '$area' ";
    $rs=($con->query($sel));

}
		else{
			echo"<script>alert('Error please try again')</script>";
			echo"<script>window.open('blank.php','_self')</script>";
		}
}}

?>
