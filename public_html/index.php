<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>


		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
				integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<!-- Tether -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
				  integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
				  crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
				  integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
				  crossorigin="anonymous"></script>


		<!-- jQuery Form, Additional Methods, Validate, Google reCAPTCHA -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="js/form-validate.js"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>


		<!-- HTML5 shim and Respond . js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond . js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


		<!-- My JS -->
		<script type="text/javascript" src="js/onepagescroll.js"></script>
		<!-- My CSS -->
		<link href="css/style.css" rel="stylesheet" type="text/css">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playball|Roboto:400,400i,700,700i" rel="stylesheet"/>
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet">


		<title>steven hebert</title>
	</head>

	<body>
		<div class="main">

			<section id="home" class="page1">
				<div class="page_container">
					<div class="jumbotron">
						<h1 class="display-3">Steven Hebert</h1>
						<p class="lead">Economist, Software Developer</p>
						<p>
					</div>
				</div>
			</section>

			<section id="portfolio" class="page2">

				<div class="container">
					<h1>portfolio</h1>
					<div class="card-deck">
						<div class="card">
							<img class="card-img-top img-fluid" src="docs/card1.png" alt="Albuquerque Town Hall">
							<div class="card-block">
								<p class="card-text">
									<small class="text-muted">
										<a href="https://abqtownhall.com" target="_blank">ABQ
											Town Hall</a>
									</small>
									a web application I created with my Deep Dive capstone team. In addition to an open forum, it
									utilizes ABQ Open GIS data to help inform and engage Albuquerque residents. Normally a
									functional prototype but we are still actively developing this application; there may be
									bugs.
								</p>
							</div>
						</div>

						<div class="card">
							<img class="card-img-top img-fluid" src="docs/card2.png" alt="Synthetic Control Model">
							<div class="card-block">
								<p class="card-text">This is an econometric exercise researching recidivism rates after a
									major policy change in Portugal. I used a synthetic control method to estimate a control
									consisting of 19 similar countries.
								</p>
								<p>
									<small class="text-muted">
										<a href="docs/portgualSynth.do"> .do file</a>
									</small>
									,
									<small class="text-muted">
										<a href="docs/Port.dta"> data file</a>
									</small>
								</p>
							</div>
						</div>
					</div>

					<div class="card-deck">
						<div class="card">
							<img class="card-img-top img-fluid" src="docs/card3.png" alt="notpwp">
							<div class="card-block">
								<p class="card-text">A frontend exercise that achieves a parallax effect using effect using only
									CSS.
									This is a testing-sandbox, not a finished product.
								</p>
								<p>
									<small class="text-muted">
										<a href="https://stevenhebert.net/public_html/indexx.php" target="_blank">on website not
											that far, faraway...</a>
									</small>
								</p>
							</div>
						</div>

						<div class="card">
							<img class="card-img-top img-fluid" src="docs/card4.png" alt="">
							<div class="card-block"> This is a species-habitat optimal control model of the Annapurna
								ecosystem. It finds a dynamically optimal level of ecotourism constrained by a two-trophic level
								ecosystem for each point in continuous time.
								<p class="card-text"></p>
							</div>
						</div>
					</div>

				</div>

			</section>


			<section id="contact" class="page3">
				<div class="container">
					<h1>contact</h1>

					<form id="contact-form" action="php/mailer.php" method="POST">

						<div class="form-group row">
							<label for="name" class="col-form-label"></label>
							<div class="input-group col-sm">
								<div class="input-group-addon">
									<i class="fa fa-user fa-fw" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="name">
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-form-label"></label>
							<div class="input-group col-sm">
								<div class="input-group-addon">
									<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="email">
							</div>
						</div>

						<div class="form-group row">
							<label for="subject" class="col-form-label"></label>
							<div class="input-group col-sm">
								<div class="input-group-addon">
									<i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
							</div>
						</div>

						<div class="form-group row">
							<div class="input-group col-sm-11">
								<div class="input-group-addon">
									<i class="fa fa-comment fa-fw" aria-hidden="true"></i>
								</div>
								<textarea class="form-control " rows="4" id="message" name="message"
											 placeholder="message"></textarea>
							</div>

							<div class="col-sm-1">
								<button class="btn btn-primary btn-block" type="submit"> Send</button>
								<button class="btn btn-secondary btn-block" type="reset"> Reset</button>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 text-center">
								<div id="output-area"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 text-center">
								<div class="g-recaptcha" data-sitekey="6LfiyS0UAAAAAINUJI0YG4Z87VVqs_QdbaRg7EnS"></div>
							</div>
						</div>
					</form>

				</div>

				<footer>
					<a href="https://github.com/stevenhebert" target="_blank">
						<i class="fa fa-github fa-fw fa-2x" aria-hidden="true"></i>
					</a> |
					<a href="https://www.linkedin.com/in/hebertsteven/" target="_blank">
						<i class="fa fa-linkedin fa-fw fa-2x" aria-hidden="true"></i>
					</a> |
					<a href="docs/resumeStevenHebert.pdf">
						<i class="fa fa-file-text fa-fw fa-2x" aria-hidden="true"></i>
					</a>
				</footer>
			</section>

		</div>

		<script>
			onePageScroll(".main", {
				sectionContainer: "section",
				loop: false,
				responsiveFallback: 600
			});
		</script>

	</body>
</html>