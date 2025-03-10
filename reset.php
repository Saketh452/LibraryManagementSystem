
<!DOCTYPE html>
<head>
<style>
div{
color:green;}
</style>
</head>
<h2>Library Management System</h2>
<body bgcolor="pink">
<?php
$registration_no=$_POST['rno'];
$dob=$_POST['dob'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="SELECT * FROM users WHERE registration_no='$registration_no' && dob='$dob' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$newpass=rand(1000,99999);
$n="update users set password='$newpass' where registration_no='$registration_no' ";
$status=mysqli_query($con,$n);
?>
<div>
<?php
if($status==1)
{
echo " DEAR USER PLEASE NOTE YOUR NEW PASSWORD: $newpass" ;
}
else
{
echo "no connection, some problem occured";
}
}
else
{
echo "user with these details doesn't exist";
}
 ?>
</div>
<p>Go To Login Page <a href="Interface.php"> HERE</a> </p>
</body>
</html>