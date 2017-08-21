<!-- Clark, Keith . "Pure CSS Parallax Websites." Pure CSS Parallax Websites . August 25, 2014. Accessed August 04, 2017 http://keithclark.co.uk/articles/pure-css-parallax-websites/. edited: 25 February 2015 -->

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Latest compiled and minified CSS -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
				integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
				  integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
				  crossorigin="anonymous"></script>

		<!-- ajax -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
				  integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
				  crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
				  integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
				  crossorigin="anonymous"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playball|Roboto:400,400i,700,700i" rel="stylesheet"/>

		<!-- custom stylesheet -->
		<link rel="stylesheet" href="css/styles.css"/>

		<!-- HTML5 shim and Respond . js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond . js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<title>Personal Webpage Project</title>
	</head>


	<sfooter>
		<div class="container">
			<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
						  data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
						  aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a class="navbar-brand" href="#">Steven Hebert</a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Code</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown link
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>

							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>


		<div class="parallax">
			<div class="parallax__group">
				<div class="parallax__layer parallax__layer--back">
					...
				</div>

				<div class="parallax__layer parallax__layer--base">
					...
				</div>
			</div>
			<div class="parallax__group">
				...
			</div>
		</div>
	</sfooter>


</html>

<!--
$zindex - dropdown - backdrop:  990 !default;
$zindex - navbar:            1000 !default;
$zindex - dropdown:          1000 !default;
$zindex - fixed:             1030 !default;
$zindex - sticky:            1030 !default;
$zindex - modal - backdrop:    1040 !default;
$zindex - modal:             1050 !default;
$zindex - popover:           1060 !default;
$zindex - tooltip:           1070 !default;
-->

