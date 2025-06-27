<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f8fb;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <div class="text-center">
                    <img class="mb-4" src="images/logo.png" alt="" width="200" height="150">
                </div>
                    <h4 class="mb-4 text-center">Sign Up</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" required>
                                <div class="invalid-feedback">Valid first name is required.</div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" required>
                                <div class="invalid-feedback">Valid last name is required.</div>
                            </div>

                            <div class="col-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" required>
                                <div class="invalid-feedback">Your username is required.</div>
                            </div>

                            <div class="col-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" class="form-select" required>
                                    <option value="">Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="invalid-feedback">Please select a gender.</div>
                            </div>

                            <div class="col-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="col-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>

                           
                             <div class="col-6">
                                <label for="pass" class="form-label">Create Password </label>
                                <input type="password" class="form-control" id="pass" placeholder="Create Password">
                            </div>
                             <div class="col-6">
                                <label for="reEnter" class="form-label">Re-Enter Password </label>
                                <input type="password" class="form-control" id="reEnter" placeholder="Re-Enter Password">
                            </div>
                        </div>
                        


                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Bootstrap form validation
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>