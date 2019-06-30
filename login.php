<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Import custom bootstrap style -->
    <link rel="stylesheet" href="cosmo.min.css">

    <title>Login Here!</title>
</head>
<body style="overflow-x: hidden;">
    <main class="row pt-4">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 ml-2 mr-2">
            <h1 class="text-center">Login to Your Account</h1>
            <hr>
            <form action="login.process.php" method="post">

                <?php 
                    if(isset($_GET['error'])){
                        echo("<p class='text-danger'>". $_GET['error'] ."</p>");
                    }
                ?>

                <div class="form-group mb-4">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Enter Your Email" name="email">
                </div>

                <div class="form-group mb-4">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
                </div>

                <div class="form-group mb-4">
                    <span>Create an Account </span><a href="signup.php" class="text-warning">Sign up here</a>
                </div>

                <div class="form-group mb-4">
                    <button class="btn btn-primary btn-block" type="submit" name="loginBtn">Login Now!</button>
                </div>

            </form>
        </div>
        <div class="col-sm-4"></div>
    </main>
</body>
</html>