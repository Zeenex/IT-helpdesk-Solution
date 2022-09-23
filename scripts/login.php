<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		include("config.php");

		//Selecting database
		$query = mysqli_query($mysqli, "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' AND status='active'");
		$numrows = mysqli_num_rows($query);
		if($numrows != 0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbusername=$row['username'];
				$dbpassword=$row['password'];		
				
			}
			
			if($username == $dbusername && $password == $dbpassword)
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['name']=$name;
        
				//Redirect Browser
				header("Location:../admin.php");
			} 

}


		else
		{
			
			echo "<script>";echo " alert('username or Password not found! or account is inactive');window.location.href='../index.php';</script>";
		}
	}
	else
	{
		
		echo "<script>";echo " alert('Required All fields!');window.location.href='../index.php';</script>";
	}
}



?>
