<?php
session_start();
//&& basename(__FILE__)!="index.php"
if(isset($_SESSION['username']))
{
	die("<script>window.location='user_login.php';</script>");
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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
	<!--link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Walter+Turncoat" /-->
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">	
<style>
</style>
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
                <div class="user pull-right">
					<div class="slide">
                        <a class="user" href="javascript:;" data-toggle="modal" data-target="#loginModal"> User Login</a>
					</div>
                </div><!-- /.user -->	
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.containter -->
</div><!-- /.top -->
<!-- Header -->
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

<br><br><br><br><br><br><br><br><br>
<div id="heading" class="slide">
	<center><h1><font face="Anadalus" color="aliceblue">Welcome to<b><strong> CHEF'S ZONE</strong></b><br>The best in the Culinary Specialists</font></h1></center>
</div>
<br><br><br><br><br>
<div id="search">
	<center>
		<form method="post" action="main_search.php">
			<input type="text" placeholder="Search for..." required="" name="main_name" style="width:50%;border-radius:5px;line-height: 4rem;font-size: 20px;padding-left: 15px;">
			<button type="submit" class="btn btn-primary" style=" height: 46px; width: 100px; position: relative; top: -4px;">Search</button>
		</form>
	</center>
</div>
<br><br>
<!-- -Login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content login-modal">
      		<div class="modal-header login-modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-center" id="loginModalLabel">USER AUTHENTICATION</h4>
      		</div>
      		<div class="modal-body">
      			<div class="text-center">
	      			<div role="tabpanel" class="login-tab">
					  	<!-- Nav tabs -->
					  	<ul class="nav nav-tabs" role="tablist">
					    	<li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Sign In</a></li>
					    	<li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
					    	<li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Forget Password</a></li>
					  	</ul>
					  	<!-- Tab panes -->
					 	<div class="tab-content">
					    	<div role="tabpanel" class="tab-pane active text-center" id="home">
					    		&nbsp;&nbsp;
					    		<span id="login_fail" class="response_error" style="display: none;">Login failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form action="login/loginform.php" method="POST">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" id="login_username" name="username" placeholder="Username" required>
								    	</div>
								    	<span class="help-block has-error" id="email-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
								    	</div>
								    	<span class="help-block has-error" id="password-error"></span>
								  	</div>
									<button type="submit" id="login_btn" class="btn btn-block bt-login" data-loading-text="Logging in....">Login</button>
						  			
						  			<div class="clearfix"></div>
						  			<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>
											</div>											
											<div class="col-xs-4 col-sm-4 col-md-4">
												<i class="fa fa-check"></i>
												<a href="javascript:;" class="signup-tab"> Sign Up </a>
											</div>
										</div>
						  			</div>
								</form>
					    	</div>
					    	<div role="tabpanel" class="tab-pane" id="profile">
					    	    &nbsp;&nbsp;
					    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form action="login/register.php" method="post">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="username-error"></span>
								  	</div>
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
								    	</div>
								    	<span class="help-block has-error" id="password-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail"  name="email" placeholder="Email" required>
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
						  			<button type="submit" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering....">Register</button>
									<div class="clearfix"></div>
									<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4">
												<i class="fa fa-check"></i>
												<a href="javascript:;" class="signin-tab"> Sign In </a>
											</div>
										</div>
						  			</div>
								</form>
					    	</div>
					    	<div role="tabpanel" class="tab-pane text-center" id="forget_password">
					    		&nbsp;&nbsp;
					    	    <span id="reset_fail" class="response_error" style="display: none;"></span>
						    		<div class="clearfix"></div>
						    		<form>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" id="femail" placeholder="Email" required>
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="femail-error"></span>
									  	</div>
							  			<button type="button" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait....">Forget Password</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>												
												</div>												
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>
												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						  	</div>
						</div>
	      				
	      			</div>
	      		</div>
	      		
	    	</div>
	   </div>
 	</div>
</div>	
<!--Login module ends here-->

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
	
	
	
	
	
	<div class="container-fluid bg-grey">
	<div class=" text-center">
		<div class="row">
			<h1 style="text-align:center; font-family:anadalus; color:#330000;">TODAY'S SPECIAL</h1>
		</div>
	</div>
	<br>
    	<?php	
			include "config.php";	 
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
							<div class="col-sm-8" style="font-family:sans-serif;">
							<h2><?php echo ucwords($row["name"]);?></h2>
							<?php
									echo "<b>Categories : </b>".ucwords($row["category"])."<br>";
									echo "<b>Recipe Type : </b>".ucwords($row["sub_category"])."<br>";
									
									$time=$row["cook_time"];
                                    $hours = floor($time/60);
									$minutes = $time%60;
									if ($hours==0 && $minutes==0) 
									{
										header("Location: 404.php");
									}
									if ($hours==0 && $minutes!=0) 
									{
									
										echo "<b>Time : </b>".$minutes." mins<br>";
									}
									if ($hours!=0 && $minutes==0) 
									{
										echo "<b>Time : </b>".$hours." hr<br>";
									}
									if ($hours!=0 && $minutes!=0) 
									{
										echo "<b>Time : </b>".$hours." hr ".$minutes." min <br>";
									}
                                ?>			
								<p><?php echo $row["description"]; ?> </p>
								<form action="single_cuisine.php" method="POST">
								<button type="submit" class="btn btn-primary btn-sm" role="button" name="recipe_name" value="<?php echo $row["id"];?>" style="width:100px; font-size:15px;">See More</button>
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

	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
<!--/start-footer-->
<footer class="footer-distributed">
	<div class="footer-left">
		<h1>Chef's<span>Zone</span></h1>
		<p class="footer-links">
			<a href="index.php">HOME</a>
			·
			<a href="cuisine_type.php">CATEGORIES</a>
			·
			<a href="about.php">ABOUT US</a>
			·
			<a href="contact.php">CONTACT US</a>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	$('.multi-field-wrapper').each(function()
	{
		var $wrapper = $('.multi-fields', this);
		$(".add-field", $(this)).click(function(e) 
		{
			$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
		});
		$('.multi-field .remove-field', $wrapper).click(function()
		{
			if ($('.multi-field', $wrapper).length > 1)
			$(this).parent('.multi-field').remove();
		});
	});
</script>
<script>
$('.multi-field-wrapper').each(function() {
var $wrapper = $('.multi-fields', this);
$(".add-field1", $(this)).click(function(e) {
$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
});
$('.multi-field .remove-field', $wrapper).click(function() {
if ($('.multi-field', $wrapper).length > 1)
  $(this).parent('.multi-field').remove();
});
});
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function()
	{
		// Add smooth scrolling to all links in navbar + footer link
		$(".navbar a, footer a[href='#myPage']").on('click', function(event) 
		{
			// Prevent default anchor click behavior
			event.preventDefault();
			// Store hash
			var hash = this.hash;
			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate(
			{
				scrollTop: $(hash).offset().top
			}, 900, function()
			{
				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		}); 
		// Slide in elements on scroll
		$(window).scroll(function()
		{
			$(".slideanim").each(function()
			{
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
	$(document).ready(function()
	{
		$(document).on('click','.signup-tab',function(e)
		{
			e.preventDefault();
			$('#signup-taba').tab('show');
		});	
		$(document).on('click','.signin-tab',function(e)
		{
			e.preventDefault();
			$('#signin-taba').tab('show');
		});	    	
		$(document).on('click','.forgetpass-tab',function(e)
		{
			e.preventDefault();
			$('#forgetpass-taba').tab('show');
		});
	});	
</script>
</body>
</html>