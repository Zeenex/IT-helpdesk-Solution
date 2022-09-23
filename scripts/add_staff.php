<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["name"])  && isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])){

	$name1 = $_POST['name'];
	$email1 = $_POST['email'];
	$username1 = $_POST['username'];
	$password1 = md5($_POST['password']);


	//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM users WHERE username='".$username1."'");
		$numrows = mysqli_num_rows($query);

		if($numrows == 0)
		{


			$sql = "INSERT INTO users (name,email,username,password,date_added) VALUES('$name1','$email1','$username1','$password1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>"; echo " alert('Staff Added');window.location.href='../add-users.php';</script>";

			}else{

				
				
				echo "<script>"; echo " alert('There was an error, please check');window.location.href='../add-users.php';</script>";
			}

		}else{

			echo "<script>"; echo " alert('This staff already exist on record');window.location.href='../add-users.php';</script>";
		}



} else{

	header("Location: ../add-users.php");
}

}

?>