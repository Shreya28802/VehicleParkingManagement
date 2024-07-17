<?php
 
$logedin_user = "SELECT * FROM `cust_login` WHERE `email`='{$_SESSION['driver_email']}'";

if($user_result = mysqli_query($con, $logedin_user)){
    while ($dr = mysqli_fetch_array($user_result)) {
        /*$id = $dr['id'];*/
        $name = $dr['name'];
        $email= $dr['email'];

    }
}


?>