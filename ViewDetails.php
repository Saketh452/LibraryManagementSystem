<?php
session_start();
if(!isset($_SESSION['registration_no']))
header('location:http://localhost/library/Interface.php');
?>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$reg=$_SESSION['registration_no'];
$q="Select * from users where registration_no='$reg' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW DETAILS</title>
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
th{
background-color:orange;}
th,td{
border:2px solid brown;}
img{
border:3px solid brown;
width:200px;
height:200px;
display:block;
margin:auto;}
h1,h3{
color:green;
text-align:center;}
</style>
</head>
<body>
<h1>Library Management System</h1>
<h3>Here is your requested details</h3>
<table id="t1" caption="Books TAKEN">
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<img src="libphotos/<?php echo $row['registration_no'] ?>"/>
<tr>
<th>Student's Name</th>
<td><?php echo $row['name'];?></td>
</tr>
<tr>
<th>Father's Name</th>
<td><?php echo $row['fathers_name'];?></td>
</tr>
<tr>
<th>Registration Number</th>
<td><?php echo $row['registration_no'];?></td>
</tr>
<tr>
<th>Date Of Birth</th>
<td><?php echo $row['dob'];?></td>
</tr>
<tr>
<th>Gender</th>
<td><?php echo $row['gender'];?></td>
</tr>
<tr>
<th>Branch</th>
<td><?php echo $row['branch'];?></td>
</tr>
<tr>
<th>District</th>
<td><?php echo $row['district'];?></td>
</tr>
<tr>
<th>Locality</th>
<td><?php echo $row['locality'];?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row['email'];?></td>
</tr>
<tr>
<th>Contact Number</th>
<td><?php echo $row['contact'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
