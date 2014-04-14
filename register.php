<?php
$con = mysql_connect("localhost","root","12281094");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE ljs",$con))
  {
  echo "Database created";
  }
mysql_select_db("ljs", $con);
$sql = "CREATE TABLE Persons 
(
	Name varchar(15),
	Password varchar(15),
	Email varchar(50)
)";
mysql_query($sql,$con);
mysql_close($con);
?>

<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<form action="insert.php" method="post">
    用户名 : <input type="text" name="name"/>
    密码 : <input type="password" name="password"/>
		<input type="submit"name="Submit"value="提交"></td>
		<a  class="a"href="index.php">返回</a>&nbsp;
	</p>

</form>

</body>
</html>