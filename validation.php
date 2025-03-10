<?php
session_start();
$registration_no=$_POST['registration_no'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lms');
$q="SELECT * FROM users WHERE registration_no='$registration_no' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['registration_no']=$registration_no;
header('location:http://localhost/library/UserHome.php');
}
else
{
header('location:http://localhost/library/Interface.php');?>
<script>alert("USER WITH SUCH CREDENTIALS DOESN'T EXIST..TRY AGAIN");</script>
<?php
}
 ?>