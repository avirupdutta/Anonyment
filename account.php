<?php
    session_start();

    if (!isset($_SESSION['user_email'])){
        header("Location: login.php?error='Authentication Error Occurred!'");
        exit();
    }
    require_once('./configs.php');

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (mysqli_connect_errno()){
        echo("<script>Something went wrong :( Try again later!</script>");
        exit();
    }
    $user_id = $_SESSION['user_id'];
    
    $sql = "SELECT comments.all_comments, comments.curr_timestamp FROM comments WHERE user_id = $user_id ORDER BY comments.id DESC;";
    $result = mysqli_query($conn, $sql);
    $commentsArr = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Import custom bootstrap style -->
    <link rel="stylesheet" href="cosmo.min.css">

    <title>Account Dashboard</title>
</head>
<body style="overflow-x: hidden;">
    <main>
        <div class="container pt-2">

            <form action="logout.process.php" method="post"><button class="btn btn-danger" style="float:right;" name="logoutBtn">LOGOUT</button>
            </form>
            
            <h1 class="text-center">Welcome Back <?php echo($_SESSION['user_email']); ?></h1>
            <hr>

            <p>Your shareable link is: <a href="http://localhost/cmc/Anonyment/comment.php?user_id=<?php echo($user_id); ?>&user_email=<?php echo($_SESSION['user_email']); ?>" target=_blank>http://localhost/cmc/Anonyment/comment.php?user_id=<?php echo($user_id); ?>&user_email=<?php echo($_SESSION['user_email']); ?></a></p>
            <h1>All Recent Comments!</h1>
            <hr>
            <?php foreach($commentsArr as $comment): ?>
                <div class="container border mb-2 mt-2 pt-2 pb-2">
                    <h1 class=""><?php echo($comment['all_comments']); ?></h1>
                    <p class="text-muted">Commented At:-
                        <br>
                        <?php echo($comment['curr_timestamp']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
