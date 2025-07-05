<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exersize</title>
  <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" id="logo" alt="Logo" style="height: 40px;">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact</a>
          </li>
        </ul>

        <div class="d-flex align-items-center mt-3 mt-md-0">
          <a href="login.php" class="btn btn-light btn-sm me-2">Login</a>
          <a href="signup.php" class="btn btn-light btn-sm me-3">SignUp</a>
          <!-- <div class="form-check form-switch text-light">
            <input class="form-check-input" type="checkbox" id="themeToggle">
            <label class="form-check-label" for="themeToggle">Dark Mode</label>
          </div> -->
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="px-3 py-5 my-5 text-center">
      <img class="img-fluid d-block mx-auto mb-4" src="images/travel.jpg" alt="Travel" />

      <h1 class="display-5 fw-bold">For Travelling Anywhere</h1>

      <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
        <div class="alert alert-warning text-center" role="alert">
          User Exists with this email
        </div>

        <a href="signup.php" class="btn btn-primary btn-lg px-4 text-light">Sign Up</a>
      </div>
    </div>
  </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>