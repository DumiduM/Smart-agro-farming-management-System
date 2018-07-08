<?php
include "config.php";
$q = $_GET['q'];
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
<!--   <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="liststyle.css" rel="stylesheet">

</head>
<body>

<div class="container">
  <div>
  <h2><?php echo "$q"; ?></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>YALA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        <select class="form-control">
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>Augurst</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
        </td>
        <td>
        <select class="form-control">
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>Augurst</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
        </td>
    </tbody>
  </table>
</div>

<div class="container">
  <div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>MAHA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        <select class="form-control">
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>Augurst</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
        </td>
        <td>
        <select class="form-control">
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>Augurst</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
        </td>
    </tbody>
  </table>
</div>

</body>
</html>