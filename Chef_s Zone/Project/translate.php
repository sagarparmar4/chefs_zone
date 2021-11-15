<!------------------------------------TASk LEFT : Set Format Of Result Being Displayed----------------------------------->
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body> 
<?php
include "config.php";	 


$result_dest="";
$nameErr="";
$nameCorr="";
$null_value="";
$flag=0;
$val_flag=0;
$valErr="";

$en=$fr=$mr=$hi=$gu="";

if(empty($_REQUEST["source"]))
{
	$src="Empty";
	$flag=1;
}
else
{
	$src=$_REQUEST["source"];
}

if(empty($_REQUEST["text"]))
{
	$flag=1;
	$text="";
}
else
{	
	if(is_numeric($_REQUEST["text"]))
	{
		$val_flag=1;
		$flag=1;
	}
	else
	{
		$text=strtolower($_REQUEST["text"]);
	}
}
if($flag==0)
{
//-------------------------------------------------Check Connection-------------------------------------------------------
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM translator WHERE $src='$text'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{	
		while($row = $result->fetch_assoc())//---------------------Output Data Of Each Row--------------------------------
		{
			$en=$row["en"]; //english
			$fr=$row["fr"]; //french
			$mr=$row["mr"];//marathi
			$hi=$row["hi"];//hindi
			$gu=$row["gu"];//gujarati
		}
	}
	else
	{
		$null_value="*Word Not Found";
		$nameCorr="*Re-Enter All Values";
	}
	$conn->close();
}
else
{
	$text="";
	if($val_flag==1)
	{
		$valErr="*Enter Correct Value";
	}
	else
	{
		$valErr="*Enter Value";
	}
	$nameErr="*Enter Value";
	$nameCorr="*Re-Enter All Values";
	$result_dest="";
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="translator">
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chef's Zone - The Culinary Specialist </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='css/bootstrap.css' rel='stylesheet'>
  <link href='css/style.css' rel='stylesheet'>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
  <style>
  </style>
</head>
<body>
<center>
<h1>Online Ingredients Converter</h1>
</center>

<hr>
<div class="form">

	
	
	<!-- Enter Quantity TextBox -->
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Enter Ingredient Name</label>
	<div class="col-md-10">
    <input id="passwordinput" name="text" type="text" placeholder="Enter Name" value="<?php echo $text;?>" class="form-control input-md">
	</div>
	</div>

	
	
		<!-- Select Ingredient Name Dropdown -->
	<div class="form-group">
	  <label class="col-md-2 control-label" for="selectbasic">Enter Source Language</label>
	  <div class="col-md-10">
		<select id="selectbasic" name="source" class="form-control">
					<option disabled selected ><?php echo $src;?></option>
					<option value="en">English</option>
					<option value="fr">French</option>
					<option value="hi">Hindi</option>
					<option value="gu">Gujarathi</option>
					<option value="mr">Marathi</option>
				</select>
		</select>
	  </div>
	</div>
	
	
	
	<!-- Submit And Reset Button -->
	<div class="form-group">
	<div class="col-xs-6"></div>
	<div class="col-xs-3">
    <input type="Submit" name="button1id" class="btn btn-success">
	</div>
	<div class="col-xs-3">
    <button type="submit"  name="button2id" onsubmit="reset_button()" class="btn btn-danger">Reset</button>
	</div>
	</div>
	

	
	<!-- Result-->
	
	<label class="col-md-2 control-label" for="passwordinput">English </label>
	<div class="col-md-10">
    <input id="passwordinput" name="ing_val" type="text" placeholder="Enter Name" value="<?php echo $en;?>" class="form-control input-md" disabled>
	</div>
	</div>
	
	<label class="col-md-2 control-label" for="passwordinput">French </label>
	<div class="col-md-10">
    <input id="passwordinput" name="ing_val" type="text" placeholder="Enter Name" value="<?php echo $fr;?>" class="form-control input-md" disabled>
	</div>
	</div>	
	
	<label class="col-md-2 control-label" for="passwordinput">Hindi </label>
	<div class="col-md-10">
    <input id="passwordinput" name="ing_val" type="text" placeholder="Enter Name" value="<?php echo $hi;?>" class="form-control input-md" disabled>
	</div>
	</div>	
	
	<label class="col-md-2 control-label" for="passwordinput">Gujarathi </label>
	<div class="col-md-10">
    <input id="passwordinput" name="ing_val" type="text" placeholder="Enter Name" value="<?php echo $gu;?>" class="form-control input-md" disabled>
	</div>
	</div>	
	
	<label class="col-md-2 control-label" for="passwordinput">Marathi </label>
	<div class="col-md-10">
    <input id="passwordinput" name="ing_val" type="text" placeholder="Enter Name" value="<?php echo $mr;?>" class="form-control input-md" disabled>
	</div>
	</div>
	
</form>
<script>
function reset_button() {
    document.getElementById("translator").reset();
}
</script>
</body>
</html>