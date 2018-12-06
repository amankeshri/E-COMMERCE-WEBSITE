<!DOCTYPE HTML>
<HTML>
<head>
<title>Welcome Login</title>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
 <link rel="stylesheet" type="text/css" href="e-lobstore.css?v=<?=time();?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="online store" />
        <meta name="keywords" content="fashion women men book coat jacket cosmetic trousers inner wear electronics accessories appliances grocery kitchen" />
        <meta name="author" content="lobsang" />
<link rel="stylesheet" type="text/css" href="boot1/css/bootstrap.min.css">
<link rel="stylesheet" href="boot1/css/bootstrap-theme.min.css">
<script src="boot1/js/jquery-1.11.3.min.js"></script>
    <script src="boot1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="cover">
<div class="pop">
<center><legend style="font-weight:bold; font-size:30px;background-color:#FFFF99; height:100px;line-height:100px;">LOGIN</legend></center>
<form method="POST" action="">
<br><br><label for="username" style="font-weight:bold; font-size:20px;">E-mail:</label><br>
<input type="text" name="e-mail" id="username" placeholder="Enter yor E-mail id" required>
<br><br><br>
<label for="pwd" style="font-weight:bold; font-size:20px;">Password:</label><br>
<input type="password" name="pwd" id="pwd" placeholder="Enter password" maxlength="12" required>
<br><br>
<center><div style="color:red; font-size:20px; margin-left:-40px;"><?php include('login.php');?></div></center><br>
<br><br><br>
<input type="submit" name="login1"value="SUBMIT" class="submit">
</form>
<br><br><br>
<a href="e-lobstore.php"><button class="cancel">CANCEL</button></a>
<br><br>
<div style="background-color:#FFFF66; height:90px; padding-top:20px;">Not register yet? <a href="validating form.php" target="_blank">Register</a> here to enjoy our confort online shopping experience!</div>
</div>
</div>
</body>
</html>