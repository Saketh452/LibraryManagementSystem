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
background-color:khaki;
color:magenta;
border:2px solid red;
border-radius:3px;
width:70%;
height:100%;
font-weight:bold;
font-family:Caveat;
font-size:40px;
margin-left:300px;
border-collapse:collapse;
}
th{
border:2px solid red;
border-radius:15px;
}
td{
border:2px solid red;
border-radius:15px;
width:30%;
}
input{
font-size:20px;
padding:20px;}
.b1{
background-color:lightpink;
border:3px solid black;
text-align:center;
padding:3px;
margin-left:190px;
border-radius:15px;
font-size:50px;}
</style>
</head>
<body bgcolor="pink">
<form action="Insertion.php" method="post">
<table>
<tr>
<th>Book Name</th>
<td><input type="text" name="book"pattern="[A-Za-z\s]{4,40}"title="text only with 4-40 characters"required></td>
</tr>
<tr>
<th>Book Id</th>
<td><input type="number" name="bookid"pattern=".{2,20}"title="numbers only with 2-20 characters"required></td>
</tr>
<tr>
<th>Book Author</th>
<td><input type="text" name="bookaut"pattern="[A-Za-z\s]{4,40}"title="text only with 4-40 characters"required></td>
</tr>
<tr>
<th>Book Price</th>
<td><input type="number" name="bookpri"step="any'title="number with two decimal places only"required></td>
</tr>
<tr>
<th>Book Publisher</th>
<td><input type="text" name="bookpub"pattern="[A-Za-z\s]{4,40}"title="text only with 4-40 characters"required></td>
</tr>
</table><hr><input class="b1"type="reset" value="CLEAR RECORD">
 <input class="b1"type="submit" value="ADD BOOK">
</form>
</body>
</html>