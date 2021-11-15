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
<?php

$head="";
$ing_name="";
$name_error="";
$ing_val="";
$val_error="";
$ing_type="";
$type_error="";
$flag=0;
//-----------------------------------------------value--------------------------------------------------------------------
	if (isset($_REQUEST["ing_val"])) 
	{
		$ing_val=$_REQUEST["ing_val"];	
		$ing_val=(float)$ing_val;
	}
	else
	{
		$val_error="*Enter Value";
		$head="<b>*Enter All Values Properly</b>";
		$ing_val=0;
		$flag=1;
	}
//-----------------------------------------------name---------------------------------------------------------------------	
	if (isset($_REQUEST["ing_name"])) 
	{
		$ing_name=$_REQUEST["ing_name"];
	}
	else
	{
		$name_error="*Enter name";
		$head="<b>*Enter All Values Properly</b>";
		$ing_name="Empty";
		$flag=1;
	}
//-----------------------------------------------type---------------------------------------------------------------------
	if (isset($_REQUEST["ing_type"])) 
	{
		$ing_type=$_REQUEST["ing_type"];
	}
	else
	{
		$type_error="*Enter Unit";
		$head="<b>*Enter All Values Properly</b>";
		$ing_type="Empty";
		$flag=1;
	}
?>
<div class="form">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="input_check" >
	<!-- Select Ingredient Name Dropdown -->
	<div class="form-group">
	  <label class="col-md-2 control-label" for="selectbasic">Select Ingredient Name</label>
	  <div class="col-md-10">
		<select id="selectbasic" name="ing_name" class="form-control">
					<option disabled selected ><?php echo $ing_name;?></option>
					<option value="Baking powder">Baking Powder</option>
					<option value="Baking soda">Baking Soda</option>
					<option value="Butter">Butter</option>
					<option value="Buttermilk">Butter Milk</option>
					<option value="Cheese">Cheese</option>
					<option value="Honey">Honey</option>
					<option value="Ginger">Ginger</option>
					<option value="Hazelnuts">Hazel Nuts</option>
					<option value="Pasta">Pasta</option>
					<option value="Peanuts">Peanuts</option>
					<option value="Oil">Oil</option>
					<option value="Onion">Onion</option>
					<option value="Mayonnaise">Mayonnaise</option>
					<option value="Peas">Peas</option>
					<option value="Okra">Okra</option>
					<option value="Milk">Milk</option>
					<option value="Potatoes">Potatoes</option>
					<option value="Yogurt">Yogurt</option>
					<option value="Rice">Rice</option>
					<option value="Water">Water</option>
					<option value="Sugar">Sugar</option>
					<option value="Salt">Salt</option>
					<option value="Sesame Seeds">Sesame Seeds</option>
					<option value="Turmeric">Turmeric</option>
					<option value="Tomatoes">Tomatoes</option>
					<option value="Garlic">Garlic</option>
					<option value="Rice Flour">Rice Flour</option>
				</select>
		</select>
	  </div>
	</div>
	
	
	
	<!-- Enter Quantity TextBox -->
	<div class="form-group">
		<label class="col-md-2 control-label" for="passwordinput">Enter Ingredient Quantity </label>
	<div class="col-md-10">
    <input id="passwordinput" name="ing_val" type="text" placeholder="Enter Value" value="<?php echo $ing_val;?>" class="form-control input-md">
	</div>
	</div>
	
	
	<!-- Select Measurement Unit TextBox -->
	<div class="form-group">
	  <label class="col-md-2 control-label" for="selectbasic">Select Measurement Unit</label>
	  <div class="col-md-10">
		<select id="selectbasic" name="ing_type" class="form-control">
		  
					<option disabled selected ><?php echo $ing_type;?></option>
					<option value="Kilogram">Kilogram</option>
					<option value="Gram">Gram</option>
					<option value="Liter">Liter</option>
					<option value="Deciliter">Deciliter</option>
					<option value="Milliliter">Milliliter</option>
					<option value="Cup">Cup</option>
					<option value="Tablespoon">Tablespoon</option>
					<option value="Dessert Spoon">Dessert Spoon</option>
					<option value="Teaspoon">Teaspoon</option>
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
<script>
function reset_button() {
    document.getElementById("translator").reset();
}
</script>
	
	
	
	
	
<br>
<?php

	$kilogram=0.0;
	$gram=0.0;
	$liter=0.0;
	$deciliter=0.0;
	$milliliter=0.0;
	$cup=0.0;
	$tablespoon=0.0;
	$dessert=0.0;
	$teaspoon=0.0;
	$ratio=0.0;
	if($flag==0)
	{
		switch ($ing_name) 
		{
//-----------------------------------------------Case 1-------------------------------------------------------------------
			case "Baking powder":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;				
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.316;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1316;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/13.16;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/5.482;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/87.72;
					
					$kilogram = $ratio*1;	
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/131.6;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;	
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/263.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.316;
					$deciliter = $ratio*13.16;
					$milliliter = $ratio*1316;
					$cup = $ratio*5.482;
					$tablespoon = $ratio*87.72;
					$dessert = $ratio*131.6;
					$teaspoon = $ratio*263.2;
					
				}
				else
				{
					echo "Error...!!!";
				}
				break;
//-----------------------------------------------Case 2-------------------------------------------------------------------	
			case "Baking soda":										 
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.149;
					
					$kilogram = $ratio*1;

					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1149;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/11.49;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.789;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/76.63;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/114.9;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/229.9;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else
				{
					echo "Error...!!!";
				}
				break;
//-----------------------------------------------Case 3-------------------------------------------------------------------
			case "Butter":	
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.031;
					
					$kilogram = $ratio*1;	
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1031;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/10.31;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;			
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.296;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/76.63;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.149;
					$deciliter = $ratio*11.49;
					$milliliter = $ratio*1149;
					$cup = $ratio*4.789;
					$tablespoon = $ratio*76.63;
					$dessert = $ratio*114.9;
					$teaspoon = $ratio*229.9;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/103.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;	
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/206.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else
				{
					echo "Error...!!!";	
				}
				break;
//-----------------------------------------------Case 4-------------------------------------------------------------------
			case "Buttermilk":										
			if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;				
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/0.9656;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/965.6;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/9.656;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.023;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/64.37;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/96.56;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/193.1;
				
					$kilogram = $ratio*1;		
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else
				{
					echo "Error...!!!";
				}
				break;
//-----------------------------------------------Case 5-------------------------------------------------------------------
			case "Cheese":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					$kilogram = $ratio*1;		
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;		
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/0.9804;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;				
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/980.4;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/9.804;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;		
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.085;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/65.36;
					
					$kilogram = $ratio*1;	
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;			
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/196.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;					
				}
				else
				{
					echo "Error...!!!";
				}
				break;
//-----------------------------------------------Case 6-------------------------------------------------------------------
			case "Honey":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;	
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;		
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/0.6944;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;	
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/694.4;
					
					$kilogram = $ratio*1;	
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/6.944;
				
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/2.894;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/46.3;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/69.44;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/138.9;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.6944;
					$deciliter = $ratio*6.944;
					$milliliter = $ratio*694.4;
					$cup = $ratio*2.894;
					$tablespoon = $ratio*46.3;
					$dessert = $ratio*69.44;
					$teaspoon = $ratio*138.9;
				}
				else
				{
					echo "Error...!!!";
				}
				break;									
//-----------------------------------------------Case 7-------------------------------------------------------------------
			case "Ginger":										
				 if($ing_type=="Kilogram")
				 {
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;					
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.031;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1031;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/10.31;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.296;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/68.73;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;			
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/103.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/206.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.031;
					$deciliter = $ratio*10.31;
					$milliliter = $ratio*1031;
					$cup = $ratio*4.296;
					$tablespoon = $ratio*68.73;	
					$dessert = $ratio*103.1;
					$teaspoon = $ratio*206.2;
				}
				else
				{
					echo "Error...!!!";
				}
				break; 
//-----------------------------------------------Case 8------------------------------------------------------------------
			case "Hazelnuts":										
				 if($ing_type=="Kilogram")
				 {
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.389;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1389;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;		
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/13.89;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/5.787;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/92.59;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/138.9;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;		
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/277.8;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.389;
					$deciliter = $ratio*13.89;
					$milliliter = $ratio*1389;
					$cup = $ratio*5.787;
					$tablespoon = $ratio*92.59;
					$dessert = $ratio*138.9;
					$teaspoon = $ratio*277.8;
				}
				else
				{
					echo "Error...!!!";	
				}
				break;
//-----------------------------------------------Case 9------------------------------------------------------------------
			case "Pasta":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;	
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;		
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;	
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/2.041;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/2041;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/20.41;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;	
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/8.503;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;					
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/136.1;
					
					$kilogram = $ratio*1;	
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/204.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/408.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.041;
					$deciliter = $ratio*20.41;
					$milliliter = $ratio*2041;
					$cup = $ratio*8503;
					$tablespoon = $ratio*136.1;
					$dessert = $ratio*204.1;
					$teaspoon = $ratio*408.2;
				}
				else
				{
					echo "Error...!!!";	
				}
				break;
//-----------------------------------------------Case 10-----------------------------------------------------------------				
			case "Peanuts":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/14.71;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.127;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/147.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/294.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else
				{
					echo "Error...!!!";	
				}
				break;
//-----------------------------------------------Case 11-----------------------------------------------------------------		
			case "Oil":			
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.124;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1124;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/11.24;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.682;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/74.91;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/112.4;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/224.7;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.124;
					$deciliter = $ratio*11.24;
					$milliliter = $ratio*1124;
					$cup = $ratio*4.682;
					$tablespoon = $ratio*74.91;
					$dessert = $ratio*112.4;
					$teaspoon = $ratio*224.7;
				}
				else
				{
					echo "Error...!!!";	
				}
				break;
//-----------------------------------------------Case 12-----------------------------------------------------------------
			case "Onion":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.818;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1818;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/18.18;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/7.576;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/121.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/181.8;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/363.6;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				break;
//-----------------------------------------------Case 13-----------------------------------------------------------------
			case "Mayonnaise":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.818;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1818;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/18.18;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/7.576;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/121.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/181.8;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/363.6;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.818;
					$deciliter = $ratio*18.18;
					$milliliter = $ratio*1818;
					$cup = $ratio*7.576;
					$tablespoon = $ratio*121.2;
					$dessert = $ratio*181.8;
					$teaspoon = $ratio*363.6;
				}
				break;
//-----------------------------------------------Case 14-----------------------------------------------------------------
			case "Peas":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.563;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1563;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/15.63;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.51;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/104.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/156.3;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/312.5;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				break;
//-----------------------------------------------Case 15-----------------------------------------------------------------
			case "Okra":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/2.381;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/2381;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/23.81;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/9.921;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/158.7;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/238.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/476.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*2.381;
					$deciliter = $ratio*23.81;
					$milliliter = $ratio*2381;
					$cup = $ratio*9.921;
					$tablespoon = $ratio*158.7;
					$dessert = $ratio*238.1;
					$teaspoon = $ratio*476.2;
				}
				break;
//-----------------------------------------------Case 16-----------------------------------------------------------------
			case "Milk":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/0.9709;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/970.9;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/9.709;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.045;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/64.72;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/97.09;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/194.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9709;
					$deciliter = $ratio*9.709;
					$milliliter = $ratio*970.9;
					$cup = $ratio*4.045;
					$tablespoon = $ratio*64.72;
					$dessert = $ratio*97.09;
					$teaspoon = $ratio*194.2;
				}
				break;
//-----------------------------------------------Case 17-----------------------------------------------------------------
			case "Potatoes":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.176;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1176;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/11.76;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.902;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/78.43;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/117.6;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/235.3;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.176;
					$deciliter = $ratio*11.76;
					$milliliter = $ratio*1176;
					$cup = $ratio*4.902;
					$tablespoon = $ratio*78.43;
					$dessert = $ratio*117.6;
					$teaspoon = $ratio*235.3;
				}
				break;
//-----------------------------------------------Case 18-----------------------------------------------
			case "Yogurt":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/0.9656;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/965.6;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/9.656;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.023;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/64.37;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/96.56;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/193.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9656;
					$deciliter = $ratio*9.656;
					$milliliter = $ratio*965.6;
					$cup = $ratio*4.023;
					$tablespoon = $ratio*64.37;
					$dessert = $ratio*96.56;
					$teaspoon = $ratio*193.1;
				}
				break;
//-----------------------------------------------Case 19-----------------------------------------------------------------
			case "Rice":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/14.71;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.127;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/147.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/294.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				break;
//-----------------------------------------------Case 20-----------------------------------------------------------------
			case "Water":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/10;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.167;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/66.67;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/100;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/200;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1;
					$deciliter = $ratio*10;
					$milliliter = $ratio*1000;
					$cup = $ratio*4.167;
					$tablespoon = $ratio*66.67;
					$dessert = $ratio*100;
					$teaspoon = $ratio*200;
				}
				break;
//-----------------------------------------------Case 21-----------------------------------------------------------------
			case "Sugar":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.235;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1235;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/12.35;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/5.144;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/82.3;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/123.5;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/246.9;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.235;
					$deciliter = $ratio*12.35;
					$milliliter = $ratio*1235;
					$cup = $ratio*5.144;
					$tablespoon = $ratio*82.3;
					$dessert = $ratio*123.5;
					$teaspoon = $ratio*246.9;
				}
				break;
//-----------------------------------------------Case 22-----------------------------------------------------------------
			case "Salt":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/0.9804;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/980.4;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/9.804;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/4.085;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/65.36;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/196.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*0.9804;
					$deciliter = $ratio*9.804;
					$milliliter = $ratio*980.4;
					$cup = $ratio*4.085;
					$tablespoon = $ratio*65.36;
					$dessert = $ratio*98.04;
					$teaspoon = $ratio*196.1;
				}
				break;
//-----------------------------------------------Case 23-----------------------------------------------------------------
			case "Sesame seeds":									
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/14.71;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.127;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/147.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/294.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				break;
//-----------------------------------------------Case 24-----------------------------------------------------------------
			case "Turmeric":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.695;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1695;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/16.95;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/7.062;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/113;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/169.5;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/339;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.695;
					$deciliter = $ratio*16.95;
					$milliliter = $ratio*1695;
					$cup = $ratio*7.062;
					$tablespoon = $ratio*113;
					$dessert = $ratio*169.5;
					$teaspoon = $ratio*339;
				}
				break;
//-----------------------------------------------Case 25-----------------------------------------------------------------
			case "Tomatoes":					
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/14.71;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.127;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/147.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/294.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				break;
//-----------------------------------------------Case 26-----------------------------------------------------------------
			case "Garlic":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1471;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/14.71;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.127;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/98.04;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/147.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/294.1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.471;
					$deciliter = $ratio*14.71;
					$milliliter = $ratio*1471;
					$cup = $ratio*6.127;
					$tablespoon = $ratio*98.04;
					$dessert = $ratio*147.1;
					$teaspoon = $ratio*294.1;
				}
				break;
//-----------------------------------------------Case 27-----------------------------------------------------------------
			case "Rice Flour":										
				if($ing_type=="Kilogram")
				{
					$ratio=$ing_val/1;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Gram")
				{
					$ratio=$ing_val/1000;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Liter")
				{
					$ratio=$ing_val/1.563;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Milliliter")
				{
					$ratio=$ing_val/1563;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Deciliter")
				{
					$ratio=$ing_val/15.63;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Cup")
				{
					$ratio=$ing_val/6.51;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Tablespoon")
				{
					$ratio=$ing_val/104.2;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Dessert Spoon")
				{
					$ratio=$ing_val/156.3;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				else if($ing_type=="Teaspoon")
				{
					$ratio=$ing_val/312.5;
					
					$kilogram = $ratio*1;
					$gram = $ratio*1000;
					$liter = $ratio*1.563;
					$deciliter = $ratio*15.63;
					$milliliter = $ratio*1563;
					$cup = $ratio*6.51;
					$tablespoon = $ratio*104.2;
					$dessert = $ratio*156.3;
					$teaspoon = $ratio*312.5;
				}
				break;
//-----------------------------------------------Default-----------------------------------------------------------------
			default:										
				echo "Error...!!!";
		} //-----------------------------------------------End Of Switch-------------------------------------------------
	} //---------------------------------------------------End Of IF-----------------------------------------------------
?> 
<!--number_format($ing_val, 2, '.', '')-->
<!-- Result -->
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Kilogram </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($kilogram, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Gram </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($gram, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Liter </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($liter, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Deciliter </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($deciliter, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Milliliter </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($milliliter, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Cup </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($cup, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Tablespoon </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($tablespoon, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Dessert Spoon </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($dessert, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	<div class="form-group">
	<label class="col-md-2 control-label" for="passwordinput">Teaspoon </label>
	<div class="col-md-10">
    <input id="" name="passwordinput" type="text" placeholder="" value="<?php echo number_format($teaspoon, 2, '.', '');?>" class="form-control input-md" disabled>
	</div>
	
	

</div>
</div>
</center>
</body>
</html>