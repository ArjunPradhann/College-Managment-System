<html>
<head>
<title>Registeration form</title>
<link rel="stylesheet" type="text/css" href="register2.css">
</head>
<body>
<div style="padding-bottom:100px";>
<form method="POST" action="insert.php">
<table align="center" style="border-collapse: collapse;border-style:hidden;">
<h1><u><b>Admission Form</b></u></h1>
<tr>
<td><font size="5" face="Book Antiqua, Calibri"> Enter your first name</font></td>
<td><input type="text" name="firstname" size="20" required></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Enter your last name</td>
<td><input type="text" name="lastname" required></td>
</tr>
<tr>
  <td><font size="5" face="Book Antiqua, Calibri">Enter your father's name</td>
  <td><input type"text" name="fathername"  required></td>
</tr>
<tr>
  <td><font size="5" face="Book Antiqua, Calibri">Enter your mother's name</td>
  <td><input type="text" name="mothername" required ></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Enter your password</td>
<td><input type="password" name="password" required></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Enter your e-mail</td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Contact number</td>
<td><input type="text" name="contact" required maxlength="10"></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Enter your Address</td>
<td><textarea rows="8" cols="20" name="address"  required></textarea></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Select your Course</td>
<td>
<select name="course">
<option value="BScit">BSc.it</option>
<option value="BCA">BCA</option>
<option value="MCA">MCA</option>
<option value="MCom">M.Com</option>
<option value="BCom">B.Com</option>
</select>
</td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Select your Gender</td>
<td>male<input type="radio" name="gender" value="m"/> female<input type="radio" name="gender" value="f"/>
</td>
</tr>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Select your DOB</td>
<td><input type="date" name="dob"></td>
</tr>
<tr>
<td><font size="5" face="Book Antiqua, Calibri">Select your City</td>
<td><select name="city">
<option value="Dehradun">Dehradun</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Alwar">Alwar</option>
<option value="Jaipur">Jaipur</option>
<option value="Almora">Almora</option>
<option value="Pithoragarh">Pithoragarh</option>
<option value="Hindawn">Hindawn</option>
<option value="Bharatpur">Bharatpur</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/>
<input type="reset" value="Reset"/>
<h3><a href="cor1.php">Prev.</a> &nbsp; &nbsp;<a href="home1.php">Home</a></h3>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
