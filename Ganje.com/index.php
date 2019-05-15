
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
						<?php 
						if(isset($_POST['name']) && isset($_POST['password'])){
							if(!empty($_POST['name']) && !empty($_POST['password'])){
								echo '<li class="nav-item">';
								echo '<a class="nav-link" href="#"><span>Hello '.$_POST['name'].'</span></a>';
								echo '</li>';
							}else{
								include 'login.php';
							}
							
						}else{
							
						}
						
						?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="">
			<div class="set-bg">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
					  </ol>
					  <div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						  <img class="d-block img-fluid" src="img/cal.jpeg" alt="First slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5 font-weight-light">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <img class="d-block img-fluid" src="img/bulb.jpeg" alt="Second slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <img class="d-block img-fluid" src="img/card.jpeg" alt="Fourth slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <img class="d-block img-fluid" src="img/greet.jpeg" alt="Five slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <img class="d-block img-fluid" src="img/less.jpg" alt="Sixth slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <img class="d-block img-fluid" src="img/save.jpg" alt="Seventh slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <img class="d-block img-fluid" src="img/sign2.jpeg" alt="Eigth slide">
						  <div class="carousel-caption d-none d-md-block">
							<div class="sliding-dets">
								<div class="row">
									<div class="col-lg-12">
										<div class="d-flex flex-row">
											<div class="loan-header align-self-start p-5">
												<p>Accessing Our Loans</p>
											</div>
											<div class="align-self-end loan-dets p-5">
												<p class="display-5">Being at short term loan farm we work with loan classes intade of the usual intrest rates.... 
												The values range from 100 to maximum limit,Our Loans run from 5th to 5th</p>
												<button class="btn read-more ">Read More</button>
											</div>
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
					  </div>
					  
				</div>
			</div>
		</div>
		<div class="about-loans-section" id="about-loans-section">
			<div class="dark-cloud-over-mesopotamia">
				<div class="about-loans-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="d-flex flex-row">
									<div class="p-3 align-self-start">
									  <i class="fa fa-check"></i>
									</div>
									<div class="p-3 align-self-end">
									  At maganji.com,we give short term loans of upto ksh100,000.
									  They run strictly from 5th to 5th of every month.
									</div>
								</div>
							  <div class="d-flex flex-row">
								<div class="p-3 align-self-start">
								  <i class="fa fa-check"></i>
								</div>
								<div class="p-3 align-self-end">
								  We charge an interest of 40%,means that for a thousand bob,you pay with 400 bob on top.
								</div>
							  </div>
							  <div class="d-flex flex-row">
								<div class="p-3 align-self-start">
								  <i class="fa fa-check"></i>
								</div>
								<div class="p-3 align-self-end">
								  All we need is a scanned copy of id,paycheck and a few details for formality.
								</div>
							  </div>
							  <div class="d-flex flex-row">
								<div class="p-3 align-self-start">
								  <i class="fa fa-check"></i>
								</div>
								<div class="p-3 align-self-end">
								  We offer a discounted interest to our members,just sign up or login.
								</div>
							  </div>
							  <div class="d-flex flex-row">
								<div class="p-3 align-self-start">
								  <i class="fa fa-check"></i>
								</div>
								<div class="p-3 align-self-end">
								Processing of loans takes 2-10 hours after your application.
								</div>
							  </div>
							</div>
							<div class="col-lg-6 text-center pt-5">
								<h1 class="display-4">Mbona uongoje hadi end month,kuja <strong>tukusort..</strong></h1>
								<a href="#" class="btn btn-primary btn-lg-12 mt-2">APPLY NOW!</a>
								<p class="tester">dont show until i say</p>
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