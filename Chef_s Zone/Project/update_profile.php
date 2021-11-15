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
	<script defer src="js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,700' rel='stylesheet' type='text/css'>
	<script src="js/imagezoom.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
		$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
		});
		});
	</script>
	<!--//FlexSlider -->
  <style>
		/*----*/
		.single-grids
		{
			padding: 4em 0;
		}
		.single-grid1 h2 
		{
			margin-bottom: 0.5em;
			margin-top: 1.5em;
			text-align: center;
			color: #5D4B33;
			font-family: Marvel-Regular;
		}
		.single-grid1 ul li 
		{
			list-style: none;
		  
		}
		.single-grid1 ul li a:hover 
		{
			color: #F07818;
		}
		.single-grid1 ul li a 
		{
			font-size: 1em;
			text-transform: capitalize;
			line-height: 3em;
			color: #999;
			text-decoration: none;
		}
		p.qty 
		{
		   
			display: inline-block;
		}
		.single-grid #quantity 
		{
			width: 50px;
			height: 37px;
			display: inline-block;
			margin: 15px 10px 0 10px;
			padding: 9px 0px 8px;
			outline: none;
			text-align: center;
		}
		.single-grid h3 
		{
			font-size: 1.7em;
			line-height: 1.6em;
			color: #5D4B33;
			margin-bottom: 0.5em;
			font-family: 'Marvel-Regular';
		}
		.single-grid p 
		{
			font-size: 1em;
			line-height: 1.8em;
			color: #999;
		}
		.single-grid h5
		{
			font-size: 1.5em;
			color: #000;
		}
		span.glyphicon.glyphicon-star-empty:hover 
		{
			color: red;
		}
		.btn_form a 
		{
			outline: none;
			display: inline-block;
			font-size: 0.9em;
			padding: 0.5em 1em;
			border: 2px solid #F07818;
			background: #F07818;
			color: #fff;
			text-transform: uppercase;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
			text-decoration: none;
			margin-bottom: 1em;
		}
		.btn_form a:hover 
		{
			background: transparent;
			border-color: #5D4B33;
			color:#5D4B33;
			text-decoration: none;
		}

		ul.size li 
		{
		  display: inline-block;
		  margin: 0 10px 0 0;
		}
		ul.size h3 
		{
			color: #F07818;
			font-size: 1.4em;
			text-transform: uppercase;
			margin: 0 0 0.5em;
			font-weight: 600;
		}
		ul.size li a 
		{
			color: #999;
			font-size: 1em;
			background: #fff;
			padding: 5px 0;
		}
		.recipeIngredients 
		{
			float: left;
			clear: none;
			width: 65%;
		}
		.recipeDetail H2 SMALL 
		{
			font-size: 1.4rem;
			color: #7f838b;
		}
		h2 
		{
			font-weight: 600;
			font-size: 2.1rem;
			line-height: 2.3rem;
		}
		h2 small 
		{
			font-weight: 400;
			color: #7f838b;
			font-size: smaller;
		}
		.accent 
		{
			color: #83b238;
		}
		.directions-components 
		{
			background-color: #fff;
			color: #666666;
			font-family: Georgia,serif;
			font-size: 16px;
			font-size: 1rem;
			line-height: 1.4;
			letter-spacing: 0.4px;
			letter-spacing: 0.025rem;
		}
		.page-section-title 
		{
			line-height: 1.1;
			border-bottom: 1px solid #171717;
			padding-bottom: 0.07143em;
			margin-bottom: 0.57143em;
		}
		.directions-components .directions-group, .directions-components .components-group 
		{
			margin-bottom: 1.57143em;
		}
		.components-container > .components-group > .components-list 
		{
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		.components-item, .directions-item 
		{
			margin-bottom: 1em;
			font-size:15px;
		}
		.directions-components .directions-group ol 
		{
			margin: 0;
		}
		.shape{    
	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}

.shape-text{
    color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}

.project {
    min-height:120px;
    height:auto;
}

.project{
   background: url(bg.jpg);; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden; text-align:center; border-radius:15px;
}

.project-radius{
    border-radius:7px;
}

.project-default {    border-color: #999999; }
.project-default .shape{
	border-color: transparent #999999 transparent transparent;
	border-color: rgba(255,255,255,0) #999999 rgba(255,255,255,0) rgba(255,255,255,0);
}

.project-danger {    border-color: #d9534f; }
.project-danger .shape{
	border-color: transparent #d9534f transparent transparent;
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}

.project-success {	border-color: #5cb85c; }
.project-success .shape{
	border-color: transparent #5cb85c transparent transparent;
	border-color: rgba(255,255,255,0) #5cb85c rgba(255,255,255,0) rgba(255,255,255,0);
}

.project-primary {	border-color: #428bca; }
.project-primary .shape{
	border-color: transparent #428bca transparent transparent;
	border-color: rgba(255,255,255,0) #428bca rgba(255,255,255,0) rgba(255,255,255,0);
}

.project-info {	border-color: #5bc0de; }
.project-info .shape{
	border-color: transparent #5bc0de transparent transparent;
	border-color: rgba(255,255,255,0) #5bc0de rgba(255,255,255,0) rgba(255,255,255,0);
}

.project-warning {	border-color: #f0ad4e; }
.project-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
	border-color: rgba(255,255,255,0) #f0ad4e rgba(255,255,255,0) rgba(255,255,255,0);
}

.project-content {
    padding:0 20px 10px;
}

input[type="submit"] {
    border-color: #949494;
    border-radius: 15px;
    width: 35rem;
    font-size: 2rem;
    font-weight: 500;
}
button {
    border-radius: 15px;
    width: 26rem;
    font-size: 17px;
    font-weight: 500;
}
input#fileToUpload {
    border-radius: 15px;
    width: 29rem;
    font-size: 18px;
    font-weight: 500;
}

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
                            <li class="last"><a href="contact.php">Contact</a></li>
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
	
<div class="single">
    <div class="container-fluid">
		<div class="single-grids">        
			<div class="col-md-8 single-grid simpleCart_shelfItem">   
				<div class="col-xs-12">
			<div class="project project-default" style="background-color:rgba(240, 248, 255, 0.86);">
				
				<div class="project-content">
					<h3 class="lead">
						Update Profile
					</h3>
					<p>
									<form method="post" action="update_profile_insert.php" enctype="multipart/form-data">
						<!-- TITLE -->
						<div class="form-group">
							<label class="col-md-12 control-label" for="passwordinput">Your Name</label>
							<div class="col-md-12">
								<input id="passwordinput" name="username" type="text" placeholder="Enter your name"  class="form-control input-md">
							</div>
						</div>
						<hr>
						<br><br><br>
						<!-- Upload Image-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="selectbasic">Upload Image</label>
							<div class="col-md-10">
								<input type="file" name="fileToUpload" id="fileToUpload" style="width:50%">
							</div>
						</div>
						<br><br><br>
						<!-- SUBCATEGORY -->
						<div class="form-group">
							<label class="col-md-2 control-label" for="selectbasic">Cooking Level</label>
							<div class="col-md-6">
								<select id="selectbasic" name="level" class="form-control">
									<option disabled selected >Select your cooking level</option>
									<option value="not rated">Not Rated</option>
									<option value="beginner">Beginner</option>
									<option value="intermediate">Intermediate</option>
									<option value="experienced">Experienced</option>
									<option value="professional">Professional</option>
								</select>
							</div>
							<div class="col-md-4"></div>
						</div>
						<br><br>
						<!-- How long have you been cooking-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="selectbasic">Experience</label>
							<div class="col-md-6">
								<select id="selectbasic" name="experience" class="form-control">
									<option disabled selected >Empty</option>
									<option value="1yr">less than 1 year</option>
									<option value="5yr">5 - 10 years</option>
									<option value="10yr">10 - 15 years</option>
									<option value="15yr">15 - 20 years</option>
									<option value="20yr">20 + years</option>
								</select>
							</div>
							<div class="col-md-4"></div>
						</div>
						<br><br>
						<!--Short Summary -->
						<div class="form-group">
							<label class="col-md-12 control-label" for="passwordinput">About Me</label>
							<div class="col-md-12">
								<div class="media-body">                   
									<div class="form-group">
										<textarea class="form-control" placeholder="Write a short description about yourself..." style="height:110px" name="about"></textarea>
									</div>                      
								</div>
							</div>
						</div>
						<input type="submit"><br><br>
					</form>
					</p>
				</div>
			</div>
		</div>
			</div>
			</div>
		
<div class="col-md-4 single-grid1" style="background:rgba(240, 248, 255, 0.86);border-radius: 15px;margin-top: -40px;">
          
		  <h2>Most Searched Recipes</h2>
          <?php
		  	
include "config.php";	 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql_view = "SELECT * FROM cuisines ORDER BY views DESC LIMIT 3;";
$result_view = $conn->query($sql_view);

if ($result_view->num_rows > 0) {
    // output data of each row
    while($row_view = $result_view->fetch_assoc()) {
		?><ul>
	
            <li><?php echo ucwords($row_view["name"]);?></li>
			<form action='single_cuisine.php' method='POST'>
			<button type='submit' name='recipe_name' value='<?php echo $row_view['id'];?>'>More</button>
			</form>
			<br>
          </ul>
		  <?php
//        echo ucwords($row["name"])."	Views : ".$row["views"]."<br>";
		
    }
} else {
    echo "0 results";
}?><br>
		  <h2>Recently Added Recipes</h2>
          <?php
$sql_view = "SELECT * FROM cuisines ORDER BY id DESC LIMIT 3;";
$result_view = $conn->query($sql_view);

if ($result_view->num_rows > 0) {
    // output data of each row
    while($row_view = $result_view->fetch_assoc()) {
		?><ul>
	
            <li><?php echo ucwords($row_view["name"]);?></li>
			<form action='single_cuisine.php' method='POST'>
			<button type='submit' name='recipe_name' value='<?php echo $row_view['id'];?>'>More</button>
			</form>
			<br>
          </ul>
		  <?php
//        echo ucwords($row["name"])."	Views : ".$row["views"]."<br>";
		
    }
} else {
    echo "0 results";
}?>
        </div>
        <div class="clearfix"> </div>
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
			<p><span>SVKM'S Shri Bhagubhai Mafatlal Polytechnic</span> Mumbai, India.</p>
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