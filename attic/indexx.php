<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- from BS4 docs -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
				integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
				  integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
				  crossorigin="anonymous"></script>
		<!-- Tether -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
				  integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
				  crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
				  integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
				  crossorigin="anonymous"></script>


		<!-- from BCC form -->
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<!-- Your JavaScript Form Validator -->
		<script src="../public_html/js/form-validate.js"></script>
		<!-- Google reCAPTCHA -->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>


		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playball|Roboto:400,400i,700,700i" rel="stylesheet"/>

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet">

		<!-- custom stylesheet -->
		<link rel="stylesheet" href="css/styless.css"/>


		<!-- HTML5 shim and Respond . js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond . js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<title>steven hebert</title>

	</head>
	<body class="site">


		<!-- header -->
		<div class="container.fluid">
			<header>
				<nav class="navbar navbar-toggleable-md navbar-inverse">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
							  data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
							  aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<span class="navbar-brand">steven hebert</span>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active pull-xs-right">
								<a class="nav-link" href="#about">about<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item pull-xs-right">
								<a class="nav-link" href="#portfolio">portfolio</a>
							</li>
							<li class="nav-item pull-xs-right">
								<a class="nav-link" href="#contact">contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
		</div>

		<!-- main -->
		<div class="wrapper">
			<div class="slides">

				<div class="stars">
					<div class="twinkling">

						<div class="slide">
							<div class="container">
								<div class="content">

									<h1 id="welcome">
										<i class="ti-placeholder"
											style="display:inline-block; width:0; line-height:0; overflow:hidden;">.</i><span
											style="display:inline;position:relative;font:inherit;color:inherit;"
											class="ti-container"></span>
									</h1>

								</div>
							</div>
						</div>

						<div class="slide">
							<div class="container">
								<div class="content">about/interests/purpose</div>
							</div>
						</div>

						<div class="slide">
							<div class="content">

								<div class="card">
									<img src="images/ABQTH.png" alt="ABQ Town Hall" width="200px"/>
									<p> My Deep Dive capstone project. Created to help engage residents in
										local government. Built with three of my cohort members in ten short weeks on a "LAMP"
										stack platform. Features abqopen GIS data to help educate and inform city residents.
										This prototype is modeled around city council districts, however the platform was
										designed to be scalabler so that it also may model a town hall in different levels of
										government.
									</p>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="content">

								<div class="card">
									<img src="images/ABQTH.png" alt="ABQ Town Hall" width="200px"/>
									<p> My Deep Dive capstone project. Created to help engage residents in
										local government. Built with three of my cohort members in ten short weeks on a "LAMP"
										stack platform. Features abqopen GIS data to help educate and inform city residents.
										This prototype is modeled around city council districts, however the platform was
										designed to be scalabler so that it also may model a town hall in different levels of
										government.
									</p>
								</div>
							</div>
						</div>

						<div class="slide">
							<div class="container">

								<form id="contact" action="../public_html/php/mailer.php">contact
									<div class="form-group row">
										<div class="input-group col-sm-11">
											<div class="input-group-addon">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="name">
										</div>
									</div>
									<div class="form-group row">
										<div class="input-group col-sm-11">
											<div class="input-group-addon">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="email">
										</div>
									</div>
									<div class="form-group row">
										<div class="input-group col-sm-11">
											<div class="input-group-addon">
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject"
													 placeholder="subject">
										</div>
									</div>
									<div class="form-group row">
										<div class="input-group col-sm-11">
											<div class="input-group-addon">
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="4" id="message" name="message"
														 placeholder="message"></textarea>
										</div>
										<div class="btn-group col-sm-11" role="group">
											<button class="btn btn-primary btn-success g-recaptcha btn-md"
													  data-sitekey="6LfiyS0UAAAAAINUJI0YG4Z87VVqs_QdbaRg7EnS"
													  data-callback='onSubmit'
													  type="submit"> send
											</button>
											<button class="btn btn-warning btn-secondary btn-md"
													  type="reset">reset
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<!-- footer -->
		<div class="container.fluid">
			<footer class="footer">
				<div class="footer-content">
					<a href="https://github.com/stevenhebert" target="_blank">
						<i class="fa fa-github fa-fw fa-2x" aria-hidden="true"></i>
					</a>
					<a href="https://linkedin.com/in/hebertsteven" target="_blank">
						<i class="fa fa-linkedin fa-fw fa-2x" aria-hidden="true"></i>
					</a>
				</div>
			</footer>
		</div>

	</body>
</html>



