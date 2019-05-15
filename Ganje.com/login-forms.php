<?php
include 'resources.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  
  <title></title>
</head>

<body>
	<section>
		<div class="logo-place">
			<div class="opacer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<a href="index.php"><img class="" src="img/temp_logo.png"></a>
						</div>
						<div class="col-md-6">
							<p class="text-center intro">Welcome to <a href="ganje.com">maganji.com</a>,here to create,innovate,lend and support you financially.No security,just your payslip.Explore..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-section">
			<nav class="navbar navbar-expand-sm bg-dark">
				<div class="container">
					<ul class="navbar-nav main_menu">
						<li class="nav-item">
						   <a class="nav-link" href="index.php"><span>Finances</span></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#"><span>About Us</span></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#"><span>Other Services<i class="fa fa-angle-down ml-2"></i></span></a>
							<div class="sub-menus">
								<div class="overlay">
									<div class="row">
										<div class="col-md-4">
											<div class="section" id="section1">
												<a href="#">
													<p class="h3 text-center mini-headings">Cabs</p>
													<div class="d-flex flex-row">
														<div class="p-4 align-self-start">
														  <i class="fa fa-check"></i>
														</div>
														<div class="pt-4 align-self-end font-weight-light">
														  Mackenzie enterprises offers more for less, we have a flexible transport wing that offers both coprate and individual .
														The company has a variety of vehicles to soot the occasion.</br> 
														<button class="btn read-more ">Read More</button>
														</div>
													</div>
												</a>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="section" id="section2">
												<a href="#">
													<p class="h3 text-center mini-headings">Cleaning</p>
													<div class="d-flex flex-row">
														<div class="p-4 align-self-start">
														  <i class="fa fa-check"></i>
														</div>
														<div class="pt-4 align-self-end font-weight-light">
														  Mackenzie enterprises offers more for less, we have a flexible transport wing that offers both coprate and individual .
														The company has a variety of vehicles to soot the occasion.</br>
														<button class="btn read-more ">Read More</button>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="section" id="section3">
												<a href="#">
													<p class="h3 text-center mini-headings">Marketing</p>
													<div class="d-flex flex-row">
														<div class="p-4 align-self-start">
														  <i class="fa fa-check"></i>
														</div>
														<div class="pt-4 align-self-end font-weight-light">
														  Mackenzie enterprises offers more for less, we have a flexible transport wing that offers both coprate and individual .
														The company has a variety of vehicles to soot the occasion.</br>
														<button class="btn read-more ">Read More</button>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#"><span>FAQs</span></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="#"><span>Forum</span></a>
						</li>
						<?php include 'login.php';?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="forms-holder">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="card bg-primary text-center card-form my-5">
							<div class="card-body">
							  <p>Do you have an account?</p>
							  <form method="POST" action="<?php echo $current_page;?>" id="login_form">
								<div class="form-group">
								  <input type="text" class="form-control form-control-md" placeholder="Username" name="name" id="name">
								</div>
								<div class="form-group">
								  <input type="password" name="password" class="form-control form-control-md" placeholder="Password" id="password">
								</div>
								<input type="submit" value="Log In" class="btn btn-outline-dark">
								
								</form>
							</div>
							<script>
							
								$(function(){
									
									
									
									function checkForUsername(){
										if($("#name").val()==''){
											empty_username=true;
										}else{
											empty_username=false;
										}
									}
									
									function checkForPass(){
										if($("#password").val()==''){
											empty_pass=true;
										}else{
											empty_pass=false;
										}
									}
									
									$('#login_form').submit($function(){
										var empty_username=false;
										var empty_pass=false;
										
										checkForUsername();
										checkForPass();
										
										if(checkForUsername() || checkForPass()){
											return false;
										}else{
											return true;
										}
									});
									
								});
							</script>
						  </div>
					</div>
					<div class="col-lg-2">
					
					</div>
					<div class="col-lg-6">
						<div class="card bg-primary text-center card-form my-5">
							<div class="card-body">
							  <h3>Sign Up Today</h3>
							  <p>Please fill out this form to register</p>
							  <form action="index.php" method="POST">
							  <div class="form-row">
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" class="form-control form-control-md" placeholder="First Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									  <input type="text" class="form-control form-control-md" placeholder="Second Name">
									</div>
								</div>
							  </div>
							  <div class="form-row">
								<div class="col-lg-6">
									
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									  <input type="email" class="form-control form-control-md" placeholder="Email">
									</div>
								</div>
							  </div>
							  <div class="form-row">
								<div class="col-lg-6">
									<div class="form-group">
									  <input type="password" class="form-control form-control-md" placeholder="Password">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
									  <input type="password" class="form-control form-control-md" placeholder="Confirm Password">
									</div>
								</div>
							  </div>
								<div class="form-group">
								  <input type="tel" class="form-control form-control-lg" placeholder="Mobile">
								</div>
								
								
								<input type="submit" value="Register" class="btn btn-outline-dark btn-block">
							  </form>
							</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
		<footer id="main-footer" class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 text-center">
						<ul>
							<li><a href="#">Find us on facebook</a></li>
							<li><a href="#">Find us on tweeter</a></li>
							<li><a href="#">Find us on instagram</a></li>
							<li><a href="#">Find us on snapchat</a></li>
						</ul>
					</div>
					<div class="col-lg-4 text-center">
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Visit Our Offices</a></li>
							<li><a href="#">Talk to An Agent</a></li>
							<li><a href="#">Get to Know Us</a></li>
						</ul>
					</div>
					<div class="col-lg-4 text-center">
						<ul>
							<li><a href="#">Cab Services</a></li>
							<li><a href="#">Cleaning</a></li>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Marketing</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						 <p>Copyright &copy; 2018</p>
					</div>
				</div>
			</div>
		</footer>
	</section>
 

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>