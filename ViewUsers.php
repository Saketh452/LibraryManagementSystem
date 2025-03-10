<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="Select * from users";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW USERS</title>
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
body{
text-align:center;
background-color:pink;}
th,td{
border:2px solid brown;}
</style>
</head>
<body>
<h1 style="color:yellow">Library Management System</h1>
<h3>This Is The List Of Registered Users</h3>
<table id="t1">
<tr style="background-color:cyan">
<th>Student's Name</th>
<th>Father's Name</th>
<th>Registration Number</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>Branch</th>
<th>District</th>
<th>Locality</th>
<th>Email</th>
<th>Contact Number</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fathers_name'];?></td>
<td><?php echo $row['registration_no'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['branch'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['locality'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contact'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
