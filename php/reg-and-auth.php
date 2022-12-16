<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="../css/regAndAuth.css">
    <title>Responsive Login And Register Form</title>
</head>
<body>

<div class="container">
    <form action="#" class="login active">
        <h2 class="title">Login with your account</h2>
        <div class="form-group">
            <label for="login">Login</label>
            <div class="input-group">
                <input type="text" name="login" id="login" placeholder="Enter your login">
                <i class='bi bi-person'></i>
            </div>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <i class='bi bi-lock' ></i>
            </div>
            <span class="error-text"></span>
        </div>

        <button type="submit" class="btn-submit">Login</button>
        <p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register</a></p>
    </form>



    <form action="#" class="register">
        <h2 class="title">Register your account</h2>

        <div class="form-group">
            <label for="full-name">Full name</label>
            <div class="input-group">
                <input  type="text" name="full_name" id="full-name" placeholder="Enter your full name">
                <i class='bi bi-person'></i>
            </div>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="login">Login</label>
            <div class="input-group">
                <input type="text" name="login" id="login" placeholder="Enter your login">
                <i class='bi bi-person'></i>
            </div>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <i class='bi bi-envelope'></i>
            </div>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="file">Photo</label>
            <div class="input-group">
                <input type="file" name="file" id="file" placeholder="Enter your photo">
                <i class='bi bi-image'></i>
            </div>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <i class='bi bi-lock'></i>
            </div>
            <span class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="confirm-pass">Confirm password</label>
            <div class="input-group">
                <input type="password" name="password_confirm" id="confirm-pass" placeholder="Enter password again">
                <i class='bi bi-lock' ></i>
            </div>
            <span class="error-text"></span>
        </div>

        <button type="submit" class="btn-submit">Register</button>
        <p>I already have an account. <a href="#" onclick="switchForm('login', event)">Login</a></p>
    </form>
</div>

<script src="../js/regAndAuth.js"></script>
</body>
</html>
<?php
