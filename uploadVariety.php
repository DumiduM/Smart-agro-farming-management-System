<?php
session_start();
include 'config.php';
  if(isset($_POST['btnSubmit'])){
 
  $cropNameENG=$_POST['cropNameENG'];
  $cropNameSIN=$_POST['cropNameSIN'];
  $cropNameTML=$_POST['cropNameTML'];
  $cropType=$_POST['cropType'];
  $cropMinLandSize=$_POST['cropMinLandSize'];
  $cropPicPath='cropPicUpload/UploadCrop/'.$_SESSION['newFileName'];
  // $varietyName=$_POST['varietyName'];
  // $varietyAvarageHarvestRate=$_POST['varietyAvarageHarvestRate'];
  // $varietyPrice=$_POST['varietyPrice'];


   $sql = "INSERT INTO crop (nameENG,nameSIN,nameTML,croptype,minLandSize,cropPic) VALUES ('$cropNameENG','$cropNameSIN','$cropNameTML','$cropType','$cropMinLandSize','$cropPicPath')";

   if ($conn->query($sql) === TRUE) {
        	echo "<script type='text/javascript'>alert('SQL DONE');</script>";
	   mysqli_close($conn);
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script type='text/javascript'>alert('SQL FAIL');</script>";
	}


   }

   else{
      		echo "<script type='text/javascript'>alert('Error Occured');</script>";
	}


?>