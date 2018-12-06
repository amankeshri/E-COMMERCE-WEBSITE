<?php
$output="";
$connect=mysqli_connect("localhost", "root", "", "example");
if(!$connect){
die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit'])){
$username=mysqli_real_escape_string($connect,$_POST['username']);
$gender=mysqli_real_escape_string($connect,$_POST['gender']);
$mail=mysqli_real_escape_string($connect,$_POST['mail']);
$pwd1=md5($_POST['pwd1']);
$pwd2=md5($_POST['pwd2']);
$profile=$_FILES['image']['name'];
$address=mysqli_real_escape_string($connect,$_POST['adrs']);
$zip=mysqli_real_escape_string($connect,$_POST['zip']);
$check="SELECT * FROM `customer` WHERE `E-mail`='$mail'";
$result=mysqli_query($connect,$check);
if(mysqli_num_rows($result)>0){
      $output.='<div style="color:red;">* E-mail ID ' .$mail.' already exist choose another Email ID</div>';
    echo $output;
}
 else {
         $sql="INSERT INTO `customer` (`costumer_id`, `name`, `gender`, `E-mail`, `password`, `address`, `zip`,`profile`) VALUES (NULL,'$username','$gender','$mail','$pwd1','$address','$zip','$profile')";
       if(mysqli_query($connect,$sql)){
        header("LOCATION:../web project/status.php?success=resister");
          //$output.='<div style="color:green;">Register successful <a href="e-lobstore.php">click here</a> to login into your account</div>';
      //echo $output;
       }else{
               $output.='<div style="color:red">*Register fail</div>';
         echo $output;
            }
       }
}

mysqli_close($connect);

?>

