<?php
session_start();
include('logout.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>user profile</title>
  <link rel="stylesheet" type="text/css" href="profile.css?v=<?=time();?>">
  <script src="js/jquery-1.8.2.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script>$(document).ready(function(){
$(".edit").click(function(){
$(".edit1").slideToggle("fast");
});
});
</script>
</head>
<body style="background-color:white;">
<header class="profile">
<?php
if(isset($_SESSION['mail'])){
?>	
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="pics/proback.jpg" alt="Profile background"/>
        <img align="left" class="fb-image-profile thumbnail" src="<?php echo $_SESSION['profile'];?>" alt="Profile image"/>
        <div class="fb-profile-text" style="background-color:#2eb7ed;">
            <h1><?php echo $_SESSION['username'];?></h1>
            <p><?php echo $_SESSION['mail'];?></p>
			<p style="margin-left:285px;">ADDRESS : <?php echo $_SESSION['address']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit" style="color:white"> [Edit address]</a></p>
			<form class="edit1" method="post" style="display:none; margin-left:725px;">
			<input type="text" name="change1" placeholder="Provider correct address" style="width:400px;">
			<input type="submit" name="done">
			<?php
$output="";
$connect=mysqli_connect("localhost", "root", "", "example");
if(!$connect){
die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['done'])){
	$addr=$_POST['change1'];
	$mail3=$_SESSION['mail'];
	$sql4="UPDATE `customer` SET `address`='$addr' WHERE `E-mail`='$mail3'";
	if(mysqli_query($connect,$sql4)){ echo "update successful"; $_SESSION['address']=$addr;}else{echo "update fail";};
}
?>

			</form>
			<div style="margin-left:280px;" class="logout1"><h3><?php 
     $output="";
     if(isset($_SESSION['mail'])){
		  $output.='<form method="POST" action="e-lobster.php">
<input type="submit" name="logout" value="logout" class="logreg1" style="margin-top:-10px; background-color:rgba(225,225,225,0.1); border:none;">
</form>';
		  echo $output;
	 }
?></h3>
</div>
        </div>
    </div>
	<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div id="popover_content_wrapper" style="">
				<span id="cart_details"></span>
				<div align="right">
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="glyphicon glyphicon-trash"></span> Clear
					</a>
				</div>
			</div>
			</div>
			</nav>
	
	
	<footer style="width:100%;height:100%;background-color:#000033; text-align:center;">
<br>
<center><img src="pics/logo1.png" style="height:150px; width:300px;"></center>
<a href="https://www.facebook.com/lobsangj1" target="_blank" id="icon2"><img src="pics/facebook.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a>
<a href="#" id="icon2"><img src="pics/gmail.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a>
<a href="#" id="icon2"><img src="pics/twitter.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a><br>
Copyright © 2014-2016 LOBSTORE ONLINE SHOPPING All rights reserved.<br><br>
<a href="#">About</a> | <a href="#">Contact</a> | <a href="#">Advertise</a> | <a href="#">Terms & Privacy</a> | <a href="#">Policy</a> 
</footer>
</div> 	
<?php
}
?>
</header>

</body>
</html>

<script>  
$(document).ready(function(){
	load_cart_data();
	

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    
});

</script>