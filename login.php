<?php 
session_start();
$output="";
$hold="";
$pimg="";
$email="";
$connect=mysqli_connect("localhost", "root", "", "example");
if(!$connect){
die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['login1'])){
	$emailuid=mysqli_real_escape_string($connect,$_POST['e-mail']);
	$pwd1=md5($_POST['pwd']);
	$sql="SELECT * FROM `customer` WHERE `E-mail`='$emailuid'";
	$result=mysqli_query($connect,$sql);
	$result1=mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){
		
		if($pwd1==$row['password']){
			$hold=$row['password'];
			$_SESSION['mail']=$row['E-mail'];
			 $_SESSION['username']=$row['name'];
		     $_SESSION['profile']="profile_pic/".$row['profile'];
		     $_SESSION['gender']=$row['gender'];
			 $_SESSION['address']=$row['address'];
		}
	}
	
	
	if($pwd1==$hold){
		
		header("LOCATION:../web project/profile.php?success=login");
		}
	else{
		$output.='*password incorrect try again';
			   echo $output;
	}
	}else{
		$output.='*E-mail id not exist';
			   echo $output;
			  
	}
}
	
	if(isset($_POST['logout'])){
		session_unset($_SESSION['mail']);
		session_destroy();
	}
	

?>