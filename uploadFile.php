<!DOCTYPE html>
<html>
<head>
    <title>upload file</title>
</head>

<body>
   
    <?php
        session_start()
        $user = $_SESSION['username']   
        $file = $_FILES['uploadedfile']['name']// from userFiles.php upload form

        $full_path = sprintf("/srv/uploads/%s/%s", $user, $file); //Q: to I have to change to path 
        move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path)

        echo
        
    ?> 

</body>

</html>