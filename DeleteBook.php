<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Deletion</title>
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
td,th{
border:2px solid cyan;}
</style>
</head>
<body bgcolor="pink">
<h2 style="color:yellow">Library Management System</h2>
<form action="Deletion.php" method="post">
<table width="60%">
<tr>
<th>BOOK ID</th>
<td><input type="number" name="bookid"/>
</tr>
<tr>
<th><input type="reset" value="Clear"/></th>
<td><input type="submit" value="Delete"/></td>
</tr>
</table>
</form>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>