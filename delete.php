<?php
	include('config.php');
	if(isset($_POST['del'])){
		$id=$_POST['id'];
		mysqli_query($conn,"update farmercrop,harvest set harvested='0' where harvestID = '$id' and harvest.scheduleID = farmercrop.scheduleID;");
		
		mysqli_query($conn,"delete from `harvest` where harvestID='$id'");
	}
?>