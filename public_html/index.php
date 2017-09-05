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


		<!-- jQuery Form, Additional Methods, Validate, Google reCAPTCHA -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script src="js/form-validate.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>

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

		<title>Steven Hebert</title>

	</head>
		<body>

			<div class="wrapper">
				<div class="main">

					<section class="page1">
						<div class="page_container">
							<div id="about" class="jumbotron">
									<h1>steven hebert</h1>
									<p class="lead">Economist, Software Developer</p>
							</div>
						</div>
					</section>



					<section class="page2">
						<div class="container">

							<h1>portfolio</h1>

								<div id="portfolio" class="row text-justify">
									<div class="card col-sm-6">
										<img class="mx-auto" src="images/ABQTH.png" alt="Albuquerque Town Hall"
											  href="https://bootcamp-coders.cnm.edu/shebert2/townhall"/>
										<p>
											class="card-text">My Deep Dive capstone project. Created to help engage residents in
											local government.
											Built with three of my cohort members in ten short weeks on a LAMP-stack platform. Features <a
												class="ABQ Open" href="https://www.cabq.gov/abq-data/">ABQ Open</a> GIS data to help educate and
											inform city residents. The prototype was virtual Town Hall at the city council district level.
											However,
											we designed made the platform flexible enough to such that it can scale to model a Town Hall at any
											level
											of government.
										</p>
									</div>
									<div class="card col-sm-6">
										<img class="mx-auto" src="https://placeimg.com/640/480/any/sepia" alt="randy"/>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in
											to
											additional content. This content is a little bit longer.</p>
									</div>
								</div>

								<div class="row text-justify">
									<div class="card col-sm-6">
										<img class="mx-auto" src="https://placeimg.com/640/480/any/sepia" alt="randy"/>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in
											to
											additional content. This content is a little bit longer.</p>
									</div>
									<div class="card col-sm-6">
										<img class="mx-auto" src="images/termPaper509.png" alt="Synthetic Control Model"/>
										<p class="card-text">
											<a href="#">This</a> is a plot from a research paper I completed in graduate school, it uses a
											modern
											regression
											analysis technique called the Synthetic Control Model. In contrast to traditional regression
											analysis,
											SCM allows uses co-founding factors to explain account for changes in the dependent and independent
											variables, where as these might be taken as unobserved or omitted variables in a traditional
											analysis.
										</p>
									</div>
								</div>

							</div>
					</section>



					<section class="page3">
						<div class="container">

							<h1>contact</h1>

							<div class="form-group row">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user fa-fw" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="name">
								</div>
							</div>

							<form id="contact" action="php/mailer.php">
								<div class="form-group row">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="email">
									</div>
								</div>

								<div class="form-group row">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject"
												 placeholder="subject">
									</div>
								</div>

								<div class="form-group row">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment fa-fw" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="4" id="message" name="message"
													 placeholder="message">
											</textarea>
									</div>
								</div>
							</form>

							<div id="output-area"></div>

							<div class="form-group row">
								<p>
									<button
										class="btn btn-primary g-recaptcha"
										data-sitekey="6LfiyS0UAAAAAINUJI0YG4Z87VVqs_QdbaRg7EnS"
										data-callback="YourOnSubmitFn">submit
									</button>
								</p>
								<p>
									<button class="btn btn-secondary"
											  type="reset">clear
									</button>
								</p>
							</div>

						</div>
					</section>

				</div>
			</div>

			<script>
				onePageScroll(".main", {
					sectionContainer: "section",
					loop: true,
					responsiveFallback: false
				});
			</script>

		</body>
	</html>

	<!-- a class="back" href="http://www.thepetedesign.com/#plugins">Back to The Pete Design</a>
	<a href="https://github.com/peachananr/purejs-onepage-scroll"><img
		style="position: absolute; top: 0; right: 0; border: 0;"
		src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
	</div -->