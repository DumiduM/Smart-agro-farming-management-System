<?php
// session_start();
// $division = $_SESSION['division'];
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'e-farmer');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT crop.nameENG AS Crop, SUM(amount) AS Harvest from harvest,farmercrop,variety,crop WHERE harvest.scheduleID = farmercrop.scheduleID AND farmercrop.verityID = variety.varietyID AND variety.cropID = crop.cropID AND farmercrop.location = 'Nuwara Eliya' GROUP BY crop.nameENG ORDER BY SUM(amount) DESC
");

// SELECT playerid, score FROM score ORDER BY playerid
//SELECT crop.nameENG AS Crop, SUM(amount) AS Harvest from harvest,farmercrop,variety,crop WHERE harvest.scheduleID = farmercrop.scheduleID AND farmercrop.verityID = variety.varietyID AND variety.cropID = crop.cropID AND farmercrop.location = 'Nuwara Eliya' GROUP BY crop.nameENG ORDER BY SUM(amount) DESC



//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data

print json_encode($data);
// echo "$division";