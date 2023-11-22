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
  $sql="select sum( OVERTIME_HOURS*10 + HOURS_WORKED *10)/COUNT(*) as sums from payrols.employee;";
      $res=$conn->query($sql);
                while($row=$res->fetch_assoc()){
                echo "price ".$row["sums"];
 


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
		<br> <input type="submit" name="subm" value="calc">
</table>

</form>
</body>
</html>
