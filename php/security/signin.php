<?php
    session_start();
    require_once "database-connection.php";
    $login = $_POST["login"];
    $password = md5($_POST["password"]);
    $errors = array();
    $response = array($errors);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

    if (mysqli_num_rows($check_user) > 0) {

        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

        if (mysqli_num_rows($check_user) > 0) {

            $user = mysqli_fetch_assoc($check_user);

            $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "avatar" => $user['avatar'],
                "email" => $user['email'],
                "login" => $user['login']
            ];

            $response["status"] = true;
        } else {
            $response["status"] = false;
            $response["field"] = "password";
            $response["errorMessage"] = "Incorrect password";
        }

    } else {
        $response["status"] = false;
        $response["field"] = "login";
        $response["errorMessage"] = "User with this login doesn't exists";
    }
echo json_encode($response);

