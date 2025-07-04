<?php
include 'db.php';




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Optional External CSS -->
    <link href="styles.css" rel="stylesheet">

    <style>
        body {
            background-color: rgba(211, 211, 211, 0.82);
        }

        .login-form {
            background-color: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 576px) {
            .login-form {
                padding: 1rem;
            }

            img {
                width: 100% !important;
                height: auto !important;
            }
        }
    </style>
</head>

<body class="text-center">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="row col-12 col-sm-8 col-md-6 col-lg-4 mx-auto login-form">
                <form method="POST" action="check_login.php" novalidate>
                    <img class="mb-4" src="images/logo.png" alt="Logo" width="200" height="150">
                    <h1 class="h4 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="floatingInput" placeholder="email" required>
                        <label for="floatingInput">enter your email.</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="user_pass" id="floatingPassword" placeholder="Password"
                            required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating" style="display: flex; justify-content: center; align-items: center">

                        <button class=" btn btn-lg btn-primary" name="login_submit" type="submit">Sign in</button>

                    </div>

                    <div class="mt-3">
                        <a href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>