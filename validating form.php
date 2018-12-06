
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="form.css?v=<?=time();?>">
</head>
<body>
<div id="container">
<div id="card">
<legend style="text-align:center; background-color:#FFFF99;height:100px; line-height:100px;font-weight:bold;font-size:30px;">REGISTER</legend>
<br>
<form method="post" action="" enctype="multipart/form-data">
<label>Full Name:<br><input type="text"  name="username" class="box" id="na" required></label><br>
<div id="name" style="color:red;"></div><br>
<input type="radio" name="gender" value="m" style="font-size:20px; font-weight:bold;" id="radio">
<label for="radio" style="font-weight:bold; font-size:20px;"> Male</label>
<input type="radio" name="gender" value="f" style="font-size:20px; font-weight:bold;" id="radio1">
<label for="radio1" style="font-weight:bold; font-size:20px;"> Female</label><br>
<label>E-Mail:<br><input type="text" name="mail" class="box" id="e" required></label><br>
<div id="E-Mail" style="color:red;"></div><br>
<label for="pwd">Password:<br></label>
<input type="password" name="pwd1" id="pwd1" placeholder="Enter password" class="box" required><br>
<div id="pwa"></div>
<br><br><BR>
<label for="pwd">Confirm Password:<br></label>
<input type="password" name="pwd2" id="pwd2" placeholder="Confirm password" class="box" required><br>
<div id="pwb"></div>
<br><br>
<label> Address:<br><input type="text" name="adrs" class="box"></label><br><br>
<div id="address"></div><br>
<label>ZIP Code:<br><input type="text"  name="zip" class="box" maxlength="6" id="z"></label><br><br>
<div id="zip" style="color:red;"></div><br>
<label>Upload profile picture:<br><br><input type="file"  name="image"></label><br><br>
<input type="submit" value="SUBMIT" name="submit" class="button" onclick="check();">
</form><br>
<?php include('register.php');?><br>
<?php include('upload.php');?>
<br>
<div style="background-color:#FFFF66; height:100px; padding-top:20px;">Aleady having account? return to main page click <a href="login form.php">login</a> at right up corner to enjoy our confort online shopping experience!</div>
</div>
</div>
<script>
function check()
{
 var name1=document.getElementById("name");
 var mail=document.getElementById("E-Mail");
 var zip1=document.getElementById("zip");
 var pwx=document.getElementById("pwa");
 var pwy=document.getElementById("pwb");
 var pwx1=document.getElementById("pwd1");
 var pwy2=document.getElementById("pwd2");
 var alpha1=/^[a-zA-Z ]+$/;
 var alpha3=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
 var alpha4=/[0-9]{6}$/;
 var alpha5=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
 
 if(!na.value.match(alpha1))
 {
 name1.innerHTML="for yor name please use alpabats only";
 event.preventDefault();
}
 
if(!e.value.match(alpha3))
 {
 mail.innerHTML="E-Mail format incorrect";
 event.preventDefault();
}
if(!z.value.match(alpha4))
 {
 zip1.innerHTML="zip code cannot exceed or less then 6 digit";
 event.preventDefault();
}
if(!pwd1.value.match(alpha5))
{
 pwx.innerHTML="Minimum eight characters, at least one letter and one number";
 event.preventDefault();
}
if(pwx1.value!=pwy2.value)
{
pwy.innerHTML="password does not match";
event.preventDefault();
}
}
</script>
</body>
</html>
