
<?php

$username = $_POST["name"];
$password = $_POST["password"];

$con = mysql_connect("localhost","","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbnew", $con);



$sql="INSERT INTO test (name, password) 
VALUES
 ('username', 'password')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


mysql_close($con);

?>

<html>
<head>
</head>
<body>
<a href="index.php">进入登陆界面</a>
</body>
</html>