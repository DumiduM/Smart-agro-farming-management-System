<?php
	include('config.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$harvest=$_POST['harvest'];
		$price=$_POST['price'];
		
		mysqli_query($conn,"update `harvest` set amount='$harvest', price='$price' where harvestID='$id'");
	}
?>