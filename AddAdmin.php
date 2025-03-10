<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
background-color:pink;
color:brown;
text-align:center;
font-size:30px;}
input{
font-size:15px;
padding:15px;}
#b1{
border-radius:10px;}
#d1{
margin:auto;}
table{
color:green;
margin-left:300px;}
th,td{
text-align:center;}
</style>
<script>
function validation(){
var x=false;
var z=500452;
var y=document.getElementById('code1').value;
if(y==z)
x=true;
if(x==false)
alert("Enter correct code or YOU are not authorised to use this service");
return x;
}
</script>
</head>
<body>
<h1>Library Management System</h1>
<h3>Login Here To Verify Your Identity</h3>
<form action="Addition.php" method="post" onsubmit="return validation()">
<table>
<tr>
<th>ENTER YOUR UNIQUE ADMIN CODE</th>
<td><input id="code1"type="number" name="code"required/></td>
</tr>
</table>
<input id="b1"type="submit" value="verify"/>
</form>
<div id="d1">
<tt><mark>*ONLY SPECIAL MEMBERS HAVE ACCESS TO THIS PAGE!</mark></tt>
</body>
</html>
