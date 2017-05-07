<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- set base for relative links - to enable pretty URLs -->
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link href="css/style.css" rel="stylesheet" type="text/css"/>

		<!----Font Awesome-------->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>
		<!----satisfy font style--->
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!------Title of Website-------->
		<title>DianePeshlakai.com</title>

	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<!--Header and Navigation bar-->
			<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
				<div class="container topnav">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand topnav" href="#">Diane Peshlakai</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#projects">Projects</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>

			<!--Beginning row-->
			<!-- Header -->
			<header>
				<a name="about">
					<div class="intro-header">
						<div class="about-container">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="intro-message">
											<hr class="intro-divider">
											<ul class="list-inline intro-social-buttons">
												<li>
													<a href="https://twitter.com/dpeshlakai4828" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
												</li>
												<li>
													<a href="https://github.com/d-peshlakai" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
												</li>
												<li>
													<a href="https://www.linkedin.com/in/diane-peshlakai-47b27b105" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.container -->
					<!-- /.intro-header -->
				</a>
			</header>
			<!--About Me section-->
			<section class="about-block" id="about">
				<div class="center">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2>About Me</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4">
						<p>Last summer I completed the Deep Dive Coding Bootcamp program where I studied front and back-end web development.
							I went from a pharmacy technician to web developer to express my creativity. The bootcamp prepared me to create
							creative mobile-friendly and secured websites. I used HTML/CSS, PHP, Javascript, Bootstrap, AngularJS, JQuery and
							mySQL. It allows me to be creative and enjoy what I do. I work well with a team and I love learning! Have a question?
							Please feel free to fill out the contact form and send me a message.</p>
					</div>
			</section>
			<!--Tools--->
			<section id="services">
				<div class="center">
					<div class="row">
						<div class="col-lg-12">

						</div>
					</div>
				</div>
			</section>

					<!--Contact Form---->
			<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
							<form class="form-horizontal" role="form" method="post" action="index.php">
								<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="4" name="message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<! Will be used to display an alert to the user>
								</div>
							</div>
						</form>
					</div>
					</div>
				</div>

			<!-- Footer -->
			<footer class="footer navbar fixed-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<h4>Location</h4>
							<p>Albuquerque, NM</p>
							<ul class="list-unstyled">
								<li><i class="fa fa-envelope-o fa-fw"></i> <a
										href="mailto:name@example.com">dpeshlakai90@gmail.com</a>
								</li>
							</ul>
							<br>
							<hr class="small">
							<p class="text-muted">Copyright &copy; Diane Peshlakai 2016</p>
						</div>
					</div>
				</div>
				<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
			</footer>

	</body>
</html>