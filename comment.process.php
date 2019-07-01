<?php

    if(isset($_POST['cmntBtn'])){

        require_once('./configs.php');

        $user_id = $_POST['user_id'];
        $comment = $_POST['newComment'];

        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        
        $sql = "INSERT INTO comments(all_comments, user_id) VALUES('$comment', $user_id);";

        mysqli_query($conn, $sql);

        if (mysqli_error($conn)){
            header("Location: signup.php?error='Server Error Occured! Your Account is not created'");
            exit();
        }

        header("Location: comment.php?submit=success&user_email=".$_POST['user_email']."&user_id=".$user_id);

    }else{
        header("Location: login.php?error='Authentication Error Occurred'");
    }