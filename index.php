<?php
session_start();
include('logout.php');
?>
<!DOCTYPE HTML>
<HTML>
<head>
<title>E-LOBSTORE</title>
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
<header class="header"><a href="e-lobstore.php"><input type="image" id="homebtn" src="pics/logo1.png" style="float:left; height:100px; width:200px; margin-left:-10px; margin-top:-15px;"></a> 
<form method="post" action="product.php" id="form">
<input type="text" name="search_text" id="search_text" action="product.php" placeholder="What you are looking for?" class="form-control" />
<input type="image" alt="submit" src="pics/button.png" id="button">
<?php 
     $output="";
     if(isset($_SESSION['mail'])){
		  $output.='<div class="logreg1">Welcome to '.$_SESSION['username'].'</div>
		  <a href="profile.php"><img src="'.$_SESSION['profile'].'" style="width:40px; height:40px; float:right; margin-right:20px; border-radius:2em; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);"></a>';
		  echo $output;
	 }else{
               $output.='<a href="login form.php"  class="logreg" id="log">Login / Register</a>
			   <img src="pics/profile.png" style="width:40px; height:40px; float:right; margin-right:20px; border-radius:2em; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">';
			   echo $output;
	 }	 
?>
</form>
<?php 
     $output="";
     if(isset($_SESSION['mail'])){
		  $output.='<form method="POST" action="">
<input type="submit" name="logout" value="logout" class="logreg" style="margin-top:-10px; background-color:rgba(225,225,225,0.1);border:none;">
</form>';
		  echo $output;
	 }
?>

<div id="list2">
<ul>
   <li  onclick="pop()"><a href="#" id="nav2">NAVIGATOR<img src="pics/up.png" id="up"></a>
   <div id="list3">
      <ul>
	    <li><a href="product.php?id=<?php echo"mobiles";?>" class="listext">MOBILES</a></li>
		<li><a href="product.php?id=<?php echo"electronics";?>" class="listext">ELECTRONICS</a></li>
		<li><a href="product.php?id=<?php echo"fashion";?>"  class="listext">FASHION</a></li>
		<li><a href="product.php?id=<?php echo"book";?>"  class="listext">BOOKS</a></li>
		<li><a href="product.php?id=<?php echo"sport";?>" class="listext">SPORTS</a></li>
		<li><a href="product.php?id=<?php echo"kids";?>" class="listext">KIDS</a></li>
		<li><a href="product.php?id=<?php echo"grocery";?>" class="listext">GROCERY</a></li>
		</ul>
		</div>
   </li>
</ul>
</div>
<script>
function pop(){
               var popup=document.getElementById("list3")
			   var rotate=document.getElementById("up");
			   if(rotate.style.transform=="rotate(0deg)"){
			   rotate.style.transition="0.40s";
			   rotate.style.transform="rotate(180deg)";
			   }
			   else{
			         rotate.style.transition="0.40s";
			         rotate.style.transform="rotate(0deg)";
					 }
			   
			   if(popup.style.display=="none"){
			   popup.style.display="block";
			   }
			   else{
			   popup.style.display="none";
			   }
				
}
</script>
</header>

<div class="container" style="width:102%; margin-left:-15px; padding-top:81px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="pics/fashion1.jpg"  style="width:100%; height:900px;">
      </div>

      <div class="item">
        <img src="pics/fashion2.jpg"  style="width:100%; height:900px;">
      </div>
    
      <div class="item">
        <img src="pics/fashion3.jpg" style="width:100%; height:900px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="below">
<a href="product.php?id=<?php echo"mobiles";?>" class="choice">MOBILES</a>
<a href="product.php?id=<?php echo"electronics";?>" class="choice">ELECTRONICS</a>
<a href="product.php?id=<?php echo"fashion";?>" class="choice">FASHION</a>
<a href="product.php?id=<?php echo"book";?>" class="choice">BOOKS</a>
<a href="product.php?id=<?php echo"sports";?>" class="choice">SPORTS</a>
<a href="product.php?id=<?php echo"kids";?>" class="choice">KIDS</a>
<a href="product.php?id=<?php echo"grocery";?>" class="choice">GROCERY</a>
</div>
<footer style="width:100%;height:100%;background-color:#000033; text-align:center;">
<br>
<center><img src="pics/logo1.png" style="height:150px; width:300px;"></center>
<a href="https://www.facebook.com/lobsangj1" target="_blank" id="icon2"><img src="pics/facebook.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a>
<a href="#" id="icon2"><img src="pics/gmail.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a>
<a href="#" id="icon2"><img src="pics/twitter.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a><br>
Copyright © 2014-2016 LOBSTORE ONLINE SHOPPING All rights reserved.<br><br>
<a href="#">About</a> | <a href="#">Contact</a> | <a href="#">Advertise</a> | <a href="#">Terms & Privacy</a> | <a href="#">Policy</a> 
</footer>
</html>

