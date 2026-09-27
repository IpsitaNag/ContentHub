<?php
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['userpassword'];
   if ($username == "admin" && $password == "pass") {
    session_start();
    $_SESSION["user"] = "admin";
    header("Location:index.php");
   }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
    /* =================================
       Login Page
    ================================= */

    body {
        min-height: 100vh;
        margin: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #f5f7fa;
    }


    /* =================================
       Login Container
    ================================= */

    .container {
        width: 100%;
        max-width: 400px !important;

        margin: 20px auto !important;
        padding: 35px !important;

        background: #ffffff;

        border: 1px solid #e1e5e9;
        border-radius: 12px;

        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
    }


    /* =================================
       Login Form
    ================================= */

    .login-form {
        width: 100%;
    }

    .form-field {
        margin-bottom: 22px !important;
    }


    /* =================================
       Input Fields
    ================================= */

    .form-control {
        height: 48px;

        padding: 10px 14px;

        border: 1px solid #ced4da;
        border-radius: 7px;

        font-size: 15px;

        transition: 0.2s ease;
    }

    .form-control:focus {
        border-color: #0d6efd;

        box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.12);
    }

    .form-control::placeholder {
        color: #8a8a8a;
    }


    /* =================================
       Login Button
    ================================= */

    .btn-primary {
        width: 100%;

        padding: 11px;

        border-radius: 7px;

        font-size: 15px;
        font-weight: 500;

        transition: 0.2s ease;
    }

    .btn-primary:hover {
        transform: translateY(-1px);

        box-shadow: 0 4px 10px rgba(13, 110, 253, 0.25);
    }


    /* =================================
       Mobile
    ================================= */

    @media (max-width: 576px) {

        body {
            padding: 15px;
        }

        .container {
            max-width: 100% !important;

            margin: 0 !important;

            padding: 25px 20px !important;

            border-radius: 10px;
        }

        .form-control {
            height: 46px;

            font-size: 14px;
        }

        .btn-primary {
            padding: 11px;
        }
    }


    /* =================================
       Very Small Screens
    ================================= */

    @media (max-width: 350px) {

        body {
            padding: 10px;
        }

        .container {
            padding: 20px 15px !important;
        }
    }
</style>
</head>
<body>
    <div class="container mt-5">
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" id="" placeholder="Enter username...">    
                </div>

                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="userpassword" id="" placeholder="Enter password...">
                </div>

                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>