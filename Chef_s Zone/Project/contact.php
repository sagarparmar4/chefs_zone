<?php
session_start();
//&& basename(__FILE__)!="index.php"
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
  
  <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
	<!--link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Walter+Turncoat" /-->
	
	<link rel="stylesheet" href="css/footer.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	
<style>
.container2 {
    padding-right: 0px;
    padding-left: 0px;
    margin-right: 50px;
    margin-left: 50px;
}
.contact h3 {
    color: #1d1d1d;
    font-size: 2em;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1.3em;
    text-transform: uppercase;
}
.find_us{
    color: #1d1d1d;
    font-size: 2em;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1.3em;
    text-transform: uppercase;
}

.map iframe {
    width: 100%;
    min-height: 380px;
    border: none;
}
form {
    display: block;
    margin-top: 0em;
}
.contact-form form input[type="text"] {
    width: 100%;
    color: #898888;
    outline: none;
    font-size: 15px;
    padding: .5em;
    margin-bottom: 1em;
    border: solid 1px #D5D4D4;
    -webkit-appearance: none;
}
.contact-info p {
    font-size: 1em;
    font-weight: 400;
    line-height: 1.8em;
    color: #777777;
}
.contact-info h6 {
    color: #1E1E1E;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.5em;
    margin: 0.5em 0;
}
.contact-form form input[type="submit"] {
    border: none;
    outline: none;
    color: #fff;
    background: none;
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    font-weight: 600;
    margin: .6em 0;
    padding: 8px 15px;
    -webkit-appearance: none;
    background: #1d1d1d;
}


</style>
</head>
<body>
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

	
	
	
	
	
<div class="container2" style="width:94%;">
    <div class="contact">
	<br><br><br>
				<h3 class="wow fadeInLeft animated animated" data-wow-delay="0.4s">Our Location</h3>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482632.8035818862!2d72.60099889498925!3d19.08268809462705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1459655921963" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><br>
				<div class="col-md-6 contact-form wow fadeInRight animated" data-wow-delay="0.4s">
				<h3 class="wow fadeInLeft animated animated" data-wow-delay="0.4s">Send Feedback</h3>
				<form method="POST" action="submit_feedback.php">
						<input type="text" placeholder="Name:" required="" name="name">
						<input type="text" placeholder="Email-id:" required="" name="email">
						<input type="text" placeholder="Subject:" required="" name="topic">
						<textarea placeholder="Message:" required="" name="message"></textarea>
						<div class="wow swing animated animated" data-wow-delay="0.4s">
							<input type="submit" value="SEND">
						</div>
					</form>
				</div>

				<div class="col-md-6 contact-info wow fadeInLeft animated" data-wow-delay="0.4s">
					<h3>Contact Information</h3>
					<p><h4>Trouble on the site or in the kitchen?</h4>Find answers to your confusion by sending your feedback.</p>
					<p>We would love to hear your feedback on our site. Our customer support team will do their best.</p>
					<h6>CHEF'S ZONE - The Culinary Specialist.<br>
					    Mumbai, Maharashtra.<br>India.<br>

					Telephone: +91 9892639557<br>
					E-mail: <span class="email">chefszone@gmail.com</span>
					</h6>
				</div>
				<div class="clearfix"> </div>
			<!-- //container -->
		</div>
		</div>
	</div>
</div>
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