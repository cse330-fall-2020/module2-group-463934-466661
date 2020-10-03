<!DOCTYPE html>
<html>
<head>
    <title>login Verify</title>
</head>

<body>
   
    
    <?php
        echo "hello";
        $h = fopen("/home/nadia/Mod2Secure/users.txt", "r");
        $user = $_GET["username"];
        echo trim(fgets($h));

        while( !feof($h) ){
            
            if( $user== trim(fgets($h))){ ///trim to exclude new line character
                echo "hello";
                //enter session for specific user
                session_start();
                $_SESSION['username'] = $user; // bc enter if state, get sessioin that equals username
                // in session phps that we want to use user name $user=session[username]
                // here were setting it other phps we get it
                

                 header("Location: userFilesActions.php");
                 exit;



            }
            
        }
        fclose($h);
    ?>
        
 

</body>

</html>