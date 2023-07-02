<?php
$a=$_POST["n"];
$b=$_POST["p"];
$c=$_POST["e"];
$d=$_POST["d"];
$e=$_POST["g"];
$f=$_POST["j"];
$con = mysql_connect("localhost","root","");
mysql_select_db("rahul");
mysql_query("insert into data(n,p,e,d,g,j) values('$a','$b','$c','$d','$e','$f')");
echo("registered");
include("register.php");
mysql_close($con);
?>