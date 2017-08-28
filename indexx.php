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
		<script src="js/form-validate.js"></script>
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

	<!-- header -->
	<div class="container.fluid">
		<header>
			<nav class="navbar navbar-toggleable-md">
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
						<div class="content">i don't even like Star Wars that much/intro</div>
					</div>
					<div class="slide">
						<div class="content">about/interests/purpose</div>
					</div>
					<div class="slide">
						<div class="content">portfolio (finished projects)</div>
					</div>
					<div class="slide">
						<div class="content">portfolio (current projects)</div>
					</div>
					<div class="slide">
						<div class="container">

							<form id="contact" action="php/mailer.php">contact
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
										<input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
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

	</html>



