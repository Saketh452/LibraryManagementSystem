<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<?PHP
$size=sizeof($_POST);
$nesize=$size/5;
for($i=1;$i<=$nesize;$i++)
{
$ind1="book".$i;
$book[$i]=$_POST[$ind1];
$ind2="bookid".$i;
$bookid[$i]=$_POST[$ind2];
$ind3="price".$i;
$price[$i]=$_POST[$ind3];
$ind4="author".$i;
$author[$i]=$_POST[$ind4];
$ind5="publisher".$i;
$publisher[$i]=$_POST[$ind5];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
for($i=1;$i<=$nesize;$i++)
{
$q="update books SET name='$book[$i]',author='$author[$i]',price=$price[$i],publisher='$publisher[$i]' where book_id=$bookid[$i]";
$result=mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Book Updation</title>
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
echo "Book Updated Successfully";
else
echo "Some Problem Occurred,you are making error in syntax,Please insert again";
?></p>
<p><b>Go To Home Page <a href="EmployeeHome.php">Here</a><br>
</b></p>
</body>
</html>