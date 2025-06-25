<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujjain Trip</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMBU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"               aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="head">
  <div>
  <h1 class="heading"><i>Welcome To TVS Luckhnow Staff Mahakaleshwar Trip Form</i></h1>
  <p class="para">Enter your Details and submit this form to confirm your participation in the trip</p>
</div>

</div>
<div class="hero container">
  <div class="hero-img-form row">
     
     <div class="col-md-6 col-sm-1fco2 img-form">
  <!-- <img src="images/op-3.jpg" class="img-fluid img-hero" style="width: 73%; height: 71%; object-fit: cover;" /> -->
    </div>
    <div class="cont-form col-sm-12 col-md-6 colum">
      <!-- <div class="col-md-7 col-lg-8"> -->
        <h4 class="mt-1">Travel Booking Form</h4>
        
        <form action="db_s.php" method="POST" class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input name="first_name" type="text" class="form-control" id="firstName" placeholder="firstName" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input name="last_name" type="text" class="form-control" id="lastName" placeholder="lastName"  required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="age" class="form-label">Age</label>
              <div class="input-group has-validation">
                <input name="age" type="number" class="form-control" id="Age" placeholder="Age" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="you@gmail.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="phone" class="form-label">Phone</label>
              <input name="phone" type="number" class="form-control" id="phone" placeholder="enter your phone number">
              <div class="invalid-feedback">
                Enter your valide phone number.
              </div>
            </div>

            <div class="col-12">
              <label for="gender" class="form-label">Gender</label>
              
              <select name="gender" class="form-select" id="gender" required="">
                <option value="">Choose...</option>
                <option value="male">Male</option>
                 <optio value="female">Female</option>
                  <option value="other">Other</option>
                   
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-12">
              <label for="desc" class="form-label">Remark </label>
              <input name="desc" type="text" class="form-control" id="desc" placeholder="Enter remark">
            </div>
            <div class="btn">
          <button class="btn btn-primary w-auto px-4 py-2 rounded" name="form_submit" type="submit">Submit</button>
            </div>
  
        </form>
      <!-- </div> -->
    </div>
   </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
    </html>
    

