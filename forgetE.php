<!DOCTYPE html>
<html>
<head>
<title>forget password</title>
<style>
table{
margin-left:450px;
}
h2{
color:brown;
}
body{
background-color:khaki;
text-align:center;
font-size:30px;}
</style>
</head>
<body>
<h2>library Management System</h2>
<p><mark>*Date of birth & Employee id</mark></p>
<form action="resetE.php" method="post">
<table>
<tr>
<input type="text" name="rno"style="width:40%;text-align:center;" pattern="[A-Za-z]{4}[0-9]{10}"title="4 letters 10 numbers" placeholder="EMPLOYEE ID HERE"required/><br>
</tr>
<tr>
<input type="date" name="dob"style="width:40%;text-align:center;"placeholder="DATE OF BIRTH HERE"required/>
</tr>
</table>
<tr>
<th><input type="submit" value="reset password"/></th>
</tr>
</form>
</body>
</html>
