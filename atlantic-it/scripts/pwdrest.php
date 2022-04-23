<?php
include("config.php");

if(isset($_POST["submit"])){



	if(isset($_POST["password2"])){

		$password = $_POST['password2'];
		$pwd = md5($password);
		$name = $_POST['name'];		
		$update = mysqli_query($mysqli, "UPDATE users set password = '".$pwd."' WHERE name='".$name."'");
			if($update){
				ob_end_clean( );
				header('Location: ../pwdreset.php');				
				echo " alert('Password Changed')";
			}else{		
				
				header('Location: ../pwdreset.php');
				
			}
	}else{
		echo "<script>";echo " alert('Please insert a password');window.location.href='../pwd-user-reset.php';</script>";
	}
}


?>