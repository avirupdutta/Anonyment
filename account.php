<?php
    session_start();

    if (!isset($_SESSION['user_email'])){
        header("Location: login.php?error='Authentication Error Occurred!'");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Import custom bootstrap style -->
    <link rel="stylesheet" href="cosmo.min.css">

    <title>Sign Up</title>
</head>
<body style="overflow-x: hidden;">
    <main>
        <div class="container pt-2">

            <form action="logout.process.php" method="post"><button class="btn btn-danger" style="float:right;" name="logoutBtn">LOGOUT</button>
            </form>
            
            <h1 class="text-center">Welcome Back <?php echo($_SESSION['user_email']); ?></h1>
            <hr>

            <h1>All Comments</h1>

        </div>
    </main>
</body>
</html>
