<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Return</title>
<style>
body{
text-align:center;
color:red;
font-size:30px;}
table{
margin-left:300px;}
input{
color:orange;
border:2px solid black;
border-radius:15px;
font-size:40px;}
td,th{
border:2px solid cyan;
border-radius:15px;}
#d1{
font-weight:bold;}
</style>
</head>
<body bgcolor="pink">
<h2 style="color:yellow">Library Management System</h2>
<h3 style="color:magenta">Return Book From User</h3>
<form action="Return.php" method="post">
<table width="60%">
<tr>
<th>BOOK ID</th>
<td><input type="number" name="bookid"required/>
</tr>
<tr>
<th>REGISTRATION NUMBER</th>
<td><input type="text" pattern="[A-Za-z]{4}[0-9]{10}"title="4 letters with 10 numbers"name="rno"required/>
</tr>
</table>
<br><hr><div id="d1">
<input type="submit" value="Return Book"/>
</div>
</form>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>