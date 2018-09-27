<?php
session_start();
$_SESSION['division'] = $_GET['q']; 
include "../config.php";
$q = $_GET['q'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - BarGraph</title>
		<style type="text/css">
			#chart-container {
				/*width: 800px;*/
				height: auto;
				align-content: left;
			}
		</style>
	</head>
	<body>
		<div id="chart-container" align="center">
			<h1><?php echo $q; ?></h1><br>
			<canvas id="mycanvas"></canvas>
		</div>

		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.min.js"></script>
		<script type="text/javascript" src="app2.js"></script>
	</body>
</html>