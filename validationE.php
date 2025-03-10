<?php
session_start();
$employee_id=$_POST['employee_id'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="select * from admin where employee_id='$employee_id' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['employee_id']=$employee_id;
header('location:http://localhost/library/EmployeeHome.php');
}
else
{
header('location:http://localhost/library/Interface.php');
echo "wrong credentials, try again";
}
 ?>