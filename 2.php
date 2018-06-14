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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-farmer</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" id ="navbar-brand" "href="index.html">Start</a>
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






  <!-- ==================================================================================================================================================================================== -->







  <div class="content-wrapper">
    <div class="container-fluid">
     <br><br>
      <div class="modal-body row">

        <div class="col-md-6">
          <form class="form-horizontal" method="post" action="">
                            <div class="form-group">
                              <label class="control-label col-sm-4" for="landsize">Land size : </label>
                              <div class="col-sm-10">
                                <row>
                                <input type="number" name="landsize" class="form-control" placeholder="Type here your land size" value="<?= isset($_POST['landsize']) ? htmlspecialchars($_POST['landsize']) : '' ?>" />
                                <select class="form-control" id="land_size">
                                  <option>ha</option>
                                  <option>m2</option>
                                  <option>perchaces</option>
                                </select>
                              </row>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-4" for="location">Location : </label>
                              <div class="col-sm-10">
                                <input type="text" id="pac-input" name="location" class="controls" placeholder="Enter your location">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-4" for="date">Start plan Date : </label>
                              <div class="col-sm-12">
                                <input type="date" name="date"  class="controls" >
                              </div>
                            </div>

                          
                            <div class="form-group">
                              <label class="control-label col-sm-7" for="button">Set-up if e-farmer kit is avaliable </label>
                              <button type="input" name="kit_av" class="btn btn-success" value="1">Click here</button>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                            <button type="submit" name="submit" class="btn btn-success control-label col-sm-4" onclick="myfunction();" style="font-size: 20px;">Submit</button>

                            <script>
                            function myfunction() {
                                window.open("3.php");
                                this.exit;
                            }
                            </script>

                            </div>
                          </div>

                          <script type="text/javascript">
                            function split(str) {
                             var i = str.indexOf("'");

                             if(i > 0)
                              return  str.slice(0, i);
                             else
                              return "";     
                            }
                          </script>
                            <?php

                            
                            include("config.php");
                            // Create connection
                            $i="0";
                            $date = null;
                            $year = null;
                            $month = null;
                            $yalaEnd = null;
                            $mahaEnd = null;
                        
                            if(isset($_POST['submit'])){
                            // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                if (!empty($_POST['landsize']))
                                  $landsize = mysqli_real_escape_string($conn,$_POST['landsize']);
                                else
                                  $landsize = null;

                                if (!empty($_POST['location']))
                                  $location = mysqli_real_escape_string($conn,$_POST['location']);
                                else
                                  $location = null;
                                
                                if (!empty($_POST['date'])){
                                  $date = $_POST['date'];
                                }

                                if (!empty($date)){
                                  $date_timestamp = strtotime($date);
                                    $day = date("d", $date_timestamp);
                                    $month = date("m", $date_timestamp);
                                    $year = date("Y", $date_timestamp);
                                }
                                else
                                  $date = null;
                                                           
                                $sql = "SELECT district, yalaStart, yalaEnd, mahaStart, mahaEnd FROM districtkanna WHERE district LIKE '%$location%' AND year LIKE '$year'";
                                $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                      // output data of each row
                                  $row=".";
                                      while($row = $result->fetch_assoc()) {
                                          // echo "<br>". "district: " . $row["district"]. "<br>" . " yalaStart: " . $row["yalaStart"]. "<br>". " yalaEnd: " . $row["yalaEnd"]. "<br>".  " mahaStart: " . $row["mahaStart"]."<br>". " mahaEnd: " . $row["mahaEnd"]. "<br>";
                                          $yalaStart = $row["yalaStart"];
                                          $yalaEnd = $row["yalaEnd"];
                                          $mahaStart = $row["mahaStart"];
                                          $mahaEnd = $row["mahaEnd"];
                                      }
                                  } else {
                                      echo "0 results";
                                  }

                                  $check = "0";
                                  $kannaType = "";

                                  while($month<="12"){
                                    if($month==$yalaEnd || $month==$mahaEnd){
                                      if($month==$yalaEnd){
                                        $kannaType = "YALA";
                                        $check = "1";
                                      }
                                      else{
                                        $kannaType = "MAHA";
                                        $check = "1";
                                      }
                                    }
                                    
                                    if ($check =="1")
                                        break;
                                    $month++;

                                    if ($month == "13")
                                      $month = "1";
                                  }

                                  $sql = "SELECT cropID,priority FROM division WHERE type LIKE '$kannaType' AND district LIKE '%$location%' ORDER BY  priority ASC";
                                  $result = $conn->query($sql);
                                
                        
                                  if ($result->num_rows > 0) {
                                          // output data of each row
                                      $row=".";
                                      
                                          while($row = $result->fetch_assoc()) {
                                            $i++;
                                            // echo "<br>". "crop: " . $row["cropID"]. "priority: " . $row["priority"];
                                            $_SESSION["crop"."$i"] = $row["cropID"];
                                            $_SESSION["priority"."$i"] = $row["priority"];
                                            // echo $kannaType;
                                          }
                                        }
                                      $conn->close();
                  //echo "$kannaType";
                  $_SESSION['kannaType'] = $kannaType;
                  $_SESSION['i']=$i;
                  $_SESSION['date'] = $date;
                  }

                  //echo $_SESSION["kannaType"];

                    $j="0";
                    // echo '<br>';

                    //  echo '<br>';
                    while ($j<$i){
                      $j++;

                      // echo $_SESSION["crop"."$j"]." " ;
                      // echo $_SESSION["priority"."$j"]."<br>";
                      
                    }
                    // header( 'Location: 3.php' );
                  ?>

          </form>
        </div>

        <div class="col-md-6">
        <!-- Your second column here -->
          <div id="map" style="width:700px;height:400px;background:yellow"></div>
            <script>
            function myMap() {
            var mapOptions = {
                center: new google.maps.LatLng(6.959203, 80.783865),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }
            </script>
            
            <div id="map"></div>
            <script>
            // This example adds a search box to a map, using the Google Place Autocomplete
            // feature. People can enter geographical searches. The search box will return a
            // pick list containing a mix of places and predicted search terms.

            // This example requires the Places library. Include the libraries=places
            // parameter when you first load the API. For example:
            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                  function initAutocomplete() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 6.959203, lng: 80.783865},
                      zoom: 13,
                      mapTypeId: 'roadmap'
                    });

                    // Create the search box and link it to the UI element.
                    var input = document.getElementById('pac-input');
                    var searchBox = new google.maps.places.SearchBox(input);
                    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                    // Bias the SearchBox results towards current map's viewport.
                    map.addListener('bounds_changed', function() {
                      searchBox.setBounds(map.getBounds());
                    });

                    var markers = [];
                    // Listen for the event fired when the user selects a prediction and retrieve
                    // more details for that place.
                    searchBox.addListener('places_changed', function() {
                      var places = searchBox.getPlaces();

                      if (places.length == 0) {
                        return;
                      }

                      // Clear out the old markers.
                      markers.forEach(function(marker) {
                        marker.setMap(null);
                      });
                      markers = [];

                      // For each place, get the icon, name and location.
                      var bounds = new google.maps.LatLngBounds();
                      places.forEach(function(place) {
                        if (!place.geometry) {
                          console.log("Returned place contains no geometry");
                          return;
                        }
                        var icon = {
                          url: place.icon,
                          size: new google.maps.Size(71, 71),
                          origin: new google.maps.Point(0, 0),
                          anchor: new google.maps.Point(17, 34),
                          scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                          map: map,
                          icon: icon,
                          title: place.name,
                          position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                          // Only geocodes have viewport.
                          bounds.union(place.geometry.viewport);
                        } else {
                          bounds.extend(place.geometry.location);
                        }
                      });
                      map.fitBounds(bounds);
                    });
                  }
            </script>
         </div>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNB6r9uXPliKQfP9SPpXp834qyZL4Qfqc&libraries=places&callback=initAutocomplete"async defer></script>
    </div> 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <script>
      window.onload = function setUser(){
  document.getElementById("navbar-brand").innerHTML ="Welcome " + 
  "<?php echo($name)?>";
}
    </script>
  </div>
</div>







<!-- ====================================================================================================================================================================================-->









</body>

</html>
