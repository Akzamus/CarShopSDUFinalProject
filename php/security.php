<?php
    $title = "Security";
    $styles = array("main.css", "header.css", "security.css");
    require "../php/blocks/header.php";
    if(!empty($_SESSION["user"]))
        header("Location: index.php");
?>
<div class="container">
    <form class="login active">
        <h2 class="title">Login with your account</h2>
        <div class="form-group">
            <label for="login-auth">Login</label>
            <div class="input-group">
                <input type="text" name="login" id="login-auth" placeholder="Enter your login">
                <i class='bi bi-person'></i>
            </div>
            <span id="login-error-auth" class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="password-auth">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password-auth" placeholder="Enter your password">
                <i class='bi bi-lock' ></i>
            </div>
            <span id="password-error-auth" class="error-text"></span>
        </div>

        <button id="btn-auth" type="submit" class="btn-submit">Login</button>
        <p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register</a></p>
    </form>



    <form class="register">
        <h2 class="title">Register your account</h2>

        <div class="form-group">
            <label for="full-name">Full name</label>
            <div class="input-group">
                <input  type="text" name="full_name" id="full-name" placeholder="Enter your full name">
                <i class='bi bi-person'></i>
            </div>
            <span id="full-name-error" class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="login-reg">Login</label>
            <div class="input-group">
                <input type="text" name="login" id="login-reg" placeholder="Enter your login">
                <i class='bi bi-person'></i>
            </div>
            <span id="login-error-reg" class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <i class='bi bi-envelope'></i>
            </div>
            <span id="email-error" class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="file">Photo</label>
            <div class="input-group">
                <input type="file" name="avatar" id="file" placeholder="Enter your photo">
                <i class='bi bi-image'></i>
            </div>
            <span id="file-error" class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="password-reg">Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password-reg" placeholder="Enter your password">
                <i class='bi bi-lock'></i>
            </div>
            <span id="password-error-reg" class="error-text"></span>
        </div>

        <div class="form-group">
            <label for="confirm-pass">Confirm password</label>
            <div class="input-group">
                <input type="password" name="password_confirm" id="confirm-pass" placeholder="Enter password again">
                <i class='bi bi-lock' ></i>
            </div>
            <span id="password-confirm-error" class="error-text"></span>
        </div>

        <button id="btn-reg" type="submit" class="btn-submit">Register</button>
        <p>I already have an account. <a href="#" onclick="switchForm('login', event)">Login</a></p>
    </form>
</div>

<script src = "../js/jquery-3.6.2.min.js"></script>
<script src = "../js/security.js"></script>
</body>
</html>