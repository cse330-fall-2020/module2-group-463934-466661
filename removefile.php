<?php
        session_start();
        $user= $_SESSION['username'];
        
        //udr path to user file, to get file 
        $filename = $_POST['remove'];
        $full_path = sprintf("/home/nadia/Mod2Secure/%s/%s", $user, $filename);

        unlink($full_path);
        header("Location: userFilesActions.php");
        exit;  
        
    ?> 