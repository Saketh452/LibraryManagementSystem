<?php
session_start();
if(!isset($_SESSION['registration_no']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>USER'S HOME PAGE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
button{
animation:blinker 2s linear infinite;
padding:10px;
border-radius:10px;
background-color:pink;
color:brown;
font-weight:bold;
font-size:20px;}
h3{
animation:blinker 3s linear infinite;
color:tomato;
text-align:center;
}
@keyframes blinker{
50%{
opacity:0;
}
}
     .fa {
  padding: 15px;
  font-size: 30px;
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
background-color:salmon;
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
background-color:TEAL;
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
#d5{
background-color:sky;
width:100%;
height:150px;
border-radius:40px;
text-align: center;
margin: auto;}
.c1
{
font-weight:bold;
text-align:center;
font-family:Comic Sans MS; 
padding-top:20px;
font-size:50px;
text-shadow:2px 3px 5px khaki;
}
a
{
display:block;
text-align:center;
font-size:40px;
}
h1{
color:rgb(200,100,100);
text-align:center;
}
#clk{
color:green;
font-weight:bold;
background-color:pink;
font-size:50px;
margin-left:1170px;
width:270px;
text-align:center;
border-radius:20px;}
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
<h1>Library Management System</h1>
<?php
$nam=$_SESSION['registration_no'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="SELECT name FROM users WHERE registration_no='$nam' ";
$result=mysqli_query($con,$q);
mysqli_close($con);
$row=mysqli_fetch_array($result);
?>
<h3>WELCOME DEAR <?php echo $row['name'];?></h3>
<button onclick="window.location.href='Sadam.php';">VIEW DEVELOPER</button><p id="clk"></p>
<div id="d1">
<p class="c1">View All Available Books Here<p>
<a href="ViewBooks.php"> Click Me!</a>
</div>
<div id="d2">
<p class="c1">View Your Issued Books<p>
<a href="IssuedBooks.php"> Click Me!</a>
</div>
<div id="d3">
<p class="c1">View Your Personal Details<p>
<a href="ViewDetails.php"> Click Me!</a>
</div>
<div id="d4">
<p class="c1">Logout From Here<p>
<a href="Logout.php"> Click Me!</a>
</div>
<div id="d5">
<a href="https://twitter.com/myselfsadam_?s=09" class="fa fa-twitter"></a><a href="https://www.youtube.com/channel/UClC95wyDHN43yj7hMWoq8lw" class="fa fa-youtube"></a><a href="https://login.yahoo.com/?.src=fpctx&.intl=in&.lang=en-IN&.done=https://in.yahoo.com" class="fa fa-yahoo"></a><a href="https://api.whatsapp.com/send?phone=917889422245" class="fa fa-whatsapp"></a><hr>
</div>	 
</body>
</html>