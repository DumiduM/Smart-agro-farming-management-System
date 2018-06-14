
<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    echo "<script type='text/javascript'>alert('error2');</script>";
  }
  else{
    $name = $_SESSION['login_user'];
    // echo "<script type='text/javascript'>alert('$name');</script>";
  }

                                          include("config.php");
                                          $farmerID = "";
                                          $NIC = "";
                                          $fname = "";
                                          $lname = "";
                                          $mobile = "";
                                          $email = "";
                                          $farmerID = "";
                                          $farmerPic = "";
                                          $password = "";
                                          $agriDiv = "";

  $sql = "SELECT farmerID,NIC,email,lname,name,mobile,farmerPic,password,agriDiv FROM farmer WHERE name LIKE '$name'";
                                $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                      // output data of each row
                                  $row=".";
                                      while($row = $result->fetch_assoc()) {
                                          // echo "<br>". "district: " . $row["district"]. "<br>" . " yalaStart: " . $row["yalaStart"]. "<br>". " yalaEnd: " . $row["yalaEnd"]. "<br>".  " mahaStart: " . $row["mahaStart"]."<br>". " mahaEnd: " . $row["mahaEnd"]. "<br>";
                                          $farmerID = $row["farmerID"];
                                          $NIC = $row["NIC"];
                                          $fname = $row["name"];
                                          $lname = $row["lname"];
                                          $mobile = $row["mobile"];
                                          $email = $row["email"];
                                          $farmerID = $row["farmerID"];
                                          $farmerPic = $row["farmerPic"];
                                          $password = $row["password"];
                                          $agriDiv = $row["agriDiv"];

                                      }
                                  } else {
                                      echo "0 results";
                                  }


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>e-Farmer</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <img src="img/logo.png"  class="logo1"alt="Homepage">
    <a class="navbar-brand" id="navbar-brand" href="index.html">E-Farmer</a>
    <style>img.logo1{
	height: 50px;
}</style>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Weather</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Harvest</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">History</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Commiunity</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
<!-- ==================================================================================================================================================================== -->

<div class="container-fluid">
    <h1>Edit Profile</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <style>
            .img-circle {
    border-radius: 50%;
}
          </style>
          <h6><br>Upload a different photo...<br></h6>
          
          <input type="file" class="form-control" >
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
                                          <!-- $NIC = $row["NIC"];
                                          $fname = $row["name"];
                                          $mobile = $row["mobile"];
                                          $farmerID = $row["farmerID"];
                                          $farmerPic = $row["farmerPic"];
                                          $password = $row["password"];
                                          $agriDiv = $row["agriDiv"]; -->
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Please make sure to add <strong> accurate </strong>data.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" >
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="fname" type="text" value="<?php echo"$fname" ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="lname" type="text" value="<?php echo"$lname" ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">NIC:</label>
            <div class="col-lg-8">
              <input class="form-control" name="NIC" type="text" value="<?php echo"$NIC" ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">mobile:</label>
            <div class="col-lg-8">
              <input class="form-control" name="mobile" type="text" value="<?php echo"$mobile" ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo"$email" ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Agriculture Divition:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="ag_div" class="form-control">
                  <option value="Hawaii">Nuwara Eliya</option>
                  <option value="Alaska">Welimada</option>
                  <option value="Pacific Time (US &amp; Canada)">Badulla</option>
                  <option value="Arizona">Haguranketha</option>
                  <option value="Mountain Time (US &amp; Canada)">Kandy</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">Dambulla</option>
                  <option value="Eastern Time (US &amp; Canada)">Polonnaruwa</option>
                  <option value="Indiana (East)">Anuradhapura</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" name="uname" type="text" value=""<?php echo"$name" ?>"">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="ps1" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" name="ps2" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary"  name="modify" value="Save Changes" action ="">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</div>
</div>

<?php

  if(isset($_POST['modify'])){
echo "<script type='text/javascript'>alert('SQL DONE');</script>";
    
    $NIC = $_POST["NIC"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mobile = $_POST["mobile"];
    $email =$_POST["email"];
    //$farmerPic = $_POST["farmerPic"];
    $password1 = $_POST["ps1"];
    $password2 = $_POST["ps2"];
    
    // $agriDiv = $_POST["agriDiv"];

//     UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 


  if ($password1==$password2) {   
   
   $sql = "UPDATE farmer SET NIC='$NIC',name='$fname',lname='$lname',mobile='$mobile',email='$email',password='$password1' WHERE farmerID LIKE '$farmerID'";

   if ($conn->query($sql) === TRUE) {
          echo "<script type='text/javascript'>alert('SQL DONE');</script>";
    
   }
  else {
    echo "<script type='text/javascript'>alert('SQL FAIL');</script>";
  }


   }

   else{
          echo "<script type='text/javascript'>alert('Password doesn't match');</script>";
  }
}
?>

<!-- ====================================================================================================================================================================       -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

    <script>
  window.onload = function setUser(){
  document.getElementById("navbar-brand").innerHTML ="Welcome " + 
  "<?php echo($name)?>";
}
</script>

</body>

</html>
