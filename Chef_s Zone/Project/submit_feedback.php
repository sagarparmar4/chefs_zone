<?php
	
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['topic']) && isset($_POST['message']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$topic=$_POST['topic'];
		$message=$_POST['message'];
		//$rating=$_POST['rating'];
		$rating=4.5; //temp
		if(!empty($name) && !empty($email) && !empty($topic) && !empty($message))
		{
			$subject = "Chef's Zone Thanks You For Giving A Feedback";
			$text="<html><body>Thanks $name For Giving Us A FeedBack !!!<br><br>Your Topic : '$topic' <br><br> Your Message : '$message'</body></html>";
			$headers = "From: Chef's Zone" . "\r\n" ."CC: '$email'";
			mail($email,$subject,$message,$headers);

			include "config.php";	 
			// Check connection
			if ($conn->connect_error) 
			{
				header("Location: 404.php"); //connection failed
			} 

			$sql = "INSERT INTO feedback (name, email, topic, message, rating)
			VALUES ('$name', '$email', '$topic', '$message', '$rating')";

			if ($conn->query($sql) === TRUE) 
			{
				echo "<script>
						alert('Thanks For Feedback.');
						window.location.href='contact.php';
					  </script>";
				//header("Location: contact.html");
			} 
			else 
			{
				header("Location: 404.php"); //exec query error
			}
			$conn->close();
		}
		else
		{
			echo "</script>alert(Enter Values.);</script>";
		}
	}
?>