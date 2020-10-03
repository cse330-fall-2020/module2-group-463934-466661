<!DOCTYPE html>
<html>
<head>
    <title> Mod 2 view file</title>
</head>

<body>
    <?php
        session_start()
        $user= $_SESSION['username']   
        $filename = $_GET['fileName'];
        $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($full_path);
        
        header("Content-Type: ".$mime);
        header('content-disposition: inline; filename="'.$filename.'";');
        readfile($full_path);
    ?> 
</body>

</html>