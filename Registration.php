<!DOCTYPE html>
 <html>
 <head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <style>
 form
 {
 font-weight:bold;
 font-size:30px;
 color:purple;
 font-style: italic;
 }
nav{
float:left;
width:60%;
height:800px;}
article{
float:left;
width:40%;}
@media (max-width:600px){
nav,article{
width:100%;
height:auto;
}}
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
 font-size:50px;
 border-radius:10px;
 color:red;
 text-align:center;
 }
 .rad{ width:40px; height:40px; }
 #hh
 {
 border:solid;
 background-color:gray;
 border-radius:15px;
 color:orange;
 font-size:30px;
 text-align:center;
 }
 img {
  display: block;
}
 </style>
	 <title>Library Registration</title>
	 <h2 id="hh">LIBRARY REGISTRATION<h2><hr><hr>
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
	 <section>
          <nav><form action="RegistrationDone.php" method="post"onsubmit="return check()" enctype="multipart/form-data">
	 <table>
	 <tr>
	 <td>Student's name</td>
	 <td><input class="i1"type="text" name="uname"id="uname"pattern="[A-Za-z\s]{6,20}"required/></td>
	 </tr>
	 <tr>
	 <td>Father's Name</td>
	 <td><input class="i1"type="text" name="fname"id="fname"pattern="[A-Za-z\s]{5,20}"required/></td>
	 </tr>
	 <tr>
	 <td>Enrollment No</td>
	 <td><input class="i1"type="text" name="Rno" placeholder="iust0118010800"pattern="[A-Za-z]{4}[0-9]{10}"title="first four characters must be alphabets & then 10 numbers"required/></td>
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
	 <td>Branch</td>
	 <td><select class="i1"name="branch"required>
	 <option></option>
	 <option>CSE</option>
	 <option>ME</option>
	 <option>EE</option>
	 <option>CE</option>
	 <option>E&C</option>
	 </select>
	 </td>
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
        </nav>
        <article>
 <p><img id="show"border="5px"height="200"width="200" /></p>
        </article>
</section>
 <script>function display(event) { var image = document.getElementById('show'); 	image.src = URL.createObjectURL(event.target.files[0]); }; </script>
<footer><p><u>“Any one who violates the rules and regulations of the library, would be liable to lose the privilege of library membership.”</u></p>
</footer>	
	 </body>
 </html>