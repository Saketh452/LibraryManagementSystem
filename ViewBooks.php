<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="Select * from books";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>VIEW BOOKS</title>
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
<h3>Here is your requested details</h3>
<table id="t1" caption="Books Available">
<tr style="background-color:cyan">
<th>Book Name</th>
<th>Book Id</th>
<th>Author</th>
<th>Price</th>
<th>Publisher</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['book_id'];?></td>
<td><?php echo $row['author'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['publisher'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
