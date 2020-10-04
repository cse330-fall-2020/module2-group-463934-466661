<!DOCTYPE html>
<html>
<head>
    <title>upload file</title>
</head>

<body>
   
    <?php
        session_start();
        $user = $_SESSION['username'];   
        $file = $_FILES['uploadedfile']['name'];// from userFilesACtion.php upload form
        

        $directoryfullpath =sprintf("/home/nadia/Mod2Secure/%s", $user); // creates directory if dir doesnt exist yet
        if (!file_exists($directoryfullpath) && !is_dir($directoryfullpath) ) {
            mkdir($directoryfullpath);
        
        }

        
        
        $directory= opendir($directoryfullpath);  //opens users directory

        $full_path = sprintf("/home/nadia/Mod2Secure/%s/%s", $user, $file); // $user and $file makes new  
        move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path);

        

        //add file to uploads.txt in Mod2Secure folder
        

        
        echo $full_path;
        header("Location: userFilesActions.php");
        exit;

        

        // upload file gets put in temp php file system. line 12 _Files gets file name--> line 14 dictate where I want the file to be (customize path)
        //line 15 move uploaded file tmp--> instance  
        
    ?> 

</body>

</html>