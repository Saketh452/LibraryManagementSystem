<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
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
.b2{
background-color:brown;
color:blue;
padding:5px;
border-radius:15px;
font-size:35px;}
</style>
</head>
<body>
<h1 style="color:yellow">Library Management System</h1>
<h3>Here You Can Update Book Records</h3>
<form action="Updation.php" method="post"><table id="t1" caption="Books Available">
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
<td><input type="text" name="book<?php echo $i;?>" value="<?php echo $row['name'];?>"required/></td>
<td><?php echo $row['book_id'];?><input type="hidden" name="bookid<?php echo $i;?>"value="<?php echo $row['book_id'];?>"required/></td>
<td><input type="text" name="author<?php echo $i;?>"value="<?php echo $row['author'];?>"required/></td>
<td><input type"number" name="price<?php echo $i;?>"value="<?php echo $row['price'];?>"required/></td>
<td><input type="text" name="publisher<?php echo $i;?>"value="<?php echo $row['publisher'];?>"required/></td>
</tr>
<?php
}
?>
</table>
<input class="b2" type="submit"value="Update Books"/>
</form>
</body>
</html>
