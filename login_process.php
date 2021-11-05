<?php

$host="localhost";
$user="root";
$password="";
$db="register";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from registertable where email='".$username."' AND password='".$password."' limit 1";	
	
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==1)
	{
		while($row=mysql_fetch_array($result,MYSQL_BOTH))
		{
			$first_name = $row[0];
			$last_name = $row[1];
			$mob_no = $row[6];
			$course = $row[8];
		}
		?>
		<html>
		<body bgcolor="#CCFFCC">
		<font color="#FF3300" size="4">Welcome <?php echo $first_name; ?>  <?php echo $last_name; ?>.</font>
		<br>
		<font color="red" size="3"> Course : <?php echo $course; ?> and Contact No : <?php echo $mob_no; ?></font>
		</body>
		</html>
<?php
	}		
	else
	{
	header("location:error.php");
		}
				}
?>

