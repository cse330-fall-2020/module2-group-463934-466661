<?php
session_start();
$user= $_SESSION['username']; 

$sharedFile=$_POST['share'];
$recipient=$_POST['toUser'];

$from='/home/nadia/Mod2Secure/'.$user.'/'.$sharedFile; //file
echo $from;
echo nl2br("\n");
$to='/home/nadia/Mod2Secure/'.$recipient.'/'.$sharedFile;
echo $to;
copy($from, $to);


header("Location: userFilesActions.php");
?>