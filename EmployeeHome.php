<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>EMPLOYEE'S HOME PAGE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
     .fa {
  padding: 15px;
  font-size: 10px;
  width: 50px;
  text-align:center;
  text-decoration: none;
  margin:400px auto 3px auto;
  }
	 .fa:hover{
	 opacity:0.7;
	 }
	 .fa-twitter{
	 background: #55ACEE;
  color: white;
	 }
	 .fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-yahoo {
  background: #430297;
  color: white;
}
.fa-whatsapp {
  background:green;
  color: white;
}
#d1
{
background-color:tomato;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d2
{
background-color:magenta;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d3
{
background-color:blue;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d4
{
background-color:cyan;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d5
{
background-color:plum;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d6
{
background-color:salmon;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d7
{
background-color:yellow;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d8
{
background-color:lime;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
#d9{
width:100%;
height:150px;
border-radius:40px;
text-align: center;
margin:auto;}
#d10{
background-color:rgb(123,3,178);
color:black;
width:100%;
height:250px;
border-radius:40px;}
#d11{
background-color:rgb(123,223,78);
color:black;
width:100%;
height:250px;
border-radius:40px;
}
#parent{
width:100%;
display:block;
text-align:center;
margin-left:0px;
}
#d12
{
background-color:black;
color:red;
width:100%;
height:250px;
border-radius:40px;
}
.c1
{
font-weight:bold;
text-align:center;
font-family:Comic Sans MS; 
padding-top:20px;
font-size:50px;
text-shadow:2px 3px 5px khaki;
}
.sa
{
display:block;
text-align:center;
font-size:40px;
}
h1{
color:rgb(200,100,100);
text-align:center;
}
h3{
animation:blinker 3s linear infinite;
color:purple;
text-align:center;
}
#clk{
color:green;
font-weight:bold;
background-color:khaki;
font-size:50px;
margin-left:1170px;
width:270px;
text-align:center;
border-radius:20px;}
button{
animation:blinker 2s linear infinite;
padding:10px;
border-radius:10px;
background-color:pink;
color:brown;
font-weight:bold;
font-size:20px;}
@keyframes blinker{
50%{
opacity:0;
}
}
</style>
<script>
function clock(){
var x=new Date();
var hours=x.getHours();
var minutes=x.getMinutes();
var seconds=x.getSeconds();
minutes=funct(minutes);
seconds=funct(seconds);
document.getElementById('clk').innerHTML=hours+":"+minutes+":"+seconds;
setTimeout(clock,500);}
function funct(z){
if(z<10){z="0"+z;}
return z;}
</script>
</head>
<body onload="clock()">
<h1 id="h1">Library Management System</h1>
<?php
$nam=$_SESSION['employee_id'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="SELECT name FROM admin WHERE employee_id='$nam' ";
$result=mysqli_query($con,$q);
mysqli_close($con);
$row=mysqli_fetch_array($result);
?>
<h3>WELCOME DEAR <?php echo $row['name'];?></h3>
<button onclick="window.location.href='AddAdmin.php';">ADD ADMIN</button><button onclick="window.location.href='SADAM.php';">VIEW DEVELOPER</button>
<p id="clk"></p>
<div id="parent" style="text-align:left">
<a href="#d1">INSERT BOOKS</a>&emsp;
<a href="#d2">DELETE BOOKS</a><br>
<a href="#d3">UPDATE BOOKS</a>&emsp;
<a href="#d4">VIEW BOOKS</a><br>
<a href="#d5">VIEW USERS</a>&emsp;
<a href="#d6">ISSUE BOOKS</a><br>
<a href="#d7">RUTURN BOOKS</a>&emsp;
<a href="#d10">VIEW ISSUED BOOKS</a><br>
<a href="#d11">DELETE USER</a>&emsp;
<a href="#d12">VIEW YOUR PERSONAL DETAILS</a>&emsp;
<a href="#d8">LOGOUT</a>
</div>
<div id="d1">
<p class="c1">Insert Book<p>
<a class="sa"href="InsertBook.php"> Click Me!</a>
</div>
<div id="d2">
<p class="c1">Delete Book From Database<p>
<a class="sa"href="DeleteBook.php"> Click Me!</a>
</div>
<div id="d3">
<p class="c1">Update Book Records<p>
<a class="sa"href="UpdateBook.php"> Click Me!</a>
</div>
<div id="d4">
<p class="c1">View All Available Books<p>
<a class="sa"href="ViewBooks.php"> Click Me!</a>
</div>
<div id="d5">
<p class="c1">View All Users</p>
<a class="sa"href="ViewUsers.php"> Click Me!</a>
</div>
<div id="d6">
<p class="c1">Issue Book<p>
<a class="sa"href="IssueBook.php"> Click Me!</a>
</div>
<div id="d7">
<p class="c1">Return Book From User<p>
<a class="sa"href="ReturnBook.php"> Click Me!</a>
</div>
<div id="d10">
<p class="c1">View All Issued Books<p>
<a class="sa"href="ViewIssued.php"> Click Me!</a>
</div>
<div id="d11">
<p class="c1">Delete User<p>
<a class="sa"href="DEleteUser.php"> Click Me!</a>
</div>
<div id="d12">
<p class="c1">View Your Personal Details<p>
<a class="sa"href="ViewDetailsE.php"> Click Me!</a>
</div>
<div id="d8">
<p class="c1">Logout From Here<p>
<a class="sa"href="Logout.php"> Click Me!</a>
</div>
<br><p>
MOVE BACK TO TOP<a href="#h1">	CLICK ME</a></p>
<div id="d9">
<a href="https://twitter.com/myselfsadam_?s=09" class="fa fa-twitter"></a><a href="https://www.youtube.com/channel/UClC95wyDHN43yj7hMWoq8lw" class="fa fa-youtube"></a><a href="https://login.yahoo.com/?.src=fpctx&.intl=in&.lang=en-IN&.done=https://in.yahoo.com" class="fa fa-yahoo"></a><a href="https://api.whatsapp.com/send?phone=917889422245" class="fa fa-whatsapp"></a><hr>
</div>
</body>
</html>