<?php
	session_start();
	include 'config.php';
   if(isset($_POST['login'])){

echo "<script type='text/javascript'>alert('check');</script>";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT farmerID FROM farmer WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         // session_register("$myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: home.php");
         exit();
      }
      else {
         $error = "Your Login Name or Password is invalid";
      		echo "<script type='text/javascript'>alert('$error');</script>";
      }
   }

}


  if(isset($_POST['register'])){
 
  $farmerNIC=$_POST['farmerNIC'];
  $farmerName=$_POST['farmerName'];
  $farmerMobile=$_POST['farmerMobile'];
  $farmerPs=$_POST['farmerPs'];
  $farmerConPs=$_POST['farmerConPs'];
  $farmerAgriDiv=$_POST['farmerAgriDiv'];


  if ($farmerPs==$farmerConPs) {   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
      	echo "<script type='text/javascript'>alert('Could not connect');</script>";
   }
   
   $sql = "INSERT INTO farmer (NIC,name,mobile,password,agriDiv) VALUES ('$farmerNIC','$farmerName','$farmerMobile','$farmerPs','$farmerAgriDiv')";

   if ($conn->query($sql) === TRUE) {
        	echo "<script type='text/javascript'>alert('SQL DONE');</script>";
	   mysqli_close($conn);
	   $_SESSION['login_user'] = $farmerName;
   header("Location:home.php");
    exit;

	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script type='text/javascript'>alert('SQL FAIL');</script>";
	}


   }

   else{
      		echo "<script type='text/javascript'>alert('Password doesn't match');</script>";
	}
}


?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/style.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>



<!DOCTYPE html>
<html lang="en">

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<header>
    <div class="container">
	<div class="row">
		<div class="col-sm-6">
			<!-- <div class="logo">Responsive</div> -->
			<div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="img/logo.png" alt="Homepage">
            </a>
        </div>
		</div>
		<div class="col-sm-6 hidden-xs">
			<div class="background1">
				<style>
					body{
					background-image:url('img/bg.jpg');
					background-repeat: no-repeat;
	    			background-size: cover;
	    			backface-visibility: (50%);
					}
				</style>
			</div>
            <form class="login-form" method="POST">
			<div class="row">
                
				<div class="col-sm-5">
					  <div class="form-group">

					    <input type="text" name="uname" class="form-control" placeholder="User name">
					    <div class="login-bottom-text checkbox hidden-sm">
						    <label>
						      <input type="checkbox" id="">
						      Keep me sign in
						    </label>
						  </div>
					  </div>
				</div>	
				<div class="col-sm-5">
					 <div class="form-group">
					    <input type="text" name="pass" class="form-control" placeholder="Password" required>
					    <div class="login-bottom-text hidden-sm"> Forgot your password?  </div>
					  </div>
				</div>
				<div class="col-sm-2">
					 <div class="form-group">
					    <input type="submit" name ="login" value="login" class="btn-header-login" required>
					  </div>
				</div>
            </form>
			</div>	
		</div>
	</div>
	</div>


</header>

    <section id="home" class="s-home target-section" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

<article class="container">
		<div class="row">
			<div class="col-sm-8">
				
			</div>
			<div class="col-sm-4">
				<div class="">
				
				<h3><i class="fa fa-shield"></i><br>Create a new account</h3>
				<small>It's free and always will be</small>
			  	<hr>

			  	<form method="POST">
                    <!-- <div class="form-group">
                      <label class="control-label" for=""></label>
                      <input type="text" name="farmerID" required class="form-control" placeholder="NIC">
                    </div> -->
					<div class="form-group">
					  <label class="control-label" for=""></label>
					  <input type="text" name="farmerNIC"  required class="form-control" placeholder="NIC">
					</div>

					<div class="form-group">
					  <label class="control-label" for=""></label>
					  <input type="text" name="farmerName" required class="form-control" placeholder="Name">
					</div>

					<div class="form-group">
					  <label class="control-label" for=""></label>
					  <input type="text" name="farmerAgriDiv" required class="form-control" placeholder="Agriculture Division">
					</div>

					<div class="form-group">
					  <label class="control-label" for=""></label>
					  <input type="text" name="farmerMobile" required class="form-control" placeholder="Mobile">
					</div>

					<div class="form-group">
					  <label class="control-label" for=""></label>
					  <input type="password" name="farmerPs" required class="form-control" placeholder="Password">
					</div>

					<div class="form-group">
					  <label class="control-label" for=""></label>
					  <input type="password" name="farmerConPs" required class="form-control" placeholder="Repeat Password">
					</div>
				
					<small>
					By clicking Create Account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy. You may receive SMS message notifications from Facebook and can opt out at any time.
					</small>	 
				<div style="height:10px;"></div>
				<div class="form-group">
				  <label class="control-label" for=""></label>
				  <button type="submit" name="register" class="btn btn-primary" value="register">Submit</button>
				</div>	 
				</form>
 <?php

   ?>

				  </div>
			</div>
			</div>
		
</article>
</section>



<footer class="container">
<hr>
<div class="footer-options">
<ul >
	<li><a href="#">Mobile</li>
	<li><a href="#">Find Friends</li>
	<li><a href="#">Badges</li>
	<li><a href="#">People</li>
	<li><a href="#">Pages</li>
	<li><a href="#">Places</a></li>
	<li><a href="#">Games</a></li>
	<li><a href="#">Locations</a></li>
	<li><a href="#">About</a></li>
</ul>
</div>
<div style="clear:both"></div>
<small class="copyrights"> © Copyrights reserved  2018</small>
</section>