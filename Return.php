<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<?php
$bookid=$_POST['bookid'];
$regn=$_POST['rno'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$c="select * from issued_books where book_id='$bookid' && registration_no='$regn' ";
$res=mysqli_query($con,$c);
$num=mysqli_num_rows($res);
$q="delete from issued_books where book_id='$bookid' && registration_no='$regn'";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Return</title>
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
echo "Book Returned Successfully";
else
echo "Some Problem Occurred,Either book with this id was not issued earlier or you are making error in syntax,Please try again";
?>
</p>
<p><b>Return More<a href="ReturnBook.php">Here</a><br>
</b></p>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>