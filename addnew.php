<?php
	include('config.php');
	if(isset($_POST['add'])){
		$scheduleID = $_POST['scheduleID'];
		$harvest=$_POST['harvest'];
		$price=$_POST['price'];
		
		mysqli_query($conn,"insert into `harvest` (amount, price,scheduleID) values ('$harvest', '$price','$scheduleID')");

		mysqli_query($conn,"update `farmercrop` set harvested='1' where scheduleID='$scheduleID'");
	}
?>