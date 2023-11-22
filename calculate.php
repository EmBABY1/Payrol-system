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
  $sql="select * from payrols.employee where ID = '$ID'";
      $res=$conn->query($sql);
                while($row=$res->fetch_assoc()){
                echo "price ".($row["OVERTIME_HOURS"]*10 + $row["HOURS_WORKED"]*10);
 


}

}


?>
<html>
<head><title>payrol system</title> 
<style type="text/css">




</style>
</head>
<body>
	<form method="post">
	<div style="background-color: green;" >
		enter ID <input type="text" name="ID">
		<br> <input type="submit" name="subm" value="calc">
</table>

</form>
</body>
</html>
