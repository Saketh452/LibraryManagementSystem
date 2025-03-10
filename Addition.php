<?php
session_start();
if(!isset($_SESSION['employee_id']))
header('location:http://localhost/library/Interface.php');
?>
<!DOCTYPE html>
 <html>
 <head>
 <style>
 
 form
 {
 font-weight:bold;
 font-size:30px;
 color:purple;
 font-style: italic;
 }
 .i1
 {
 border:solid;
 font-size:30px;
 border-radius:10px;
color:green;
text-align:center;
 }
 .i2
 {
 border:solid;
 font-size:30px;
 border-radius:10px;
 color:red;
 text-align:center;
 }
 .rad{ width:40px; height:40px; }
 #hh
 {
 border:solid;
 background-color:gray;
 border-radius:20px;
 color:orange;
 font-size:50px;
 text-align:center;
 }
 img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
 </style>
	 <title>Library Registration</title>
	 <h2 id="hh">LIBRARY REGISTRATION FOR EMPLOYEE<h2><hr><hr>
	 <meta charset="UTF-8"/>
	 <link rel="stylesheet" href="" type="text/css"/>
 </head>
	 <body bgcolor="khaki">
	 <script>
	 function check()
	 {
	 var result=true;
	 var x=document.getElementsByTagName('input');
	 if(x[0].value==x[1].value || x[10].value==x[11].value )
	 {result=false;
	 alert ("student's name & fathers name; username & password; can't be same");}
	 return(result);
	 
	 }
	 </script>
	 <p style="text-align:center"><mark><b>*All fields required</b></mark></p>
	 <p><img id="show"border="5px"height="200"width="200" /></p>
	 <form action="RegistrationDoneEm.php" method="post"onsubmit="return check()" enctype="multipart/form-data">
	 <table>
	 <tr>
	 <td>Employee Name</td>
	 <td><input class="i1"type="text" name="uname"id="uname"pattern="[A-Za-z\s]{6,20}"required/></td>
	 </tr>
	 <tr>
	 <td>Father's Name</td>
	 <td><input class="i1"type="text" name="fname"id="fname"pattern="[A-Za-z\s]{5,20}"required/></td>
	 </tr>
	 <tr>
	 <td>Employee Id</td>
	 <td><input class="i1"type="text" name="Rno"pattern="[A-Za-z]{4}[0-9]{10}"title="first four characters must be alphabets & then 10 numbers"required/></td>
	 </tr>
	 <tr>
	 <td>Date Of Birth</td>
	 <td><input class="i1"type="date" name="dob"required/></td>
	 </tr>
	 <tr>
	 <td>Gender</td>
	 <td style="font-size:40px;color:black;text:50px;"><input type="radio" class="rad" name="gender"value="MALE"required/>Male<input type="radio"class="rad" name="gender"value="FEMALE"required/>Female<input type="radio"class="rad" name="gender"value="TRANS"required/>Others</td>
	 </tr>
	 <tr>
	 <td>Email</td>
	 <td><input class="i1"type="email" name="umail" placeholder="example@gmail.com"required/></td>
	 </tr>
	 <tr>
	 <td><label for="ucontact">Contact number</label></td>
	 <td><input class="i1"type="tel" name="ucontact"oninvalid="alert('Please enter correct phone number');"pattern=".{10}"required/></td>
	 </tr>
	 <tr>
	 <td>District</td>
	 <td><select class="i1"name="district"required>
	 <option></option>
	 <option>Anantnag</option>
	 <option>Srinagar</option>
	 <option>Bandipora</option>
	 <option>Baramulla</option>
	 <option>Ganderbal</option>
	 <option>Budgam</option>
	 <option>Kulgam</option>
	 <option>Kupwara</option>
	 <option>Pulwama</option>
	 <option>Shopian</option>
	 </select>
	 </td>
	 </tr>
	 <tr>
	 <td>Locality</td>
	 <td><input class="i1"type="text" name="locality"required/></td>
	 </tr>
	 <tr>
	 <td>Create Password</td>
	 <td><input class="i1"type="password" name="password" pattern=".{6,12}"placeholder="6-12 characters"required/></td>
	 </tr>
	 <tr>
	 <td>Upload Photo</td>
	 <td><input type="file"name="myimage" multiple accept="image/*"class="i1" onchange="display(event)"required/></td>
	 </tr>
	</table>
	<p style="text-align:center"><input class="i2"type="submit"value="Register"/>
	<input class="i2"type="reset"/>
	</p>
	 </form>
 <script>function display(event) { var image = document.getElementById('show'); 	image.src = URL.createObjectURL(event.target.files[0]); }; </script>
 <p><u>“Any one who violates the rules and regulations of the library, would be liable to lose the privilege of library membership.”</u></p>
	
	 </body>
 </html>