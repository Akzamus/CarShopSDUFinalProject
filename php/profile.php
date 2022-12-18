<?php
    session_start();
    require_once "security/database-connection.php";
    if(empty($_SESSION["user"]))
        header("Location: security.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">

        <div class="profile">
            <?php
                $user_id = $_SESSION["user"]["id"];
                $select = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
                $user = mysqli_fetch_assoc($select);
                echo '<img src="..'.$user['avatar'].'">';
            ?>
            <h3><?= $user['full_name'] ?></h3>
            <p><?= $user['email']?><p>
            <p><?= $user['login']?><p>
            <a href="main.php" class="btn">Home</a>
            <a href="security/logout.php" class="delete-btn">Logout</a>
        </div>

    </div>
</body>
</html>

