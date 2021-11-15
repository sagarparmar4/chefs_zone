<?php
session_start();
//&& basename(__FILE__)!="index.php"
if(isset($_SESSION['username'])==FALSE)
{
	die("<script>window.location='index.php';</script>");
}
?>
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
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<style>
		.carousel-content
		{
			color:white;
			display:block;
			font-size:50px;
			align-items:center;
	
		}
	</style>
	<script ="text/javascript">
		setCarouselHeight('#carousel-example');
		function setCarouselHeight(id)
		{
			var slideHeight = [];
			$(id+' .item').each(function()
			{
				// add all slide heights to an array
				slideHeight.push($(this).height());
			});
			// find the tallest item
			max = Math.max.apply(null, slideHeight);
			// set the slide's height
			$(id+' .carousel-content').each(function()
			{
				$(this).css('height',max+'px');
			});
		}
	</script>
</head>
<body background="images/2.jpg" style="background-repeat:no-repeat;">
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul class="social pull-left">
					<div class="slide">
						<li><a href="404.php"><i class="fa fa-facebook"></i></a></li>
						<li><a href="404.php"><i class="fa fa-twitter"></i></a></li>
						<li><a href="404.php"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="404.php"><i class="fa fa-github"></i></a></li>
					</div>
				</ul><!-- /.social -->
            </div><!-- /.col-md-5 -->
      		<div class="col-md-7">
					
					
                
<?php
//&& basename(__FILE__)!="index.php"
if(isset($_SESSION['username'])==TRUE)
{
	 ?>
					<div class="user pull-right">
							<div class="slide">
                                <a href="logout.php">Logout</a>
							</div>
                    </div><!-- /.user -->
                    <div class="user pull-right">
							<div class="slide">
                                <a class="user" href="update_profile.php">Update Profile</a>
							</div>
                    </div><!-- /.user -->
	<?php
}
else
{
	 ?>
	 <div class="user pull-right">
	 <div class="slide">
	 <a class="user" href="javascript:;" data-toggle="modal" data-target="#loginModal"> User Login</a>
	 </div>
	 </div>
	<?php
}
					
	?>				
					
				</div><!-- /.col-md-7 -->	
					
					
					
					
                       
					
        </div><!-- /.row -->
    </div><!-- /.containter -->
</div><!-- /.top -->
<header id="header" class="header">
    <div class="header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<div class="logo-wrap">
	                    <div id="logo" class="logo">
	                        <a href="index.php" rel="home">
								<img src="images/logo.png" style=" position: relative; bottom: 175px;right: 45px;">
	                        </a>
	                    </div>
                    </div>
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="has-sub current"><a href="about.php">About Us</a></li>                               
                            <li class="has-sub"><a href="cuisine_type.php">Cuisines</a>
                                <ul class="sub-menu">
									<li><a href="indian.php">Indian</a></li>
									<li><a href="french.php">French</a></li>
									<li><a href="italian.php">Italian</a></li>
									<li><a href="mexican.php">Mexican</a></li>
									<li><a href="chinese.php">Chinese</a></li>
									<li><a href="thai.php">Thai</a></li>
									<li><a href="japanese.php">Japanese</a></li>
									<li><a href="spanish.php">Spanish</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li><a href="#" title="spacing" class="spacing" style="width:500px"></a></li>
                            <li class="has-sub"><a href="#">Tool Box</a>
                                <ul class="sub-menu">
									<li><a  data-toggle="modal" data-target="#myModal">Ingredients Converter</a></li>
									<li><a  data-toggle="modal" data-target="#myModal2">Langauge Translator</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li class="last"><a href="contact.php">Contact</a></li>
                        </ul><!-- /.menu -->
                    </nav><!-- /nav -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-wrap -->
</header><!-- /.header -->	
<!-- Modal 1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</button>
      </div>

<div class="modal1-body">
        <iframe src="ing.php" id="info" class="iframe" name="info" seamless="" height="100%" width="100%"></iframe>
      </div>

    </div>
  </div>
</div> <!-- /#myModal -->

<!-- Modal 2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</button>
      </div>

<div class="modal1-body">
        <iframe src="translate.php" id="info" class="iframe" name="info" seamless="" height="100%" width="100%"></iframe>
      </div>

    </div>
  </div>
</div> <!-- /#myModal -->














<center>

<div id="welcome-user" class="p" >
<br>
	
	
	
	
	
	<?php
include "config.php";	 

$temp=$_SESSION['username'];
$name=str_replace(" ", "_", $temp);
//echo "name : ".$name."<br>";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users WHERE username='$temp'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //start
		$target=$row["icon"];
		$target='uploads/'.$target.'.jpeg';
		//end
		?><image src="<?php echo $target;?>" height="175px" width="175px" style="border-radius:100px"></image><br>
		<h1 style="color:wheat;"><?php echo ucwords($row["name"]); //name?></h1>
		
		<div style="color:white;">
		<h2><?php echo ucwords($_SESSION['username']); //name?></h2>
		<h3><?php echo "Cooking Level : ".ucwords($row['level']); //name?></h3>
		<h3><?php echo "Experience : ".$row['experience']; //name?></h3>
		<h3><p><?php echo "About Me :<br><h4 style='color:white'> ".$row['about']."</h4>"; //name?></p></h3>
</div>
		<?php
		
    }
} else {
    echo "<br>0 results<br>";
}
$conn->close();
	?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
</center>
<div id="search" style="position: relative;
    top: 115px;width: 100%;
    left: 0%;">
	<center>
  <form method="post" action="main_search.php">
				<input type="text" name="main_name" placeholder="Search for..." required="" style="width:50%;position: relative;border-radius:5px;
    top: -4px;
    line-height: 4rem;
	padding-left:15px;
    font-size: 20px;">
				 <button type="submit" class="btn btn-primary" style="position: relative;
    top: -7px;
    height: 46px;
    width: 100px; ">Search</button>
    </form>
	</center>
	</div>
<br>
<br>
<br>
<br><br>
<br>
<div class="container-fluid bg-grey">
    	<?php	
			$serverName = "localhost";      //server name
			$userName = "root";             //username phpmyadmin
			$pass = "root";                     //password for database
			$dbName = "chefszone";
			
			// to connect database
			$conn = mysqli_connect($serverName,$userName,$pass,$dbName);	 
			if(!$conn)
			{
				echo "Error : ".mysql_error($conn); 
				//display error if connetion is not set
			}
			
			//Part 1
			else
			{
				include "random.php";
				$id=gen_num();
				//echo "Id New : ".$id."<br>";
				if($id==-1)
				{
					echo "Error 1<br>";
					//add header
				}
				else
				{
					$sql = "SELECT * FROM cuisines WHERE id='$id'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) 
					{
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{					
							/*
								display results according to 
								"Filtered Value Of Column : ID"
								Stored in Array Named $Value
							*/
							$target=$row["icon"];
							$target='uploads/'.$target.'.jpeg';
							?>
							<div class="col-sm-4"><image src="<?php echo $target;?>" height="80%" width="80%" style="padding-top:25px;"></div>
							<div class="col-sm-8">
							<h1><font face="anadalus">Today's Specials for you!!!</h1>
							<h2><?php echo ucwords($row["name"]);?></h2>
							<?php
									echo "Categories : ".ucwords($row["category"])."<br>";
									echo "Recipe Type : ".ucwords($row["sub_category"])."<br>";
									
									$time=$row["cook_time"];
                                    $hours = floor($time/60);
									$minutes = $time%60;
									if ($hours==0 && $minutes==0) 
									{
										header("Location: 404.php");
									}
									if ($hours==0 && $minutes!=0) 
									{
									
										echo "Time : ".$minutes." mins<br>";
									}
									if ($hours!=0 && $minutes==0) 
									{
										echo "Time : ".$hours." hr<br>";
									}
									if ($hours!=0 && $minutes!=0) 
									{
										echo "Time : ".$hours." hr ".$minutes." min <br>";
									}
                                ?>			
								<p><?php echo $row["description"]; ?> </p>
								<form action="single_cuisine.php" method="POST">
								<button type="submit" style="width:100px; font-size:15px !important" class="btn btn-primary btn-sm" role="button" name="recipe_name" value="<?php echo $row["id"];?>">See More</button>
								</form>
								<?php

						}
					}
					else
					{
						echo "Error : 2";
					}
					
				}					
			}	
			$conn->close();
		?>
		</div>
		<div class="col-sm-3"></div>
</div>
<!--CATEGORIES-->
<div class="container-fluid" style="background-color:#f6f6f6; font-family:Anadalus;" >
	<div class=" text-center">
		<div class="row">
			<h1 style="text-align:center; font-family:anadalus; color:#330000;">CATEGORIES</h1>
			<div class="col-md-6 " role="tabpanel" style="width:100%;background-color:#F6F6F6;">
				<!-- Nav tabs -->
				<ul class="nav nav-justified" id="nav-tabs" role="tablist">
					<li role="presentation">
						<a href="#breakfast" aria-controls="breakfast" role="tab" data-toggle="tab">
							<img src="images/breakfast.jpg">
						</a>
					</li>
					<li role="presentation">
						<a href="#lunch" aria-controls="lunch" role="tab" data-toggle="tab">
							<img src="images/lunch.jpg">                   
						</a>
					</li>
					<li role="presentation">
						<a href="#dinner" aria-controls="dinner" role="tab" data-toggle="tab">
							<img src="images/dinner.jpg">
						</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content" id="tabs-collapse">
					<div role="tabpanel" class="tab-pane fade" id="breakfast">
						<div class="tab-inner">                    
							<p><strong class="lead"><a href="breakfast.php">BREAKFAST</a></strong></p>
							<p class="text-uppercase">All Happiness Depends on a Leisurely Breakfast!!</p>                                     
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in active" id="lunch">
						<div class="tab-inner">                    
							<p><strong class="lead"><a href="lunch.php">LUNCH</a></strong></p>
							<p class="text-uppercase">Lunch is for wimps!!</p>                 
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="dinner">
						<div class="tab-inner">                    
							<p><strong class="lead"><a href="dinner.php">DINNER</a></strong></p>
							<p class="text-uppercase">A good dinner and feasting reconciles everyone!!</p>                
						</div>
					</div>
				</div>      
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 " role="tabpanel" style="width:100%;background-color:#F6F6F6;">
				<!-- Nav tabs -->
				<ul class="nav nav-justified" id="nav-tabs" role="tablist">
					<li role="presentation">
						<a href="#snacks" aria-controls="snacks" role="tab" data-toggle="tab">
							<img src="images/snacks.jpg">                    
						</a>
					</li>
					<li role="presentation">
						<a href="#starters" aria-controls="starters" role="tab" data-toggle="tab">
							<img src="images/starters.jpg">                
						</a>
					</li>
					<li role="presentation">
						<a href="#dessert" aria-controls="dessert" role="tab" data-toggle="tab">
							<img src="images/dessert.jpg">                 
						</a>
					</li>            
				</ul>
				<!-- Tab panes -->
				<div class="tab-content" id="tabs-collapse">
					<div role="tabpanel" class="tab-pane fade" id="snacks">
						<div class="tab-inner">                    
							<p><strong class="lead"><a href="snacks.php">SNACKS</a></strong></p>
							<p class="text-uppercase">Bigger snacks bigger slacks!!</p>                                     
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in active" id="starters">
						<div class="tab-inner">                    
							<p><strong class="lead"><a href="starters.php">STARTERS</a></strong></p>
							<p class="text-uppercase">Always cook decilious starters because first impression is the last impression!!</p>                 
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="dessert">
						<div class="tab-inner">                    
							<p><strong class="lead"><a href="dessert.php">DESSERT</a></strong></p>
							<p class="text-uppercase">A balanced diet is having a cupcake in each hand!!</p>                
						</div>
					</div>
				</div>       
			</div>		
		</div>
	</div>
</div>
<!--/start-footer-->
<footer class="footer-distributed">
<div class="footer-left">
				<h1>Chef's<span>Zone</span></h1>
				<p class="footer-links">
					<a href="index.php">HOME</a>
					·
					<a href="single_cuisine.php">CATEGORIES</a>
					·
					<a href="contact.php">CONTACT US</a>
					·
					<a href="about.php">ABOUT US</a>
				</p>
				<p class="footer-company-name">&copy;CHEF'S ZONE 2015</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Mumbai, India.</span></p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9892639557 </p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:chefszone@gmail.com">support@chefszone.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About CHEF'S ZONE</span>
					CHEF’S ZONE is a newly developed website based on recipes you want to search. 
					CHEF’S ZONE offers Indian cooks at all skill level a dynamic and indispensable 
					place to discover and share food online.
				</p>
				<div class="footer-icons">
					<a href="404.php"><i class="fa fa-facebook"></i></a>
					<a href="404.php"><i class="fa fa-twitter"></i></a>
					<a href="404.php"><i class="fa fa-linkedin"></i></a>
					<a href="404.php"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</footer>	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
$(document).ready(function()
{
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Prevent default anchor click behavior
    event.preventDefault();
    // Store hash
    var hash = this.hash;
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
	$('html, body').animate({
	scrollTop: $(hash).offset().top
    }, 900, function()
	{
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
});
 
 // Slide in elements on scroll
 $(window).scroll(function() {
	$(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) 
		{
          $(this).addClass("slide");
        }
    });
  });
})

//modal call
$(document).ready(function(){
	$(document).on('click','.signup-tab',function(e){
		e.preventDefault();
	    $('#signup-taba').tab('show');
	});	
	
	$(document).on('click','.signin-tab',function(e){
	   	e.preventDefault();
	    $('#signin-taba').tab('show');
	});
	    	
	$(document).on('click','.forgetpass-tab',function(e){
	 	e.preventDefault();
	   	$('#forgetpass-taba').tab('show');
	});
});	
</script>	
</body>
</html>