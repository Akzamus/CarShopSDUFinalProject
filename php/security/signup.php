<?php
    session_start();
    require_once "database-connection.php";

    $full_name = $_POST["full_name"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $response["errors"] = array();
    $has_errors = false;

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if(mysqli_num_rows($check_user) > 0) {
        $response["status"] = false;
        $response["errors"]["login"] = "User with this login already exists";
        $has_errors = true;
    }

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if(mysqli_num_rows($check_user) > 0) {
        $response["status"] = false;
        $response["errors"]["email"] = "User with this email already exists";
        $has_errors = true;
    }

    $path = "/img/avatars/".time().$_FILES["avatar"]["name"];
    if(!move_uploaded_file($_FILES["avatar"]["tmp_name"], "../..".$path)) {
        $response["status"] = false;
        $response["errors"]["file"] = "Failed to upload file";
        $has_errors = true;
    }

    if(!$has_errors) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
                                      VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
        $response["status"] = true;
    }

    echo json_encode($response);
