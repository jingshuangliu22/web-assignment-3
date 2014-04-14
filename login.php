<?php
$username = $_POST["name"];
$password = $_POST["password"];
$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;

$con = mysql_connect("localhost","root","12281094");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ljs", $con);

$result = mysql_query("SELECT * FROM Persons
WHERE Name='$username'");
$result1 = mysql_query("SELECT * FROM Persons
WHERE Password='$password'");
if($row = mysql_fetch_array($result))
  {  
  echo "用户 ";
  echo $row['Name'];
  if($row = mysql_fetch_array($result1))
  {
  echo "登录成功";
  echo "<br />";
  setcookie("mycookie_name", $username);
  setcookie("count", ++$count);
  echo "您已访问 ";
  echo $_COOKIE["count"];
  echo " 次";
  }
else{
  echo "密码错误";
}

  }
else{
  echo "该用户没有注册！";
}



?>
<html>
<head><meta charset="utf-8"/>
</head>
<body>

<a href="logout.php">返回</a>
</body>
<ml>

