<!DOCTYPE HTML>
<html>
	<head>
		<title>Toolbox For Diabetes Aid | History</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="chart/Chart.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="index.html">Home</a></li>
					<li><a href="bloodsugar.php">Glucose</a></li>
					<li><a href="caregiver.php">Caregiver</a></li>
					<li><a href="#history" class="active">History</a></li>
					<li><a href="calendar.php">Calendar</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="bmi.php">BMI</a></li>
				</ul>
			</nav>

		<!-- Main History content -->
			<div class="wrapper wrapper-style1">
				<article id="history" class="container small">
					<header>
						<h2>History</h2>
						<span>Find out what your glucose levels have been over time.</span>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<canvas id="canvas" height="550" width="650"></canvas>
							</div>
						</div>
					</div>
				</article>
			</div>
					<footer>
						<a href="#" class="go-top">Go Top</a>
					</footer>
				</article>
			</div>
			<script>

		var lineChartData = {
			labels : ["Week 8","Week 9","Week 10","Week 11","Week 12","Week 13","Week 14"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [3,5,12,5,7,4,15]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>
	</body>
</html>