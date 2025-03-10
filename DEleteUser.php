<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>User Deletion</title>
<style>
body{
text-align:center;
color:red;
font-size:40px;}
table{
margin-left:300px;}
input{
color:orange;
border:2px solid black;
border-radius:15px;
font-size:40px;}
</style>
<script>
function validation(){
var x=confirm("THIS USER WILL BE PERMENANTLY DELETED, & THIS ACTION CAN'T BE REVERSED...CONFIRM!");
return x;}
</script>
</head>
<body bgcolor="pink">
<h2 style="color:yellow">Library Management System</h2>
<h3 style="color:brown">Delete User Here</h3>
<form action="DeleteUserh.php" method="post" onsubmit="return validation()">
<table width="60%">
<tr>
<th>REGISTRATION NUMBER</th>
<td><input type="text" pattern="[A-Za-z]{4}[0-9]{10}"title="enter valid registration number IUSTXXXXXXXXXX"name="rno"required/>
</tr>
<tr>
<th>DATE OF BIRTH</th>
<td><input type="date"name="dob"required/>
</tr>
</table>
<br><hr><input type="submit" value="Delete"/>
</form>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>