<?php
session_start();
if(!isset($_SESSION['registration_no']))
header('location:http://localhost/library/Interface.php');
?>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$reg=$_SESSION['registration_no'];
$q="Select * from issued_books where registration_no='$reg' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW ISSUED BOOKS</title>
<style>
#t1{
color:black;
border:2px solid green;
margin:5px 5px;
border-collapse:collapse;
background-color:violet;
WIDTH:100%;
height:100%;
padding:2px;
cellspacing:0px;
font-weignt:bold;
font-family:Comic Sans MS;
}
th,td{
border:2px solid brown;}
</style>
</head>
<body>
<h1>Library Management System</h1>
<h3>Here is your requested details</h3>
<table id="t1" caption="Books TAKEN">
<tr style="background-color:cyan">
<th>Book Name</th>
<th>Book Id</th>
<th>Registration Number</th>
<th>Issued Date</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['book_id'];?></td>
<td><?php echo $row['registration_no'];?></td>
<td><?php echo $row['issued_date'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
