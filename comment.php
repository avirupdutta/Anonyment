<?php
    session_start();
    if(isset($_GET['user_email'])){}
    $username = explode('@',$_GET['user_email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Section</title>
    <!-- Import custom bootstrap style -->
    <link rel="stylesheet" href="cosmo.min.css">
</head>
<body>
    <?php
        if(isset($_SESSION['user_id']) && ($_SESSION['user_id'] === $_GET['user_id'])){
            echo("
                <div class='container text-center mt-lg-5 mb-lg-5'>
                    <h1 class='display-4'>Share the url with Your Friends!</h1>
                    <p>You cannot comment in your own Account</p>
                </div>
            "); 
        }else{
            if(isset($_GET['submit']) && $_GET['submit'] === 'success'){
                echo("
                    <div class='alert alert-success'>
                        Your Comment has been sent successfully!
                    </div>             
                ");
            }

    ?> 
        <div class='container text-center mt-lg-5 mb-lg-5'>
            <form action="comment.process.php" method="post">
                <h1 class="mb-lg-5">Write a Contructive Comment for <span class="font-weight-bold"><?php echo($username[0]); ?></span></h1>

                <input type="text" name="user_id" id="" style="display:none;" value="<?php echo($_GET['user_id']); ?>">
                <input type="text" name="user_email" id="" style="display:none;" value="<?php echo($_GET['user_email']); ?>">
                <hr>
                <textarea name="newComment" id="" cols="30" rows="10" class="form-control mb-4"></textarea>
                <button class="btn btn-success btn-block btn-lg" type="submit" name="cmntBtn">Submit!</button> 
            </form>
        </div>
    <?php
        }
    ?>
</body>
</html>


    