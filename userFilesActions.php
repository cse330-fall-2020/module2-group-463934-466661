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
    <!-- view file button -->
    <form name= "view" action="viewFile.php" Method="GET">
        <input type= "text" name= "fileName">
        <input type="submit" value="view file">
    </form>

    <!--file button, not started yet -->
    <form name= "remove" action="fileList.php" Method="POST">
        <input type="submit" value="removefile">
    </form>


    <!-- <?php
        // session_start()
        // $user= $_SESSION['username']   
        // //somehow display all users' files
    ?> -->
    
</body>

</html>