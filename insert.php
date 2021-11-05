<?php

if(isset($_POST['submit'])){

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$fathername=$_POST["fathername"];
$mothername=$_POST["mothername"];
$password=$_POST["password"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$address=$_POST["address"];
$course=$_POST["course"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$city=$_POST["city"];

mysql_connect("localhost","root","");
mysql_select_db("register");

$result=mysql_query("insert into registertable values('$firstname','$lastname','$fathername','$mothername','$password','$email','$contact','$address','$course','$gender','$dob','$city')");
}
?>


