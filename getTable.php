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
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
 
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="liststyle.css" rel="stylesheet">

</head>
<body>

<div class="container">
  <form class="form-inline">
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
        <td>Upland</td>
        <td>Lowland</td>
      </tr>
        <td>
        <select class="form-control" id="yalaUp<?php echo "$q"; ?>">
          <option value='1'>Group I</option>
          <option value='2'>Group II</option>
          <option value='3'>Group III</option>
        </select>
        </td>
        <td>
        <select class="form-control" id="yalaDown<?php echo "$q"; ?>">
          <option value='1'>Group I</option>
          <option value='2'>Group II</option>
          <option value='3'>Group III</option>
        </select>
        </td>
    </tbody>
  </table>
</div>

<div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>MAHA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Upland</td>
        <td>Lowland</td>
      </tr>
        <td>
        <select class="form-control" id="mahaUp<?php echo "$q"; ?>">
          <option value='1'>Group I</option>
          <option value='2'>Group II</option>
          <option value='3'>Group III</option>
        </select>
        </td>
        <td>
        <select class="form-control" id="mahaDown<?php echo "$q"; ?>">
          <option value='1'>Group I</option>
          <option value='2'>Group II</option>
          <option value='3'>Group III</option>
        </select>
        </td>
    </tbody>
  </table>
  <button class="saveKanna btn btn-success" value="<?php echo "$q";?>">Save</button>
</div>
</form>
</div>

</body>
</html>