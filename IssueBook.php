<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table{
border:3px solid brown;
font-size:50px;
margin-left:350px;
border-collapse:collapse;
}
tr,td,th{
border:3px solid brown;
border-radius:15px;
border-collapse:collapse;
}
h1,h3{
color:tomato;}
.b1{
font-size:30px;
border:2px solid brown;
border-radius:15px;
color:blue;
padding:15px;
text-align:center;}
#d1{
display:block;
text-align:center;}
body{
text-align:center;
font_weight:bold;}
.tt{
font-size:20px;
padding:20px;}

</style>
</head>
<body bgcolor="pink">
<h1>Library Management System</h1>
<h3>Issue Book To Any User</h3>
<form action="Issue.php" method="post">
<table>
<tr>
<th>Book Name</th>
<td><input class="tt"type="text" name="book"pattern="[A-Za-z\s]{3,20}"title="only 3-20 letters allowed"required/></td>
</tr>
<tr>
<th>Book Id</th>
<td><input class="tt" type="number" name="bookid"pattern="{3,20}"title="only 3-20 numbers allowed"required/></td>
</tr>
<tr>
<th>Registration Number</th>
<td><input class="tt"type="text" name="rno"pattern="[A-Za-z]{4}[0-9]{10}"title="only 4 letters allowed with 10 numbers"required/></td>
</tr>
<tr>
<th>Issued Date</th>
<td><input class="tt"type="date" name="bookd"required/></td>
</tr>
</table>
<hr><hr>
<div id="d1">
<input class="b1"type="submit" value="ISSUE BOOK"/>
<input class="b1"type="reset"/>
</div>
</form>
<br><br>Do You Want To Go Back To <a href="EmployeeHome.php">HOME</a>
</body>
</html>