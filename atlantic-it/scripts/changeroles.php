<?php
include("config.php");

if(isset($_POST["submit"])){

	if(isset($_POST["changestat"])){

		$changestat1 = $_POST['changestat'];
		$name1 = $_POST['name'];		
		$update = mysqli_query($mysqli, "UPDATE users set status = '".$changestat1."' WHERE name='".$name1."'");
			if($update){			
				echo "<script>";echo " alert('Account status changed');window.location.href='../change-users.php';</script>";
			}else{		
				
				echo "<script>";echo " alert('Account Status not Updated, check config');window.location.href='../change-users.php';</script>";
			}
	}else{
		echo "<script>";echo " alert('Please select an action');window.location.href='../change-users.php';</script>";
	}
}



?>