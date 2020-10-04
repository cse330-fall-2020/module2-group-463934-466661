<?php
$newUser=$_POST['newUser'];
// want to add username to users.txt
$usertxtfile=fopen('/home/nadia/Mod2Secure/users.txt','a');
fwrite($usertxtfile, "\n".$newUser);
fclose($usertxtfile);

// redirect new user's file list 
session_start();
$_SESSION['username'] = $newUser;
header("Location: userFilesActions.php");
exit;


?>