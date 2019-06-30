<?php
    session_start();

    if (isset($_SESSION['user_email'])){
        header("Location: account.php?error='Authentication Error Occurred!'");
        exit();
    }


    if (isset($_POST['loginBtn'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];


        if ( empty($email) && empty($password) ){
            header("Location: login.php?error='Please fill up all the fields'");
        }elseif (empty($email)) {
            header("Location: login.php?error='Email is required!'");
        }elseif (empty($password)) {
            header("Location: login.php?error='Password is required!'");
        }else{
            $hostname = "localhost";
            $dbusername = "avirup";
            $dbpassword = "root";
            $dbname = "cmc";

            $conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
            
            if (mysqli_error($conn)){
                header("Location: login.php?error='Server Error Occured! Try again in a moment.'");
            }

            $sql = "SELECT * from users WHERE user_email  =  '$email' and user_password = '$password';";

            $result = mysqli_query($conn, $sql);

            if (mysqli_error($conn)){
                header("Location: login.php?error='Server Error Occured! Your Account is not created'");
            }
            
            if(mysqli_num_rows($result)===1){
                $user = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['user_email'] = $user['user_email']; 
                header("Location: account.php?signup='success'");
            }else{
                header("Location: login.php?error='Email or Password did not matched!'");
            }


            
        }

    }else{
        header("Location: login.php?error='Authentication Error Occurred'");
    }
    



