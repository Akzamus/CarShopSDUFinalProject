"use strict";

//Switch forms
function switchForm(className, e) {
    e.preventDefault();
    const allForm = document.querySelectorAll('form');
    const form = document.querySelector(`form.${className}`);

    allForm.forEach(item => {
        item.classList.remove('active');
    });
    form.classList.add('active');
}

//Authorization
let loginErrorAuth = $("#login-error-auth");
let passwordErrorAuth = $("#password-error-auth");

let loginInputAuth = $("#login-auth");
let passwordInputAuth = $("#password-auth");

$("#btn-auth").click((e) => {
    e.preventDefault();

    let login = loginInputAuth.val();
    let password = passwordInputAuth.val();

    if(login.trim() === "") {showError(loginInputAuth, loginErrorAuth, "Login not specified");}
    else                    {removeError(loginInputAuth, loginErrorAuth);}

    if(password.trim() === "") {showError(passwordInputAuth, passwordErrorAuth, "Password not specified");}
    else                       {removeError(passwordInputAuth, passwordErrorAuth);}

    if(login.trim() !== "" && password.trim() !== "") {
        $.ajax({
            url: "security/signin.php",
            type: "POST",
            dataType: "JSON",
            data: {
                login: login,
                password: password
            },
            success: (data) => {
                if(data.status) {
                    document.location.href ="profile.php";
                } else {
                    removeError(loginInputAuth, loginErrorAuth);
                    removeError(passwordInputAuth, passwordErrorAuth);

                    switch (data.field) {
                        case "login":    showError(loginInputAuth, loginErrorAuth, data.errorMessage);    break;
                        case "password": showError(passwordInputAuth, passwordErrorAuth, data.errorMessage); break;
                    }
                }
            }
        });
    }
});

//Registration
let fullNameError = $("#full-name-error");
let loginErrorReg = $("#login-error-reg");
let emailError = $("#email-error");
let fileError = $("#file-error");
let passwordErrorReg = $("#password-error-reg");
let passwordConfirmError = $("#password-confirm-error");

let fullNameInput = $("#full-name");
let loginInputReg = $("#login-reg");
let emailInput = $("#email");
let fileInput = $("#file");
let passwordInputReg = $("#password-reg");
let passwordConfirmInput = $("#confirm-pass");

let hasErrors = false;

$("#btn-reg").click((e) => {
    e.preventDefault();

    let fullName = fullNameInput.val();
    let login = loginInputReg.val();
    let email = emailInput.val();
    let file = fileInput.get(0).files[0];
    let password = passwordInputReg.val();
    let passwordConfirm = passwordConfirmInput.val();

    hasErrors = false;

    //full name
    if (fullName.trim() === "") {
        showError(fullNameInput, fullNameError, "Full name not specified");
    } else if (fullName.search(/\d/) !== -1) {
        showError(fullNameInput, fullNameError, "Full name cannot hold numbers");
    } else if (fullName.split(" ").length !== 2) {
        showError(fullNameInput, fullNameError, "Incorrect input format. Example: Last Second");
    } else if (fullName.length < 5) {
        showError(fullNameInput, fullNameError, "Full name must not be less than 5 characters");
    } else {
        removeError(fullNameInput, fullNameError);
    }

    //login
    if (login.trim() === "") {
        showError(loginInputReg, loginErrorReg, "Login not specified");
    } else if (!/^[A-Za-z0-9]*$/.test(login)) {
        showError(loginInputReg, loginErrorReg, "Login must consist only of letters and numbers");
    } else if (login.length < 5) {
        showError(loginInputReg, loginErrorReg, "Login must be longer than 4 characters");
    } else {
        removeError(loginInputReg, loginErrorReg);
    }

    //email
    if(email.trim() === "") {
        showError(emailInput, emailError, "Email not specified");
    } else if (email.search("@") == -1) {
        showError(emailInput, emailError,"Email does not contain @");
    } else if(email.length < 9) {
        showError(emailInput, emailError, "Email must be longer than 8 characters");
    } else {
        removeError(emailInput, emailError);
    }

    //file
    if(!file) {
        showError(fileInput, fileError, "Photo not uploaded");
    } else if (file.type !== "image/png" && file.type !== "image/jpg") {
        showError(fileInput, fileError, "File must have an extension .jpg or .png");
    } else {
        removeError(fileInput, fileError);
    }

    //password
    if (password.trim() === "") {
        showError(passwordInputReg, passwordErrorReg, "Password not specified");
    } else if (password.length < 9) {
        showError(passwordInputReg, passwordErrorReg, "Password must be longer than 8 characters");
    } else if (password.search(" ") != -1) {
        showError(passwordInputReg, passwordErrorReg, "Password must not contain spaces");
    } else {
        removeError(passwordInputReg, passwordErrorReg);
    }

    //passwordConfirm
    if (passwordConfirm.trim() === "") {
        showError(passwordConfirmInput, passwordConfirmError, "Confirm password not specified");
    } else if(password !== passwordConfirm) {
        showError(passwordConfirmInput, passwordConfirmError, "Passwords do not match");
    } else {
        removeError(passwordConfirmInput, passwordConfirmError);
    }

    if(!hasErrors) {
        let formData = new FormData();
        formData.append('full_name', fullName);
        formData.append('login', login);
        formData.append('email', email);
        formData.append('avatar', file);
        formData.append('password', password);

        console.log(formData);

        $.ajax({
            url: "security/signup.php",
            type: "POST",
            dataType: "JSON",
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            success: (data) => {
                console.log(data);
                if(data.status) {
                    document.location.href ="profile.php";
                } else {
                    if(data.errors.login) {
                        showError(loginInputReg, loginErrorReg, data.errors.login);
                    }
                    if(data.errors.email) {
                        showError(emailInput, emailError, data.errors.email);
                    }
                    if(data.errors.file) {
                        showError(fileInput, fileError, data.errors.file);
                    }
                }
            }
        });
    }
});

//Support function
function removeError(input, error) {
    input.removeClass("invalid");
    error.text("");
}

function showError(input, error, errorMessage) {
    hasErrors = true;
    input.addClass("invalid");
    error.text(errorMessage);
}