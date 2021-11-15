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
	#gallery {
  padding: 0 4rem 0 4rem;
}
h3.tittle {
    color: #eee;
    font-size: 5em;
    font-weight: 600;
    text-transform: uppercase;
}
.tittle-head h4 {
    color: #a6192e;
    font-size: 3em;
    font-weight: 600;
    position: absolute;
    text-transform: uppercase;
    top: 40%;
    right: 1%;
}
#portfolio p {
  line-height: 1.8em;
  margin: 25px 0 0 0;
  font-size:1.1
  color: #ffffff;
  font-weight: 300;
}
.gallery-section h3{
   margin: 0;
  color: #ffffff;
  font-size: 36px;
  font-weight: 500;
  letter-spacing: 18px;
}
.gallery-grid {
  padding: 0;
}
.gallery1 {
position:relative;
}
.gallery1 .textbox {
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
	-webkit-transform: scale(0);
	transform: scale(0);
   background-color:rgba(42, 25, 14, 0.68);
}
.gallery1:hover .textbox {
	-webkit-transform: scale(1);
	transform: scale(1);
}
.gallery-grid img{
		<!--width:100%;-->
		width:347px;
		height:347px;
}

.textbox {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
text-align:center;
}
.textbox h4 {
     font-size: 3.5em;
  color: #fff;
  margin-top:2em;
}
.textbox p {
  font-size: 15px !important;
  color: #fff;
  font-weight:500 !important;
  margin:6px 0 0 0!important;
}
.gallery-grids {
  margin-top: 50px;
}
/*--//gallery--*/




.ourhistory {
	padding: 3em 0px 0px 0px;
}
.ourhistory h3 {
	font-size: 2em;
	font-weight: 600;
	color: #CA723D;
	text-align: center;
	margin: 0px 0px 16px 0px;
}
.ourhistory p {
	font-size: 1em;
	font-weight: 400;
	color: #000;
	line-height: 1.8em;
	margin: 0px 0px 10px 0px;
}

h2{
    font-size: 2em;
    font-weight: 600;
    color: #CA723D;
    text-align: center;
text-transform: capitalize;   
   margin: 0px 0px 16px 0px;
}

/*
Code snippet by maridlcrmn for Bootsnipp.com
Follow me on Twitter @maridlcrmn
Image credits: unsplash.com, uifaces.com/authorized
Image placeholders: placemi.com
*/


#t-cards {
    padding-top: 80px;
    padding-bottom: 80px;
    background-color: #345;    
}

/********************************/
/*          Panel cards         */
/********************************/
.panel.panel-card {
    position: relative;
    border: none;
    overflow: hidden;
}
.panel.panel-card .panel-heading {
    position: relative;
    z-index: 2;
    height: 210px;
    border-bottom-color: #fff;
    overflow: hidden;
    
    -webkit-transition: height 600ms ease-in-out;
            transition: height 600ms ease-in-out;
}
.panel.panel-card .panel-heading img {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 1;
    width: 120%;
    
    -webkit-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
}
.panel.panel-card .panel-heading button {
    position: absolute;
    top: 10px;
    right: 15px;
    z-index: 3;
	width:75px;
}
.panel.panel-card .panel-figure {
    position: absolute;
    top: auto;
    left: 50%;
    z-index: 3;
    width: 70px;
    height: 70px;
    background-color: #fff;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 3px #fff;
            box-shadow: 0 0 0 3px #fff;
    
    -webkit-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
}

.panel.panel-card .panel-figure img {
    opacity: 1;
    
    -webkit-transition: opacity 400ms ease-in-out;
            transition: opacity 400ms ease-in-out;
}

.panel.panel-card .panel-figure img:hover {
    opacity: .75;
}

.panel.panel-card .panel-body {
    padding-top: 40px;
    padding-bottom: 20px;

    -webkit-transition: padding 400ms ease-in-out;
            transition: padding 400ms ease-in-out;
} 

.panel.panel-card .panel-thumbnails {
    padding: 0 15px 20px;
}
.panel-thumbnails .thumbnail {
    width: 60px;
    max-width: 100%;
    margin: 0 auto;
    background-color: #fff;
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
	
<!--start-gallery-->
<br><br>
<div class="gallery" id="gallery">
	<div class="container-fluid" style="background-color: rgba(240, 248, 255, 0.86);">
	   <div class="tittle-head">
		</div>
		<div class="ourhistory">
				<h3>About Starters</h3>
				<p>A pre-ferment (also known as bread starter) is a fermentation starter used in bread making, and is referred to as an indirect method. 
				It may also be called mother dough.
				A pre-ferment and a longer fermentation in the bread-making process have several benefits:
				there is more time for yeast, enzyme and, if sourdough, bacterial actions on the starch and proteins in the dough;
				this in turn improves the keeping time of the baked bread, and it creates greater complexities of flavor.
				Though pre-ferments have declined in popularity as direct additions of yeast in bread recipes have streamlined
				the process on a commercial level, pre-ferments of various forms are widely used in artisanal bread recipes and formulas.
				</p>
			</div><br>
			<h2>Starters Recipes</h2>
				<!--start-->				
<!--PHP START-->						
<?php
	$flag=0;
	$j=0;
	$value=array();
	
	include "config.php";	 	 
	if(!$conn)
	{
		echo "Error : ".mysql_error($conn);      //display error if connetion is not set
	}
	
	//Part 1
	else
	{
		$sql = "SELECT * FROM cuisines WHERE sub_category='starters'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
			// output data of each row
			$i=1;
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
			<div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <img src="<?php echo $target;?>" />
                        <form action="single_cuisine.php" method="POST">
                        <button type="submit" class="btn btn-primary btn-sm" role="button" name="recipe_name" value="<?php echo $row["id"];?>">See More</button>
						</form>
                    </div>
                    <div class="panel-figure">
                        <img class="img-responsive img-circle" src="images/login.png">
                    </div>
                    <div class="panel-body text-center">
                        <h4 class="panel-header"><?php echo ucwords($row["name"])."<br>";?></h4>
                        <small>A short description goes here.</small>
                    </div>
                    <div class="panel-thumbnails">
                        <div class="row">
                            <div class="col-xs-3">
                                <?php
                                      echo "<center>Serves <br> <b>".$row["serves"]."</b></center><br>";
                                ?>
                            </div>
                            <div class="col-xs-6">
                                <?php
									$time=$row["cook_time"];
                                    $hours = floor($time/60);
									$minutes = $time%60;
									if ($hours==0 && $minutes==0) 
									{
										header("Location: 404.php");
									}
									if ($hours==0 && $minutes!=0) 
									{
									
										echo "<center>Time <br><b> ".$minutes." mins </b></center><br>";
									}
									if ($hours!=0 && $minutes==0) 
									{
										echo "<center>Time <br><b> ".$hours." hr </b></center><br>";
									}
									if ($hours!=0 && $minutes!=0) 
									{
										echo "<center>Time <br><b> ".$hours." hr ".$minutes." min </b></center><br>";
									}
                                ?>
                            </div>
                            <div class="col-xs-3">
                                
                                    <?php
										echo "<center>Views <br> <b>".$row["views"]."</b></center><br>";
									?>
                                
								
                            </div>
                        </div>
                    </div>
                </div>   
    		</div>
	<?php
			}
			?>
			<div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <img src="uploads/alt.jpg" />
                        <form action="submit_recipe.php" method="POST">
                        <button type="submit" class="btn btn-primary btn-sm" role="button" name="recipe_name" value="<?php echo $row["id"];?>">Add</button>
						</form>
                    </div>
                    <div class="panel-figure">
                        <img class="img-responsive img-circle" src="images/login.png">
                    </div>
                    <div class="panel-body text-center">
                        <h4 class="panel-header">Submit your Recipe</h4>
                        <small>A short description goes here.</small>
                    </div>
                    <div class="panel-thumbnails">
                        <div class="row">
                            <div class="col-xs-4">
                                
                            </div>
                            <div class="col-xs-4">
                                
                            </div>
                            <div class="col-xs-4">
                                
                                    
								
                            </div>
                        </div>
                    </div>
                </div>   
    		</div>
			
			<?php
		}
		else
		{
			?>
			
						<div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <img src="<?php echo $target;?>" />
                        <form action="submit_recipe.php" method="POST">
                        <button type="submit" class="btn btn-primary btn-sm" role="button" name="recipe_name" value="<?php echo $row["id"];?>">Add</button>
						</form>
                    </div>
                    <div class="panel-figure">
                        <img class="img-responsive img-circle" src="images/login.png">
                    </div>
                    <div class="panel-body text-center">
                        <h4 class="panel-header">Submit your Recipe</h4>
                        <small>A short description goes here.</small>
                    </div>
                    <div class="panel-thumbnails">
                        <div class="row">
                            <div class="col-xs-4">
                                
                            </div>
                            <div class="col-xs-4">
                                
                            </div>
                            <div class="col-xs-4">								
                            </div>
                        </div>
                    </div>
                </div>   
    		</div>
			
			<?php
		}
		?>
		</form>
		<?php
		$conn->close();
	}
?>
<!--After Final Display Adjust Height Of "ADD A RECIIPE" Card-->
<div class="clearfix"> </div>

		</div>	
	</div>
		<link rel="stylesheet" href="css/swipebox.css">
				
	<!--//gallery-->
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