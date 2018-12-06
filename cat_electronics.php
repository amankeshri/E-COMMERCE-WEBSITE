<!DOCTYPE html>
<html>
	<head>
		<title>BuyCART</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
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
        <script src="boot1/js/jquery-1.11.3.min.js"></script>
        <script src="boot1/js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		</style>
	</head>
	<body>
	
</head>
<body>
<header class="header"><a href="e-lobstore.php"><input type="image" id="homebtn" src="pics/logo1.png" style="float:left; height:100px; width:200px; margin-left:-10px; margin-top:-15px;"></a> 
<form method="post" id="form">		
<input type="text" name="search_text" id="search_text" action="cat_electronics.php" placeholder="What you are looking for?" class="form-control" />			
<input type="image" alt="submit" src="pics/button.png" id="button">
<a href="login form.php" class="logreg" id="log">Login / Register</a>
<img src="pics/profile.png" style="width:40px; height:40px; float:right; margin-right:20px; border-radius:2em; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">
<br>
</form>
<div id="list2">
<ul>
   <li  onclick="pop()"><a href="#" id="nav2">NAVIGATOR<img src="pics/up.png" id="up"></a>
   <div id="list3">
      <ul>
	    <li><a href="cat_mobiles.php" class="listext">MOBILES</a></li>
		<li><a href="cat_electronics.php" class="listext">ELECTRONICS</a></li>
		<li><a href="cat_fashion.php" class="listext">FASHION</a></li>
		<li><a href="cat_books.php" class="listext">BOOKS</a></li>
		<li><a href="cat_sports.php" class="listext">SPORTS</a></li>
		<li><a href="cat_kids.php" class="listext">KIDS</a></li>
		<li><a href="cat_grocery.php" class="listext">GROCERY</a></li>
		</ul>
		</div>
   </li>
</ul>
</div>
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

		
		<div class="container" style="padding-top:80px;">
			<br />
			<br />
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a class="navbar-brand" href="/">BUYCART</a>
					</div>
					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">Rs 0.00</span>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			<div id="popover_content_wrapper" style="display: none">
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
<div>
			<?php
$connect = mysqli_connect("localhost", "root", "", "example");
$output = '';
if(isset($_POST["search_text"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["search_text"]);
	$query = "SELECT * FROM tbl_product WHERE name LIKE '%".$search."%'";
	echo "<script type='text/javascript'>document.getElementById(catHead).innerHTML='';</script>";
}
else
{
	$query = "SELECT * FROM tbl_product WHERE category='electronics';";
	
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<div class="col-md-3" style="margin-top:12px;">  
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
            	<img src="images/'.$row["image"].'" class="img-responsive" /><br />
            	<h4 class="text-info">'.$row["name"].'</h4>
            	<h4 class="text-danger">Rs: '.$row["price"] .'</h4>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
        </div>
		';
	}
	echo $output;
}
else
{
	$output .='<center><figure style="height:200px;width:200px;"><img src="pics/bird.gif" style="width:100%"> 
	<figcaption style="font-family:cursive; color:red; font-size:20px;">No item found</figcaption></figure></center>';	
	echo $output;
	echo"<br><br>";
}   
?>


			</div>
			
		</div>
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
			alert("Please Enter Number of Quantity");
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
<div class="below" style="padding-top:20px">
<a href="cat_mobiles.php" class="choice">MOBILES</a>
<a href="cat_electronics.php" class="choice">ELECTRONICS</a>
<a href="cat_fashion.php" class="choice">FASHION</a>
<a href="cat_books.php" class="choice">BOOKS</a>
<a href="cat_sports.php" class="choice">SPORTS</a>
<a href="cat_kids.php" class="choice">KIDS</a>
<a href="cat_grocery.php" class="choice">GROCERY</a>
</div>
<footer style="width:100%;height:100%;background-color:#000033; text-align:center; margin-top:70px;">
<br>
<center><img src="pics/logo1.png" style="height:150px; width:300px;"></center>
<a href="https://www.facebook.com/lobsangj1" target="_blank" id="icon2"><img src="pics/facebook.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a>
<a href="#" id="icon2"><img src="pics/gmail.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a>
<a href="#" id="icon2"><img src="pics/twitter.png" style="width:50px; hieght:50px; margin:50px; margin-top:-6px;"></a><br>
Copyright © 2014-2016 LOBSTORE ONLINE SHOPPING All rights reserved.<br><br>
<a href="#">About</a> | <a href="#">Contact</a> | <a href="#">Advertise</a> | <a href="#">Terms & Privacy</a> | <a href="#">Policy</a> 
</footer>
</body>