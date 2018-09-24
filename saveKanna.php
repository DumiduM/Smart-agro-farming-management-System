<?php

		echo "<script> alert('Came'); </script>";

	include('config.php');
	$cropName =$_POST['cropNameENG']; 
	$cropID = mysqli_query($conn,"SELECT cropID FROM crop WHERE nameENG LIKE '$cropName'");

	if(isset($_POST['sav'])){

		$id=$_POST['id'];
		$yalaUp=$_POST['yalaUp'];
		$yalaDown=$_POST['yalaDown'];
		$mahaUp=$_POST['mahaUp'];
		$mahaDown=$_POST['mahaDown'];
		
		mysqli_query($conn,"INSERT INTO division (divisionID,priority,type,cropID,district) VALUES ('10', '$yalaUp', 'yala', '$cropID', '$id');");

		echo "<script>
alert('SQL done';
</script>";
	}
	else
				echo "<script>
alert('SQL Not done';
</script>";
?>