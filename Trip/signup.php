<?php
include 'db.php';




?>

<html lang="en">

<head>

    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: rgba(211, 211, 211, 0.82);
        }

        .login-form {
            background-color: white;
            border-radius: 20px;
        }
    </style>
</head>

<body class="text-center body">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-md-5 mx-auto border py-5 radius login-form">
                <form method="POST" action="check_pass.php">
                    <img class="mb-4" src="images/logo.png" alt="" width="200" height="150">
                    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name">
                        <label for="floatingInput">Full Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="phone" id="floatingInput" placeholder="Phone">
                        <label for="floatingInput">Phone number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="floatingEmail" placeholder="Email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="address" id="floatingEmail" placeholder="Address">
                        <label for="floatingEmail">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="gender" class="form-control" id="gender" required="">
                            <option value="">Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>

                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="create_pass" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Create Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="reenter_pass" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Re-Enter Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" name="signup_submit" type="submit">Sign up</button>
                </form>
                <!-- <a href="" style="margin-top: 1rem;">Forgot Password</a> -->
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>