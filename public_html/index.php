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
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playball|Roboto:400,400i,700,700i" rel="stylesheet"/>

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet">

		<!-- My Stylesheet -->
		<link rel="stylesheet" href="css/styles.css"/>

		<!-- HTML5 shim and Respond . js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond . js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<title>Steven Hebert</title>

	</head>

	<body class="site">

		<!-- header -->
		<header>
			<nav class="navbar navbar-toggleable-md">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
						  data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
						  aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#about">about</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#resume">resume</a>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<!-- main -->
		<div class="container.fluid">

			<div id="about" class="jumbotron">
				<h1 class="display-3">Steven Hebert</h1>
				<p class="lead">

				</p>
				<p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal">contact
						me
					</button>
				</p>

				<!-- modal -->
				<div class="modal fade bg-contactModal-lg" id="contactModal" tabindex="-1" role="dialog"
					  aria-labelledby="myLargeModalLabel"
					  aria-hidden="true">

					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="container">
								<div class="modal-header">
									<h5 class="modal-title" id="contact">new message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">x</span>
									</button>
								</div>

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

								<div class="modal-footer">
									<div id="output-area"></div>
								</div>

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

						</div>
					</div>

				</div>

			</div>


			<div class="container">

				<div id="portfolio" class="row">

					<div class="card col-sm-6">
						<img src="images/ABQTH.png" alt="Albuquerque Town Hall"
							  href="https://bootcamp-coders.cnm.edu/shebert2/townhall"/>
						<p
							class="card-text text-justify">My Deep Dive capstone project. Created to help engage residents in
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
						<img src="https://placeimg.com/640/480/any/sepia" alt="randy"/>
						<p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in
							to
							additional content. This content is a little bit longer.</p>
					</div>

				</div>


				<div class="row">

					<div class="card col-sm-6">
						<img src="https://placeimg.com/640/480/any/sepia" alt="randy"/>
						<p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in
							to
							additional content. This content is a little bit longer.</p>
					</div>

					<div class="card col-sm-6">
						<img src="images/termPaper509.png" alt="Synthetic Control Model"/>
						<p class="card-text text-justify">
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

			<div class="container">

				<div id="resume" class="yui-t7">
					<div id="inner">

						<div id="hd">
							<div class="yui-gc">
								<div class="yui-u first">
									<h1>Steven Hebert</h1>
									<h2>Web Developer, Social Scientist</h2>
								</div>

								<div class="yui-u">
									<div class="contact-info">
										<h3><a id="pdf" href="docs/steven-hebert-resume.pdf">Download PDF</a></h3>
										<h3><a href="mailto:hebertsteven@me.com">hebertsteven@me.com</a></h3>
										<h3>(501) 590-7814</h3>
									</div>
								</div>
							</div>
						</div>

						<div id="bd">
							<div id="yui-main">
								<div class="yui-b">

									<div class="yui-gf">
										<div class="yui-u first">
											<h2>Profile</h2>
										</div>
										<div class="yui-u">
											<p class="enlarge">
												A self-starting, highly-motivated analytical thinker interested in the nexus of
												energy,
												technology and the environment.
											</p>
										</div>
									</div>

									<div class="yui-gf">
										<div class="yui-u first">
											<h2>Skills</h2>
										</div>
										<div class="yui-u">

											<div class="talent">
												<h3>Web Development</h3>
												<p>Assertively exploit wireless initiatives rather than synergistic core
													competencies. </p>
											</div>

											<div class="talent">
												<h3>Data Analytics</h3>
												<p>Credibly streamline mission-critical value with multifunctional
													functionalities. </p>
											</div>

											<div class="talent">
												<h3>Research</h3>
												<p>Proven ability to lead and manage a wide variety of design and development
													projects
													in team and independent situations.</p>
											</div>
										</div>
									</div>

									<div class="yui-gf">
										<div class="yui-u first">
											<h2>Technical</h2>
										</div>
										<div class="yui-u">
											<ul class="talent">
												<li>XHTML</li>
												<li>CSS</li>
												<li class="last">Javascript</li>
											</ul>

											<ul class="talent">
												<li>Jquery</li>
												<li>PHP</li>
												<li class="last">Git / Github</li>
											</ul>

											<ul class="talent">
												<li>Stata</li>
												<li>R</li>
												<li class="last">MatLab</li>
											</ul>
										</div>
									</div>

									<div class="yui-gf">

										<div class="yui-u first">
											<h2>Experience</h2>
										</div>

										<div class="yui-u">

											<div class="job">
												<h3>University of New Mexico</h3>
												<h4>Graduate Assistant</h4>
												<h5>2015-2017</h5>
												<p>Created surveys, gathered data, created datasets. Developed hypothesis’, reviewed
													and designed analytical models. Programmed regressions and dynamic simulations.
													Assessed statistical significance, interpreted and translated results.</p>
											</div>

											<div class="job">
												<h3>Arkansas Department of Health</h3>
												<h4>Specialist III</h4>
												<h5>2014-2015</h5>
												<p>Collected, cleaned, and databased clinic outbreak data. Analyzed health and
													center
													monthly financial data, created forecasts and visualizations. Recommended and
													developed budget and policy changes.</p>
											</div>

											<div class="job last">
												<h3>Hosto Buchan PLLC</h3>
												<h4>Portfolio Analyst</h4>
												<h5>2013-2014</h5>
												<p>Managed legal portfolios, analyzed performance reports and forecasted earnings.
													Created database queries and spreadsheet macros to flag statute and discovery
													data.
													Verified account data, reviewed and recommended for litigation.
												</p>
											</div>

										</div>
									</div>


									<div class="yui-gf last">
										<div class="yui-u first">
											<h2>Education</h2>
										</div>
										<div class="yui-u">
											<h3>University of New Mexico - Albuquerque, New Mexico</h3>
											<h4>Master of Arts, Applied Microeconomics</h4>
										</div>

										<div class="yui-u">
											<h3>University of Arkansas - Little Rock, Arkansas</h3>
											<h4>Mathematics and Statistics</h4>
										</div>

										<h3>Arkansas State University - Little Rock, Arkansas</h3>
										<h4>Bachelors of Science, Economics</h4>

										<h3>Jiangxi University of Finance and Economics - Jiangxi, Nanchang, PRC</h3>
										<h4>Study Abroad</h4>


									</div>


								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- footer -->
			<div class="container.fluid">

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

			</div>

	</body>
</html>

