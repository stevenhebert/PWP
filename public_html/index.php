<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
				integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="js/form-validate.js"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="js/recaptcha.js"></script>


		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playball|Roboto:400,400i,700,700i" rel="stylesheet"/>
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet">

		<!-- My JS -->
		<script type="text/javascript" src="js/onepagescroll.js"></script>

		<!-- My CSS -->
		<link href="css/onepage-scroll.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">

		<!-- HTML5 shim and Respond . js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond . js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<title>steven hebert</title>
	</head>

	<body>
		<div class="wrapper">
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

						<div class="card-columns">
							<div class="card">
								<img class="card-img-top img-fluid" src="images/card1.png" alt="Albuquerque Town Hall">
								<div class="card-block">
									<p class="card-text">My Deep Dive capstone project. Created to help engage residents in local government. Built with three of my cohort members in ten short weeks on a LAMP-stack platform. Features <a class="ABQ Open" href="https://www.cabq.gov/abq-data/">ABQ Open</a> GIS data to help educate and inform city residents. The prototype was virtual Town Hall at the city council district level. However, we designed made the platform flexible enough to such that it can scale to model a Town Hall at any level of government.</p>
								</div>
							</div>

							<div class="card">
								<img class="card-img-top img-fluid" src="images/card2.png" alt="Synthetic Control Model">
								<div class="card-block">
									<p class="card-text">This is a plot from a research paper I completed in graduate school, it uses a modern regression analysis technique called the Synthetic Control Model. In contrast to traditional regression analysis, SCM allows uses co-founding factors to explain account for changes in the dependent and independent variables, where as these might be taken as unobserved or omitted variables in a traditional analysis.</p>
								</div>
							</div>

							<div class="card">
								<img class="card-img img-fluid" src="..." alt="Card image">
							</div>

							<div class="card p-3 text-justify">
								<blockquote class="card-blockquote">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<footer>
										<small class="text-muted">
											Someone famous in <cite title="Source Title">Source Title</cite>
										</small>
									</footer>
								</blockquote>
							</div>

							<div class="card">
								<div class="card-block">
									<h4 class="card-title">Card title</h4>
									<p class="card-text">This is a wider card with supporting text below as a natural lead-in to
										additional content. This card has even longer content than the first to show that equal
										height action.</p>
									<p class="card-text">
										<small class="text-muted">Last updated 3 mins ago</small>
									</p>
								</div>
							</div>
						</div>

					</div>
				</section>

				<section id="contact" class="page3">
					<div class="container">
						<form id="contact-form" action="php/mailer.php" method="POST">

							<div class="form-group row">
								<label for="name" class="col-xs-1 col-form-label"></label>
								<div class="input-group col-sm">
									<div class="input-group-addon">
										<i class="fa fa-user fa-fw" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="name">
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-xs-1 col-form-label"></label>
								<div class="input-group col-sm">
									<div class="input-group-addon">
										<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="email">
								</div>
							</div>

							<div class="form-group row">
								<label for="subject" class="col-xs-1 col-form-label"></label>
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
									<textarea class="form-control " rows="4" id="message" name="message" placeholder="message"></textarea>
								</div>

								<div class="btn-group-vertical col-sm-1" role="group">
									<button class="btn g-recaptcha" data-sitekey="6LfiyS0UAAAAAINUJI0YG4Z87VVqs_QdbaRg7EnS" data-callback='onSubmit'>Submit</button>
									<button class="btn" type="reset"> Reset</button>
								</div>
							</div>

							<div class="row">
								<div class="col-sm">
									<div id="output-area"></div>
								</div>
							</div>
						</form>


					</div>

					<footer>
						<a href="https://github.com/stevenhebert">
							<i class="fa fa-github fa-fw fa-2x" aria-hidden="true"></i>
						</a> |
						<a href="https://linkedin.com/in/hebertsteven">
							<i class="fa fa-linkedin fa-fw fa-2x" aria-hidden="true"></i>
						</a> |
						<a href="https://bootcamp-coders.cnm.edu/~shebert2/pwp/resume.php">
							<i class="fa fa-file-text fa-fw fa-2x" aria-hidden="true"></i>
						</a>
					</footer>
				</section>

			</div>
		</div>

		<script>
			onePageScroll(".main", {
				sectionContainer: "section",
				loop: false,
				responsiveFallback: false
			});
		</script>

	</body>
</html>

acsii text cow
