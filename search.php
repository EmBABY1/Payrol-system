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
                echo '<table id="table" align="center"><tr><td>ID:</td><td>  '.$row["ID"];
                echo '</td></tr><tr><td>NAME:</td><td>'.$row['NAME'];
                echo '</td></tr><tr><td>ADDRESS:</td><td>'.$row['ADDRESS'];
                echo '</td></tr><tr><td>RANK:</td><td>'.$row['RANK'];
                echo '</td></tr><tr><td>HOURS_WORKED:</td><td>'.$row['HOURS_WORKED'];
                echo '</td></tr><tr><td>OVERTIME_HOURS:</td><td>'.$row['OVERTIME_HOURS'];
                echo '</td></tr></table>';
 


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
