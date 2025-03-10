<?php
	$uname=$_POST['uname'];
	$fname=$_POST['fname'];
	$Rno=$_POST['Rno'];
	$dob=$_POST['dob'];
        $gender=$_POST['gender'];
	$umail=$_POST['umail'];
	$ucontact=$_POST['ucontact'];
	$district=$_POST['district'];
	$locality=$_POST['locality'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'lms');
	$q="INSERT INTO admin (name,fathers_name,employee_id,dob,gender,email,contact,district,locality,password) values ('$uname','$fname','$Rno','$dob','$gender','$umail',$ucontact,'$district','$locality','$password')";
	$status=mysqli_query($con,$q);
        mysqli_close($con);	
 ?>
<?php
$f=$_FILES['myimage'];
	if($f['type']=="image/jpeg")
	{
	move_uploaded_file($f['tmp_name'],"libphoto/".$Rno);
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>registration done</title>
</head>
<body bgcolor="green">
<h2>library Management System</h2>
<p><?php
if($status==1)
echo "Dear Employee you have succesfully registered";
else
echo "Registration failed ,try again";
?>
</p>
<p><b>
Register again <a href="AddAdmin.php">Here</a><br><hr>
Go to login page <a href="Interface.php">Here</a></b></p>
</body>
</html>