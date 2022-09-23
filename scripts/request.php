<?php

include("config.php");


if(isset($_POST["submit"])){


if(isset($_POST["name"])  && isset($_POST["designation"]) && isset($_POST["issue_type"]) && isset($_POST["message"])){

	$name1 = $_POST['name'];
	$designation1 = $_POST['designation'];
	$issue_type1 = $_POST['issue_type'];
	$message1 = $_POST['message'];


				$sql = "INSERT INTO requests (name,designation,issue_type,message,date_added) VALUES('$name1','$designation1','$issue_type1','$message1',NOW())";

			$result = mysqli_query($mysqli, $sql);

			if($result){

				
				echo "<script>"; echo " alert('Your request has been sent to IT dept');window.location.href='../index.php';</script>";

			}else{

				
				
				echo "<script>"; echo " alert('There was an error, please check');window.location.href='../index.php';</script>";
			}


} else{

	header("Location: ../index.php");
}

}

?>