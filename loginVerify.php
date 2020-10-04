<!DOCTYPE html>
<html lang="en">
<head>
    <title>login Verify</title>
</head>

<body>
   
    
    <?php
        echo "hello";
        $h = fopen("/home/nadia/Mod2Secure/users.txt", "r");
        $user = $_POST['username'];
        /// create new user
        
        echo nl2br(", username not found. Go back and re-enter valid username. 
        \nWould you like to create a new user for".' '.$user.'?');

        printf('<form action= addNewUser.php Method="POST">
            <input type= "hidden" name= "newUser" value= "%s"> 
            <input type= "submit" value="create new user">
        </form>',$user);
        
        

        while( !feof($h) ){
            
            if( $user== trim(fgets($h)) &&  !empty($_POST["username"]) ){ ///trim to exclude new line character
                
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