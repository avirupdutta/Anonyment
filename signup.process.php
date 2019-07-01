<?php

    session_start();

    if (isset($_SESSION['user_email'])){
        header("Location: account.php?error='Authentication Error Occurred!'");
        exit();
    }

    if (isset($_POST['signupBtn'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];


        if ( empty($email) && empty($password) ){
            header("Location: signup.php?error='Please fill up all the fields'");
        }elseif (empty($email)) {
            header("Location: signup.php?error='Email is required!'");
        }elseif (empty($password)) {
            header("Location: signup.php?error='Password is required!'");
        }else{
            $hostname = "localhost";
            $dbusername = "avirup";
            $dbpassword = "root";
            $dbname = "cmc";

            $conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);
            
            if (mysqli_error($conn)){
                header("Location: signup.php?error='Server Error Occured! Try again in a moment.'");
            }

            $sql = "SELECT * from users WHERE user_email  =  '$email';";

            $result = mysqli_query($conn, $sql);

            if (mysqli_error($conn)){
                header("Location: signup.php?error='Server Error Occured! Your Account is not created'");
            }

            $user = mysqli_fetch_assoc($result);

            if(isset($user['user_email'])){
                header("Location: signup.php?error='Email already exists! Choose another email'");
                exit();
            }else{
                $sql = "INSERT INTO users(user_email, user_password) VALUES('$email', '$password');";

                mysqli_query($conn, $sql);

                if (mysqli_error($conn)){
                    header("Location: signup.php?error='Server Error Occured! Your Account is not created'");
                }

                // session_start();

                // $_SESSION['user_email'] = $email;  
                // $_SESSION['user_id'] = $user['id'];

                header("Location: login.php?signup='success'");
            }
        }
    }else{
        header("Location: signup.php?error='Authentication Error Occurred'");
    }
    



