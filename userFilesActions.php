<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Mod 2_ UserFilesActions</title>
</head>
<body>
<!-- upload file button -->
    <form enctype="multipart/form-data" action="uploadFile.php" method="POST">
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
            <label for="uploadfile_input">Choose a file to upload:</label> 
            <input type="file" name="uploadedfile" id="uploadfile_input" />
        </p>
        <p>
            <input type="submit" value="Upload File" />
        </p>
    </form>
    <hr>

    


    <?php
        session_start();
        $user= $_SESSION['username'];   
       
         // // print out all the file names 
        $directoryfullpath =sprintf("/home/nadia/Mod2Secure/%s", $user);
        $dir =opendir($directoryfullpath);
         //echo $directoryfullpath;
         
        $fileList =scandir($directoryfullpath);
 
       
        $fileListArray = array_diff($fileList, array('..', '.'));
        
        foreach($fileListArray as $value){
                     
            //view button
            
            printf('<tr> 
            <th>%s</th> 
           <form action="viewFile.php" Method="POST" class = "buttons"> 
            <input type="hidden" name= "view" value="%s">
            <input type="submit" value="view file"></form></tr>', $value, $value) ;
                
            // remove button
        
            printf('<form action="removefile.php" Method="POST" class = "buttons">
            <input type="hidden" name= "remove" value="%s">
            <input type="submit" value="remove file"> 
            </form>', $value) ;
           
            // share button
            printf('<form action="share.php" Method="POST" class = "buttons">
            <input type="hidden" name= "share" value="%s">
            <input type="text" name="toUser" placeholder="enter recipient username">
            <input type="submit" value="share file"> 
            </form>', $value) ;

            printf('<br>');
        }
    
    ?> 
    <!-- logout html -->
    <hr>
    <form action= logout.php Method="POST">
        <input type= "submit" value="logout">
    </form>
</body>

</html>