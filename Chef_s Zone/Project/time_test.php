<?php
	
	//case 00 = no time : ex-time=0min
	//case 01 = less than 60 min : ex-time = 10min
	//case 10 = multiple of 60 : ex-exact 2hr (120min)
	//case 11 = more than 60 min and not multiple of 60 : ex-exact 2hr 5min (125min)
	//$hours = floor($row["cook_time"]/60);
	//$minutes = $row["cook_time"]%60;
	$cook_time=0;
	echo "cook_time : ".$cook_time."<br>";
	
	$hours = floor($cook_time/60);
	$minutes = $cook_time%60;
	
	echo "Cooking Time : <br><br>";
	
	if ($hours==0 && $minutes==0) //case 00
	{
		//echo "Case 00<br>";
		header("Location: 404.html");
	}
	if ($hours==0 && $minutes!=0) //case 01
	{
		//echo "Case 01<br>";
		echo $minutes." min <br>";
	}
	if ($hours!=0 && $minutes==0) //case 10
	{
		//echo "Case 10<br>";
		echo $hours." hr <br>";
	}
	if ($hours!=0 && $minutes!=0) //case 11
	{
		//echo "Case 11<br>";
		echo $hours." hr ".$minutes." mins <br>";
	}
?>