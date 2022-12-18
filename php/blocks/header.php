<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">

</head>
<body>

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="menu"><img src="../img/menu.png" alt="menu" height="25px" width="25px"></label>

        <a href="../main.php" class="logo">AUTO<span class="lol">&</span><span>MOTO</span></a>

        <nav class="navbar">
            <a href="main.php">Home</a>
            <a href="about-us.php">About</a>
            <a href="products.php">Products</a>
            <a href="reviews.php">Reviews</a>
            <a href="contacts.php">Contacts</a>
        </nav>

        <div class="profile-info">
            <a href="profile.php"><?= $_SESSION["user"]["login"] ?></a>
            <a href="profile.php"><img class="profile-icon" src="..<?php
                if(empty($_SESSION["user"])) echo ("/img/profile.png");
                else                         echo $_SESSION["user"]["avatar"];
            ?>" alt="profile"></a>
        </div>
    </header>
