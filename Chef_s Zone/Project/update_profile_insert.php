<?php
session_start();
$curr_user=$_SESSION['username'];
include "config.php";	 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if (isset($_POST["username"])) //..................name
{
	$name=strtolower($_POST["username"]);	
	$test=str_replace(" ", "_", $curr_user);	
	echo "name : ".$name."<br>";
	echo "test : ".$test."<br>";
	//echo ucwords($name); 
}
else
{
	echo "<script>alert('Enter Name');</script>";
}





if (isset($_POST["level"])) //..................cat
{
	$level=$_POST["level"];
	echo "level : ".$level."<br>";
}
else
{
	echo "<script>alert('Enter level');</script>";
}





if (isset($_POST["experience"])) //..................sub cat
{
	
	$experience=$_POST["experience"];	
	echo "experience : ".$experience."<br>";			
}
else
{
	echo "<script>alert('Enter experience');</script>";
}




//upload
//$test=1;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_dir."<br>";
echo $target_file."<br>";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $imageFileType."<br>";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$target=rename($target_file,'uploads/'.$test.'.jpeg');
		echo "<br><br>target".$target."<br><br>";
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//end












if (isset($_POST["about"])) //..................descript
{
	$about=$_POST["about"];				
}
else
{
	echo "<script>alert('Enter Description');</script>";
}



/*UPDATE table_name
SET column1 = value1, column2 = value2...., columnN = valueN
WHERE [condition];
*/
$date=date("Y-m-d");


echo "Curr_user :  ".$curr_user."<br>";
$sql = "UPDATE users SET name='$name', icon='$test',level='$level', experience='$experience', about='$about',change_date='$date' WHERE username='$curr_user'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated successfully')</script>";
	header("Location: user_login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>