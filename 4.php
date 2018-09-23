<?php
  session_start();
  $varietyID=$_GET['varietyID'];
  $user=$_SESSION['login_user'];
  $date=$_SESSION['date'];
  $name=$_SESSION['cropName'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="liststyle.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Welcome test</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
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
    <div class="container-fluid" id = "Body-container">
<!-- Body starts here  ========================================================================================================================================================  --> 

    <section class="content">
      <div class="row">
        <div class="col-md-7">
<!-- /////////////////////////////////////////////////////////////////////////////////// add php con -->





      <h3>Start new Schedule</h3>
      <h5>Projected Scheldue</h5><br>
        </div>
             <div class="col-md-5">
      <h5><strong>Crop : </strong> <?php echo $name;?></h5>
      <h5><strong>Starting Date : </strong> <?php echo $date;?></h5>
      <h5><strong>Land : </strong></h5>
      <h5><strong>kit Avalibility : </strong></h5><br>
        </div>
      </div>
      <div class="col-md-12 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="table-container">
              <table class="table table-filter">
                <tbody>
                <?php
                  include("config.php");
                  $sql2 = "SELECT * FROM steps WHERE varietyID = '$varietyID' ORDER BY stepID ASC";
                                
                    $result = $conn->query($sql2);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                                $result_array[]=$row;}
                                 
                                  foreach($result_array as $key=>$value){
                                
                ?>
                <tr data-status="pagado">
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img src="<?php echo $result_array[$key]["stepPic"]; ?>" class="media-photo"> 
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right">Febrero 13, 2016</span>   
                          <h4 class="title">
                            <?php echo $result_array[$key]["info"]; ?>
                            <span class="pull-right pagado"><h4>13/12</h4></span>
                            <style>.table-filter .media-photo {
                                width: 100px;
                                padding-right: 10%;
                              }
                            </style>
                          </h4>
                          <p class="summary"><?php custom_echo($result_array[$key]["instruction"],100); ?></p>
                          <div><input type="submit" value="more details" class="btnAddAction pull-right pagado" data-toggle="modal" data-target="#myModal"/></div>       
                          <style>
                            .btnAddAction{    background-color: #eb9e4f;
                                              border: 0;
                                              padding: 3px 10px;
                                              margin-right: 8%;
                                              color: #ffffff;
                                              margin-left: 2px;
                                              border-radius: 2px;
                                          }
                          </style>

                          <div class="container">
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      
                                    </div>
                                    <div class="modal-body">
                                      <img src="<?php echo $result_array[$key]["stepPic"]; ?>" class="media-photo" style="width:100%; "> 
                                      <p><strong><?php echo $result_array[$key]["info"] ?></strong></p>
                                      <p><?php echo $result_array[$key]["instruction"] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              
                            </div>



                        </div>
                      </div>
                    </td>
                  </tr>
  
                  
                                                                        
                     
                <?php }
              
            }
          

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
                  ?>
                  


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

 



<form method="POST" action="">
<input type="submit" class="btn btn-primary" value="save" name="save">
</form>

<?php
if(isset($_POST['save'])){

    
      $farmerID = $_SESSION['farmerID'];

    $sql = "INSERT INTO farmercrop (farmerID,verityID,CurrentStepID,dateSc) VALUES ('$farmerID','$varietyID','1','$date')";

       if ($conn->query($sql) === TRUE) {
              //echo "<script type='text/javascript'>alert('SQL DONE');</script>";
         mysqli_close($conn);
         ?><script>gotoHome();</script><?php


      }
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('SQL FAIL');</script>";
     }
}
?>
<script>
function gotoHome() {
	alert("done");
    window.open("home.php");
    this.exit;
}
</script>
<?php


// $sql = "SELECT varietyName,harvestRate,varietyPic,price FROM variety WHERE cropID LIKE '001'";
//                                 $result = $conn->query($sql);
//                                 if ($result->num_rows > 0) {
//                                       // output data of each row
//                                   $row=".";
//                                       while($row = $result->fetch_assoc()) {
//                                           echo "<br>". "Name: " . $row["varietyName"]. "<br>" . " harvestRate: ".$row["harvestRate"]."%"."<br>"."Current Price: ". $row["price"]. "<br>";
//                                           $variety_Path = $row["varietyPic"];



?>
    <!--    <?php
                  // include("config.php");
                  // $i="0";
                  // $sql = "SELECT stepID,stepPic,instruction,timeGap,info FROM steps WHERE varietyID LIKE '001-001' ORDER BY stepID ASC";
                  //               $result = $conn->query($sql);
                  //               if ($result->num_rows > 0) {
                  //                     // output data of each row
                  //                 $row=".";
                  //   p                  while($row = $result->fetch_assoc()) {
                  //                         $i++;
                  //                         echo "<br>". "stepID: " . $row["stepID"]. "<br>" . "instruction: ". $row["instruction"]."<br>";
                  //                         $_SESSION["stepID"] = $row["stepID"];
                  //                         $_SESSION["stepPic"."$i"] = $row["stepPic"];
                  //                         $_SESSION["instruction"."$i"] = $row["instruction"];
                  //                         $_SESSION["timeGap"."$i"] = $row["timeGap"];
                  //                         $_SESSION["info"] = $row["info"];
                  //                       }
                  //                     }

                                         
                                        
                     
    ?> -->
<!-- Body ends here  ==========================================================================================================================================================  -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</div>
</body>

</html>
