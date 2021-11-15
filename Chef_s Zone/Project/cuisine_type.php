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
	
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <style>
  

.menu-left {
    float: left;
    width: 50%;
}
.menu-left img, .menu-right img {
    width: 100%;
}
.menu-right {
    margin: .5em 0 0;
}
.menu-right {
    float: right;
    width: 45%;
}
.menu-right h3, .menu-left h3 {
    color: #e4242e;
    font-size: 1.4em;
    line-height: 1.5em;
    font-family: 'Bitter', serif;
}
.menu-right p, .menu-left p {
    color: #7b7b7b;
    font-size: 18px;
    letter-spacing: -1px;
    font-weight: 500;
    margin: 0 0 2em;
}
.menu-right ul, .menu-left ul {
    padding: 0;
    margin: 0;
}
.ins1 {
    padding-right: 20%;
}
.menu-right ul li, .menu-left ul li {
    display: inline-block;
    font-size: 16px;
    color: #7b7b7b;
    margin: 2px 0;
}
.list li {
    position: relative;
    padding-right: 60px;
    width: 77%;
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
                               
                                
                                <li class="has-sub"><a href="cuisine_type.html">Cuisines</a>
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
 <br><br><br><br>
<h2 style="font-size: 2em; font-weight: 600; color: #CA723D; text-align: center; text-transform: capitalize; margin: 0px 0px 16px 0px;">Cuisines</h2><hr>
<div class="menuche">
	<div class="container">
		<div class="menu1">
			<div class="menu-left piz">
				<a href="indian.php"><h3>Indian</h3></a>
				<p>Indian cuisine encompasses a wide variety of regional cuisines native to India. 
				Given the range of diversity in soil type, climate, culture, ethnic group and occupations, these cuisines vary significantly from each other and use locally available spices, herbs, vegetables and fruits. 
				Indian food is also heavily influenced by religious and cultural choices and traditions.
				There has also been Central Asian influence on North Indian cuisine from the years of Mughal rule.
				Indian cuisine has been and is still evolving, as a result of the nation's cultural interactions with other societies.</p>
			</div>
			<div class="menu-right">
				<a href="indian.php"><img src="images/indian.jpeg" alt=" "></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left">
				<a href="french.php"><img src="images/french.jpg" height="100%" width="100%"></a>
			</div>
			<div class="menu-right">
				<a href="french.php"><h3>French</h3></a>
				<p>French cuisine consists of the cooking traditions and practices from France.
				There are many dishes that are considered part of French national cuisine today.
				A meal often consists of three courses, hors d'œuvre or entrée (introductory course, sometimes soup), plat principal (main course), fromage (cheese course) or dessert, sometimes with a salad offered before the cheese or dessert.
				French regional cuisine is characterized by its extreme diversity and style. 
				Traditionally, each region of France has its own distinctive cuisine.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left piz">
				<a href="italian.php"><h3>Italian</h3></a>
				<p>Italian cuisine has developed through centuries of social and political changes, with roots stretching to antiquity.
				Italian cuisine is characterized by its simplicity, with many dishes having only four to eight ingredients.
				Italian cooks rely chiefly on the quality of the ingredients rather than on elaborate preparation.
				Ingredients and dishes vary by region. 
				Many dishes that were once regional, however, have proliferated with variations throughout the country.</p>
			</div>
			<div class="menu-right">
				<a href="italian.php"><img src="images/italian.jpg" alt=" "></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left">
				<a href="mexican.php"><img src="images/mexican.jpg" alt=""></a>
			</div>
			<div class="menu-right">
				<a href="mexican.php"><h3>Mexican</h3></a>
				<p>Mexican cuisine is primarily a fusion of indigenous Mesoamerican cooking with European, 
				especially Spanish, elements added after the Spanish conquest of the 
				Aztec Empire in the 16th century. 
				The basic staples are native foods, such as corn, beans and chili peppers. 
				Europeans introduced a large number of other foods, the most important of which were meats from domesticated 
				animals (beef, pork, chicken, goat, and sheep), 
				dairy products (especially cheese), and various herbs and spices.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left piz">
				<a href="chinese.php"><h3>Chinese</h3></a>
				<p>Chinese cuisine includes styles originating from the diverse regions of China, as well as from
				Chinese people in other parts of the world including most 
				Asia nations. 
				The history of Chinese cuisine in China stretches back for thousands of years and has changed from period
				to period and in each region according to 
				climate, imperial fashions, and local preferences. 
				Over time, techniques and ingredients from the cuisines of other cultures were integrated into the cuisine of the 
				Chinese people due both to imperial expansion and from the trade with nearby regions in pre-modern times, and from 
				Europe and the New World in the modern period. 
				In addition, dairy is rarely—if ever—used in any recipes in the style.</p>
			</div>
			<div class="menu-right">
				<a href="chinese.php"><img src="images/chinese.jpg" alt=" "></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left">
				<a href="thai.php"><img src="images/thai.jpg" alt=""></a>
			</div>
			<div class="menu-right">
				<a href="thai.php"><h3>Thai</h3></a>
				<p>Thai cuisine is the national cuisine of Thailand. Balance, detail, and variety are of paramount significance 
				to Thai chefs.
				Thai cooking places emphasis on lightly prepared dishes with strong aromatic components and a spicy edge.
				It is known for its complex interplay of at least three and up to four or five fundamental taste senses in each
				dish or the overall meal: sour, sweet, salty, bitter, and spicy.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left piz">
				<a href="japanese.php"><h3>Japanese</h3></a>
				<p>Japanese cuisine is the cuisine of Japan. The traditional cuisine of Japan (washoku) is based on rice with miso soup and other dishes,
				with an emphasis on seasonal ingredients. Side dishes often consist of fish, pickled vegetables, and vegetables cooked in broth. 
				Fish is common, often grilled, but also served raw as sashimi or in sushi. 
				Seafood and vegetables are also deep-fried in a light batter as tempura.</p>
			</div>
			<div class="menu-right">
				<a href="japanese.php"><img src="images/japanese.jpg" alt=" "></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="menu1">
			<div class="menu-left">
				<a href="spanish.php"><img src="images/spanish.jpg" alt=""></a>
			</div>
			<div class="menu-right">
				<a href="spanish.php"><h3>Spanish</h3></a>
				<p>Spanish cuisine as opposed to other national cuisines in Europe, is heavily influenced by
				regional cuisines and the particular historical processes that shaped
				culture and society in those territories. 
				Geography and climate, had great influence on cooking methods and available ingredients, and 
				these particularities are still present in the gastronomy of the 
				various regions that make up the country.
				Spanish cuisine derives from a complex history, where invasions of the country and conquests of 
				new territories modified traditions and made new 
				ingredients available .</p>
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