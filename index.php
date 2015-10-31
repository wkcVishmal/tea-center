<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Thilanka Tea Collecting Center</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
<!-- start of the navigation bar -->

		<nav class="navbar navbar-inverse navbar-static-top" roll="navigation"> <!-- navigation bar -->
			<div class="container-fluid"> <!-- reserve area for css fluid-for moved to left corner -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        
			      	</button>
					<a class="navbar-brand" href="#">Thilanka Tea Collecting Center</a> <!-- for replace with image: <img src="path of the image file"> -->
				</div> 
				<!--</div>-->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
	    			
<!--start of the login navigation -->

<?php

session_start();

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	//$username = mysql_real_escape_string($_POST['username']);
	//$password = mysql_real_escape_string($_POST['password']);

	if($username&&$password){
		$connec = mysql_connect("localhost","root","") or die("Couldn't connect to the database.!");
		mysql_select_db("mywebsite") or die("Coudn't find database.!");

		$query = mysql_query("SELECT * FROM user WHERE username='$username'");

		$numrows = mysql_num_rows($query);

		if($numrows != 0){
			while($row=mysql_fetch_assoc($query)){
				$dbusername=$row['username'];
				$dbpassword = $row['password'];
			}

			if($username==$dbusername&&md5($password)==$dbpassword){

				echo "You are logged in.!";
				@$_SESSION['username'] =$username; 
			}else{
				echo "Your password is incorrect.";
			}
		}else{
			die("That user doesn't exsits.!");
		}

	}else{
		die("Please enter username and password"); 
	}

}else{

	$form = <<<EOT

	<ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								
								 <form class="form" role="form" method="post" action="mainwindow.html">
										<div class="form-group">											 
											 <input type="text" class="form-control"  name="username" placeholder="Username" required>
										</div>
										<div class="form-group">											 
											 <input type="password" class="form-control" name="password" placeholder="Password" required>

                                             <div class="help-block text-right"><a href="#">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block" name="submit">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="register.php"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
	</ul>

EOT;

echo $form;
}

?>

					
			</div>	
		</nav>
<!-- End of the navigation bar -->

<!-- Start of the Forms -->
<!-- login form eke comtent eka



-->

<!-- End of the Forms -->

<!-- Header Carousel -->
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/a.jpg" alt="Chania" class="img-responsive">
      </div>

      <div class="item">
        <img src="images/b.jpg" alt="Chania" class="img-responsive">
      </div>
    
      <div class="item">
        <img src="images/c.jpg" alt="Flower" class="img-responsive">
      </div>

      <div class="item">
        <img src="images/d.jpg" alt="Flower" class="img-responsive">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- end of Header Carousel -->

<!-- start of the footer -->
<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h4>Contact Address</h4>
				<address>
					Thilanka Tea Collecting Center,<br> Warakapalahena,<br> Nakiyadeniya,<br> Galle.
					

				</address>

			</div>
			
		</div>
		<div class="bottom-footer">
			<div class="col-md-5">@ Copyright phpGroupProject 2015.</div>
			<div class="col-md-7">
				<ul class="footer-nav">
					<li><a href="#">Index</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Link</a></li>
				</ul>	
			</div>
		</div>
	</div>
	

</footer>

<!-- End of the footer -->

		<script type="text/javascript" src = "js/jquery.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html> 