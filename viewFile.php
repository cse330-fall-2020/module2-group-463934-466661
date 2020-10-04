<?php
    session_start();
    $user= $_SESSION['username'];
    //user path to user file, to get file 
    $filename = $_POST['view'];
    
    $full_path = sprintf("/home/nadia/Mod2Secure/%s/%s", $user, $filename);
    

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($full_path);
    
    header("Content-Type: ".$mime);
    
    header('content-disposition: inline; filename="'.$filename.'";');
    
    readfile($full_path);
    
?> 

