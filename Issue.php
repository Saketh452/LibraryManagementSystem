<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<?php
$book=$_POST['book'];
$bookid=$_POST['bookid'];
$registration=$_POST['rno'];
$bookd=$_POST['bookd'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$c="select * from books where book_id='$bookid' ";
$res=mysqli_query($con,$c);
$num=mysqli_num_rows($res);
$b="select * from users where registration_no='$registration' ";
$ress=mysqli_query($con,$b);
$numm=mysqli_num_rows($ress);
if($num==1 && $numm==1)
{
$q="INSERT INTO issued_books (name,book_id,registration_no,issued_date) VALUES ('$book',$bookid,'$registration','$bookd')";
$result=mysqli_query($con,$q);}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Issuence</title>
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
if($num==1 && $numm==1)
echo "Book Issued Successfully";
else
echo "Some Problem Occurred,Either book with this id doesn't exists or user with this id is not registered,Please try again";
?>
</p>
<p><b>Issue More <a href="IssueBook.php">Here</a><br>
</b></p>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>