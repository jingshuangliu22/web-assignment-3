<?php
$username = $_POST["name"];
$con = mysql_connect("localhost","root","12281094");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ljs", $con);

$result = mysql_query("SELECT * FROM Persons
WHERE Name='$username'");

if($row = mysql_fetch_array($result))
  {  
  echo $row['Name'];
  echo "用户名已存在 ";
  }

else{
  echo "<div>
  <p>注册成功</p>
  </div>";

$sql="INSERT INTO Persons (Name,Password)
VALUES
('$_POST[name]','$_POST[password]')";
}
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>

<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
  <a href="index.php">返回</a>
</body>
<ml>
