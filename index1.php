<?php
$servername="127.0.0.1";
$username="root";
$db="payrols";
$password="";
$conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payrol System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="" >

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Payrol System</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index1.php" style="">Home</a></li>
      <li><a href="Insert.php"target="1">Insert</a></li>
      <li><a href="Update.php"target="1">Update</a></li>
      <li><a href="Calculate.php"target="1">Calculate</a></li>
      <li><a href="Search.php"target="1">Search</a></li>
      <li><a href="Average.php"target="1">Average</a></li>
    </ul>
  </div>
</nav>


<iframe name="1" width=1280; height="720" frameborder=0>


    </iframe>
</body>
</html
