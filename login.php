<!DOCTYPE html>
<html lang="en">
<head>
    <title> Mod2 _file sharing_Login </title>
</head>
<body>
    
    <form name= "login" action= "loginVerify.php" Method="POST">  
    
        Enter Username: <input type="text" name="username"/>
        <input type="submit" value="submit">
    </form>
    <!--php section-->
    <?php
        session_start();
        echo $_SESSION['username'];
    ?>

</body>

</html>