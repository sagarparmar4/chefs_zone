<?php
	
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		//$password_hash=md5($password);
		if(!empty($username) && !empty($password))
		{
			include "connect.php";
			$query= "SELECT * from `users` where `username` ='".$username."' and `password` = '".$password."'";;
			if($query_run=mysqli_query($con,$query))
			{
				$query_num_rows=mysqli_num_rows($query_run);
				if($query_num_rows==0)
				{
					echo "<script>alert('Username Not Found. Please Register.');</script>";
					echo "<script>window.location='../index.php';</script>";
				}
				else if($query_num_rows==1)
				{
					$user_id=mysqli_fetch_assoc($query_run);
					session_start();                                  //start
					$_SESSION["username"] = $user_id["username"];    //create session
					echo $_SESSION["username"];                     //display
					header("Location:../user_login.php");	              //redirect
				}
			}
			else
			{	
				header("Location:../404.php");
			}
		}
		else
		{
			echo "<script>alert('Enter Correct USERNAME and PASSWORD.');</script>";
			header("Location:../index.php");
		}
	}
?>

