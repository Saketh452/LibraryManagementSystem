<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<?php
$book=$_POST['book'];
$bookid=$_POST['bookid'];
$bookaut=$_POST['bookaut'];
$bookpri=$_POST['bookpri'];
$bookpub=$_POST['bookpub'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="INSERT INTO books (name,book_id,author,price,publisher) VALUES ('$book',$bookid,'$bookaut',$bookpri,'$bookpub')";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Insertion</title>
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
if($result==1)
echo "Book Inserted Successfully";
else
echo "Some Problem Occurred,Either book with this id already exists or you are making error in syntax,Please insert again";
?>
</p>
<p><b>Insert More <a href="InsertBook.php">Here</a><br>
</b></p>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>