<!-- Today's Pick -->
<?php
function gen_num()
{ 		
	include "config.php";	 	 
	if(!$conn)
	{
		return -1;
	}
	else
	{
		//Part 1
		$sql = "SELECT * FROM cuisines";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			$value=mysqli_num_rows($result);
		}
		else
		{
			return -1;
		}
		//Get No. Of Rows Added On Todays Date 
		$sql = "SELECT * FROM random";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$date=date("Y-m-d");
				$str = $row["date"];
				if(!($str==$date))
				{
					$x=1;
					while($x)
					{
						$gen_range=rand(1,$value);
						if(!($row["number"]==$gen_range))
						{
							$x=0; 
						}
					}
					$sql = "UPDATE random SET number='$gen_range' WHERE date='$str'";
					//Update 1
					if ($conn->query($sql) === TRUE) 
					{
						$sql = "UPDATE random SET date='$date' WHERE number='$gen_range'";
						if ($conn->query($sql) === TRUE) 
						{
							
							return $gen_range;
						} 
						else 
						{
							return -1;
						}
					} 
					else 
					{
						return -1;
					}
										
				}
				else
				{
					return $row["number"];
				}
			}
		}
		$conn->close();
	}
}
/*
echo "Function : <br>";
echo gen_num();
*/
?>