CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` text NOT NULL,
 `email` text NOT NULL,
 `password` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<?php

if(isset($_POST['submit']) && $_POST['g-recaptcha-response']!="")
{
 $secret = 'You Site Key';
 $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
 $responseData = json_decode($verifyResponse);
 if($responseData->success)
 {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  
  $host="localhost";
  $username="root";
  $password="";
  $databasename="sample";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

  mysql_query("insert into users values('','$name','$email','$pass')");
  echo "Successfully Signup";
 }
}
