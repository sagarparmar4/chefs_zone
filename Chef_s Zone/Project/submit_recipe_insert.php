<?php
include "config.php";	 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if (isset($_POST["title"])) //..................name
{
	$name=strtolower($_POST["title"]);	
	$test=str_replace(" ", "_", $name);	
	//echo "name : ".$name."<br>";
	//echo "test : ".$test."<br>";
	//echo ucwords($name); 
}
else
{
	echo "<script>alert('Enter Name');</script>";
}





if (isset($_POST["category"])) //..................cat
{
	$cat=$_POST["category"];
	//echo "cat : ".$cat."<br>";
}
else
{
	echo "<script>alert('Enter Category');</script>";
}





if (isset($_POST["sub_category"])) //..................sub cat
{
	
	$sub_cat=$_POST["sub_category"];	
	//echo "sub_cat : ".$sub_cat."<br>";			
}
else
{
	echo "<script>alert('Enter Sub-Category');</script>";
}




//upload
//$test=1;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_dir."<br>";
//echo $target_file."<br>";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo $imageFileType."<br>";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$target='uploads/alt.jpeg';
    $test='alt';
	echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$target=rename($target_file,'uploads/'.$test.'.jpeg');
		//echo "<br><br>target".$target."<br><br>";
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }

//end












if (isset($_POST["description"])) //..................descript
{
	$descript=$_POST["description"];				
}
else
{
	echo "<script>alert('Enter Description');</script>";
}




//collect_val.php

$ing_name ="";
$i=0;
//echo "Ing Name<br>";
if(isset($_POST["ing_name"]) && empty($_POST["username"])){    
    foreach($_POST["ing_name"] as $key => $text_field_a){
        $ing_name .= $text_field_a .",";
		//echo "I : ".$i;
		//echo "<br>$ing_name<br><br>";
		$i++;
    }
}


$ing_val ="";
$i=0;
//echo "Ing Name<br>";
if(isset($_POST["ing_val"]) && empty($_POST["username"])){    
    foreach($_POST["ing_val"] as $key => $text_field_a){
        $ing_val .= $text_field_a .",";
		//echo "I : ".$i;
		//echo "<br>$ing_val<br><br>";
		$i++;
    }
	$ing_val=strtolower($ing_val);
}
//end

$steps ="";
$i=0;
if(isset($_POST["steps"]) && empty($_POST["username"])){    
    foreach($_POST["steps"] as $key => $text_field_c){
        $steps .= $text_field_c ."^";
		//echo "I : ".$i;
		//echo "<br>$capture_field_vals<br><br>";
		$i++;
    }
}


if (isset($_POST["serves"])) //..................serves
{
	$serves=$_POST["serves"];				
}
else
{
	echo "<script>alert('Enter serves');</script>";
}



if (isset($_POST["season"])) //..................season
{
	$season=$_POST["season"];				
}
else
{
	echo "<script>alert('Enter season');</script>";
}







if (isset($_POST["hr"])) //..................time > hr
{
	$hr=$_POST["hr"];
	if (isset($_POST["min"])) //..................time > min
	{
		$min=$_POST["min"];
		$time=$hr*60+$min;	
	}
	else
	{
		echo "<script>alert('Enter min');</script>";
	}	
}
else
{
	echo "<script>alert('Enter hr');</script>";
}



$date=date("Y-m-d");
$sql = "INSERT INTO cuisines (name, category, sub_category, ingredients, ing_quantity,description,icon, season, cook_time,serves,date,steps)
VALUES ('$name', '$cat', '$sub_cat','$ing_name','$ing_val','$descript','$test','$season','$time','$serves','$date','$steps')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
	header("Location: submit_recipe.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>