<?php
	include('config.php');
	if($_POST['edit'] == 1)
	{
		$id=$_POST['farmerID'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$NIC=$_POST['NIC'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $ag_div=$_POST['ag_div'];
		
		mysqli_query($conn,"update `farmer` set name='$fname', lname='$lname', NIC='$NIC', mobile='$mobile', email='$email', agriDiv='ag_div' where farmerID='$id'");
	}

	if($_POST['edit'] == 2)
	{
		$id=$_POST['farmerID'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$NIC=$_POST['NIC'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $ag_div=$_POST['ag_div'];
        $ps=$_POST['ps'];
		
		mysqli_query($conn,"update `farmer` set name='$fname', lname='$lname', NIC='$NIC', mobile='$mobile', email='$email', agriDiv='ag_div', password='ps' where farmerID='$id'");
	}
?>
