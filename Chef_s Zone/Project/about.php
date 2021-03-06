<?php
session_start();
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
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Walter+Turncoat" />
	
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
  <style>
</style>
</head>
<body background="images/2.jpg">
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
                                <li class="last"><a href="contact.php">Contact</a>
                                </li>
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
								      		<input type="text" class="form-control" id="login_username" name="username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" id="email-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" class="form-control" id="password" name="password" placeholder="Password">
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
					    		<form>
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" id="username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="username-error"></span>
								  	</div>
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" class="form-control" id="password" placeholder="Password">
								    	</div>
								    	<span class="help-block has-error" id="password-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail" placeholder="Email">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
						  			<button type="button" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering....">Register</button>
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
									      		<input type="text" class="form-control" id="femail" placeholder="Email">
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
 	<!-- - Login Model Ends Here -->
	
	
	
	
	
	
	
<!--start-slider-->
		<div class="about-section"> 
		   <div class="container">
		         <div class="about-section">
				 <div class="col-md-7 ab-text">
					<h4><font face="Anadalus" color="black">Welcome to<b> CHEF'S ZONE</b></font></h4>
					<p style="font-family:Anadalus;font-size:15px" ><span style="color: rgb(247, 150, 8);">#CookAndTell</span>
						<br>
						Before we talk about us, let???s talk about you.
						<br>
						You love to eat. That???s right, we???ve got your number. There???s no need to be shy about it ??? we love to eat, too.  
						We???ve been helping you eat for awhile now, and we wouldn???t have it any other way.
						We also know about all the other stuff you love: Like cooking and getting together,
						and talking about eating, and sharing it all here, on <a href="index.html" style="color: #BC8C45">CHEF???S ZONE.</a>
						We also have tons crazy-tempting photos, troves of recipe and 
						their reviews. That???s a heck of a lot of Food. Thank you!
						<br><br>
						We thought we???d celebrate with a fresh, new Food. Our aim is to make all this cooking, eating and sharing easier. 
						Whether it???s finding a recipe, showing off your latest cooking triumph, photographing a killer meal or sharing the shortcuts 
						that make your life run more smoothly, the new-and-improved <a href="index.html" style="color: #BC8C45">CHEF???S ZONE</a> makes this place ??? 
						your home for sharing all things food ??? the spot to be.
						So look around, view our magic recipes, figure out what to make for dinner tonight, 
						and see where it all takes you. We???re glad you???re here, and we invite you to come back often. 
						And whatever way you like to <span style="color: rgb(247, 150, 8);">#CookAndTell</span> ??? we hope you???ll do more of it here with us.
					</p><br>
						<div class="why">
								<h4><font face="Anadalus" color="black">Why <b>CHEF'S ZONE</b></font></h4>
								<p style="font-family:Anadalus;font-size:15px"><a href="index.html" style="color: #BC8C45">CHEF???S ZONE</a> is a newly developed website based on recipes you want to search. 
								<a href="index.php" style="color: #BC8C45">CHEF???S ZONE</a> offers Indian cooks at all skill level a dynamic and indispensable 
								place to discover and share food online.
								We also provide the customers with authentic global insights into the kitchens and cooking passions of home cooks everywhere.
								Three key features that make us diffrent from others are :</p>
						</div>
						<ul style="font-family:Anadalus;font-size:15px">
							<li>You can search tasty recipes not only by using recipe names but also by using ingredients. </li>
							<li>Easy navigation through webpages.</li>
							<li>More filtering options.</li>
						</ul>
					</div>
					<div class="col-md-5 chef">
						<img src="images/chef.png" class="img-responsive" alt="" />
					</div>
					<div class="clearfix"> </div>
			     </div>
		   </div>
		 </div>
		<!--start-team-->
		   <div class="team-section"> 
		   <div class="container">
				<div class="team">
				    <div class="col-md-4 team-left">
					    <h3>OUR TEAM</h3>
					</div>
					 <div class="col-md-8 team-right">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">
									<div class="ch-info">
										<h3>GUI</h3>
										<p>by Akash Shah</p>
									</div>
								</div>
								<h4>AKASH SHAH</h4>
							</li>
							<li>
								<div class="ch-item ch-img-2">
									<div class="ch-info">
										<h3>DBA</h3>
										<p>by Riya Shah</p>
									</div>
								</div>
								<h4>RIYA SHAH</h4>
							</li>
							<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info">
										<h3>CODING</h3>
										<p>by Sagar Parmar</p>
									</div>
								</div>
								<h4>SAGAR PARMAR</h4>
									 
							</li>
						<div class="clearfix"> </div>
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
		   </div>
<footer class="footer-distributed">
<div class="footer-left">
				<h1>Chef's<span>Zone</span></h1>
				<p class="footer-links">
					<a href="index.php">HOME</a>
					??
					<a href="single_cuisine.php">CATEGORIES</a>
					??
					<a href="contact.php">CONTACT US</a>
					??
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
					CHEF???S ZONE is a newly developed website based on recipes you want to search. 
					CHEF???S ZONE offers Indian cooks at all skill level a dynamic and indispensable 
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