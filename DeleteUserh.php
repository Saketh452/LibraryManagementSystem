<?php
$regn=$_POST['rno'];
$dob=$_POST['dob'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$c="select * from users where registration_no='$regn' && dob='$dob' ";
$res=mysqli_query($con,$c);
$num=mysqli_num_rows($res);
$q="delete from users where registration_no='$regn' && dob='$dob'";
$result=mysqli_query($con,$q);
mysqli_close($con);
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
</style>
</head>
<body bgcolor="pink">
<h2 style="color:yellow">Library Management System</h2>
<p><?php
if($num==1)
echo "User Removed Successfully";
else
echo "Some Problem Occurred,Either user with this id doesn't exist or you are making error in credentials,Please delete again";
?>
</p>
<p><b>Delete More <a href="DeleteUser.php">Here</a><br>
</b></p>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>