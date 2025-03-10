<?php
	$uname=$_POST['uname'];
	$fname=$_POST['fname'];
	$Rno=$_POST['Rno'];
	$dob=$_POST['dob'];
        $gender=$_POST['gender'];
	$branch=$_POST['branch'];
	$umail=$_POST['umail'];
	$ucontact=$_POST['ucontact'];
	$district=$_POST['district'];
	$locality=$_POST['locality'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'lms');
	$q="INSERT INTO users (name,fathers_name,registration_no,dob,gender,branch,district,locality,email,contact,password) values ('$uname','$fname','$Rno','$dob','$gender','$branch','$district','$locality','$umail',$ucontact,'$password')";
	$status=mysqli_query($con,$q);
        mysqli_close($con);	
 ?>
<?php
$f=$_FILES['myimage'];
	if(file_exists("libphotos/".$Rno))
	{
	echo $f['name'].""."already exists";
	}
	else if($f['type']=="image/jpeg")
	{
	move_uploaded_file($f['tmp_name'],"libphotos/".$Rno);
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
echo "Dear user you have succesfully registered";
else
echo "Registration failed ,try again";
?>
</p>
<p><b>
Register again <a href="Registration.php">Here</a><br><hr>
Go to login page <a href="index.php">Here</a></b></p>
</body>
</html>