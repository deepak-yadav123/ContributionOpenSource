<?php 
session_start();
include('includes/functions.php')
// $user = $_SESSION['user'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/bootstrap.min.css">
    <title>All Records | <?php echo $_SESSION['name']; ?></title>
</head>
<body>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User Name</th>
      <th scope="col">Pending Bill</th>
      <th scope="col">Rent</th>
      <th scope="col">Electricity Unit</th>
      <th scope="col">Electricity Bill</th>
      <th scope="col">Due From</th>
      <th scope="col">Due Till</th>
    </tr>
  </thead>
  <tbody>
  <?php $user = $_SESSION['user']; get_dues($user); ?>
  </tbody>
</table>
    </div>
</body>
<script src="includes/js/bootstrap.min.js"></script>
</html>