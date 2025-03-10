
<!DOCTYPE html>
<head>
<style>
div{
color:green;
border-radius:20px;}
</style>
</head>
<h2>Library Management System</h2>
<body bgcolor="pink">
<?php
$registration_no=$_POST['rno'];
$dob=$_POST['dob'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="SELECT * FROM admin WHERE employee_id='$registration_no' && dob='$dob' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$newpass=rand(1000,99999);
$n="update admin set password='$newpass' where employee_id='$registration_no' ";
$status=mysqli_query($con,$n);
?>
<div>
<?php
if($status==1)
{
echo " DEAR EMPLOYEE PLEASE NOTE YOUR NEW PASSWORD: $newpass" ;
}
else
{
echo "no connection, some problem occured";
}
}
else
{
echo "EMPLOYEE WITH THESE DETAILS DOESN'T EXIXT";
}
 ?>
</div>
<p>Go To Login Page <a href="Interface.php"> HERE</a> </p>
</body>
</html>