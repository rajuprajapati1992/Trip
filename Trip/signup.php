<?php
include 'db.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f8fb;
        }

        .form-container {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 576px) {
            .form-container {
                padding: 10px;
            }

            input,
            select {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="form-container">
                    <div class="text-center">
                        <img class="mb-4" src="images/logo.png" alt="Logo" style="max-width: 100%; height: auto;">
                    </div>
                    <h4 class="mb-4 text-center  btn-lg">Sign Up</h4>
                    <form class="needs-validation" method="POST" action="check_signup.php" novalidate>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" name="first_name" id="firstName" required>
                                <div class="invalid-feedback">Valid first name is required.</div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="lastName" required>
                                <div class="invalid-feedback">Valid last name is required.</div>
                            </div>

                            <!-- <div class="col-12 col-sm-6">
                                <label for="image" class="form-label">Image URL</label>
                                <input type="file(jpg, jpeg, png)" class="form-control" name="image" id="image" required placeholder="https://example.com/image.jpg">
                                <div class="invalid-feedback">Please enter a valid image URL.</div>
                            </div> -->


                            <div class="col-12 col-sm-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" class="form-select" name="gender" required>
                                    <option value="">Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="invalid-feedback">Please select a gender.</div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <label for="pass" class="form-label">Create Password</label>
                                <input type="password" class="form-control" name="password" id="pass" placeholder="Create Password" required>
                            </div>

                            <div class="col-12 col-sm-6">
                                <label for="reEnter" class="form-label">Re-Enter Password</label>
                                <input type="password" class="form-control" name="re_pass" id="reEnter" placeholder="Re-Enter Password" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" name="signup_submit" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap validation JS -->
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>

</body>

</html>

</html>