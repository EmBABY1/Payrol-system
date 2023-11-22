<?php
$servername="127.0.0.1";
$username="root";
$password="";
$db="payrols";
$conn=new mysqli($servername,$username,$password);
$conn =mysqli_connect($servername,$username,$password);
$_SESSION['success'] = "";
session_start();

if (isset($_POST['subm']))
{
  $ID=$_POST['ID'];
  $NAME=$_POST['NAME'];
  $ADDRESS=$_POST['ADDRESS'];
  $RANK=$_POST['RANK'];
  $HOURS_WORKED=$_POST['HOURS_WORKED'];
  $OVERTIME_HOURS=$_POST['OVERTIME_HOURS'];
  $result1=mysqli_query($conn,"SELECT * FROM payrols.employee WHERE ID='".$ID."'limit 1");
  if (mysqli_num_rows($result1)==1)
  {
    echo "<p style='color:red'>the ID has been added before</p>";
  }

  else
  {
    //$hashed = password_hash($pw,PASSWORD_BCRYPT);
   // $_SESSION['password'] = $hashed;

  $insert= "insert into payrols.employee values('$ID','$NAME','$ADDRESS','$RANK','$HOURS_WORKED','$OVERTIME_HOURS')";
  $result2=mysqli_query($conn,$insert);
    echo "<p style='color:green'>the username and password valed</p>";
  }

}




?>
<html>
<head><title>payrol system</title> 
<style type="text/css">
	#aaa{ background-color: beige;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;}

	td{
		color: beige;
	}
input[type=text], select,input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}





</style>
</head>
<body>
	<form method="post">
	<div style="background-color: green;" >
		
	<table style="  margin-left: auto;
  margin-right: auto; ">
  <td></td><td><h1 style="color: black;"> Insert New Employee</h1></td><tr>
	<td>ID</td><td><input type="text" name="ID" required></td><tr>
	<td>Name</td><td><input type="text" name="NAME" required></td><tr>
	<td>Address</td><td><input type="text" name="ADDRESS" required></td><tr>
	<td>Rank</td><td><input type="text" name="RANK" required></td><tr>
	<td>hours_worked</td><td><input type="number" name="HOURS_WORKED" min=0 required ></td><tr>
	<td>overtime_hours</td><td><input type="number" name="OVERTIME_HOURS"min=0 required ></td><tr><tr>
	<td></td> <td><input type="submit" id="aaa" name="subm"></td>
</table>

</form>
</body>
</html>
