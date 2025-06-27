<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ujjain Trip</title>
  <link href="styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" id="logo" alt="Logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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

      </div>
    </div>
  </nav>
  <div class="head">
    <div>
      <h1 class="heading"><i>Welcome To TVS Luckhnow Staff Mahakaleshwar Trip Form</i></h1>
      <p class="para">Enter your Details and submit this form to confirm your participation in the trip</p>
    </div>




  </div>
  <div class="about">
    <div class="about-header p-3 pb-md-4 text-center">
      <h1 class="display-5 fw-normal pb-2 border-bottom">About Us</h1>
      <p class="fs-5 text-muted">Welcome to QUICK TRIPZ – your trusted partner in unforgettable journeys!

        At [Your Name/Brand], we believe that travel is more than just visiting places; it's about creating stories, discovering cultures, and finding new perspectives. Our mission is to make travel easy, exciting, and accessible for everyone. Whether you're planning a weekend getaway, a dream vacation, or a business trip, we're here to help you explore the world with comfort and confidence.

        With carefully curated destinations, reliable bookings, and personalized service, we aim to turn every trip into a seamless and memorable experience. Let us guide you on your next adventure—because the world is waiting</p>
    </div>
  </div>
  <div class="pacage">
    <div class="container px-4 py-5" id="featured-3">
      <div class="pricing-header p-3 pb-md-4 text-center">
        <h2 class="pb-2 border-bottom">Our Packages</h2>
      </div>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">

          <div class="package">
            <h2>12-Day Exotic Adventure Package</h2>
            <p class="text-muted">Explore the best of [Destination Name] with our all-inclusive 12-day travel experience.</p>
            <ul>

              <li> 4-star Accommodation</li>
              <li> Airport Pick-up & Daily Transport</li>
              <li> Daily Breakfast & Dinner</li>
              <li> Sightseeing, Activities & Guided Tours</li>
            </ul>
            <p><strong>Price:</strong> ₹XX,XXX per person</p>

          </div>


        </div>
        <div class="feature col">

          <div class="package">
            <h2>18-Day Exotic Adventure Package</h2>
            <p class="text-muted">Explore the best of [Destination Name] with our all-inclusive 18-day travel experience.</p>
            <ul>

              <li> 4-star Accommodation</li>
              <li> Airport Pick-up & Daily Transport</li>
              <li> Daily Breakfast & Dinner</li>
              <li> Sightseeing, Activities & Guided Tours</li>
            </ul>
            <p><strong>Price:</strong> ₹XX,XXX per person</p>

          </div>


        </div>
        <div class="feature col">

          <div class="package">
            <h2>25-Day Exotic Adventure Package</h2>
            <p class="text-muted">Explore the best of [Destination Name] with our all-inclusive 125-day travel experience.</p>
            <ul>

              <li> 4-star Accommodation</li>
              <li> Airport Pick-up & Daily Transport</li>
              <li> Daily Breakfast & Dinner</li>
              <li> Sightseeing, Activities & Guided Tours</li>
            </ul>
            <p><strong>Price:</strong> ₹XX,XXX per person</p>

          </div>


        </div>
        <div class="feature col">

          <h2>Bus</h2>
          <p> departure date:14 May, 23 May, 28 May, 04 June, 09 June, 16 June, 22 June, 28 August & 09 September 2025
            departure from:Haridwar
            booking amount:₹1000/per person</p>

        </div>
        <div class="feature col">

          <h2>Train</h2>
          <p>departure date:14 May, 23 May, 28 May, 04 June, 09 June, 16 June, 22 June, 28 August & 09 September 2025
            departure from:Haridwar
            booking amount:₹1000/per person.</p>

        </div>
        <div class="feature col">

          <h2>Flight</h2>
          <p>departure date:14 May, 23 May, 28 May, 04 June, 09 June, 16 June, 22 June, 28 August & 09 September 2025
            departure from:Haridwar
            booking amount:₹1000/per person.</p>

        </div>
      </div>
    </div>
  </div>




  <!-- Form for country, state, time -->
  <div class="dest">
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light pb-2 border-bottom">Select Your Destination</h1>
          <p class="lead text-muted">On this sacred path I tread,
            With faith and devotion in my head.
            Each step a prayer, each mile a grace,
            Tirth Yatra’s journey, a soul’s embrace</p>

        </div>

      </div>
      <div class="row">

        <div class="col-md-4">
          <label for="country" class="form-label">Country</label>
          <select class="form-select" id="country" required="">
            <option value="">Choose...</option>
            <option>India(भारत)</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>
        <div class="col-md-4">
          <label for="country" class="form-label">State</label>
          <select class="form-select" id="country" required="">
            <option value="">Choose...</option>
            <option>Madhya Pradesh</option>
            <option>Uttar Pradesh</option>
            <option>Jammu & Kashmir</option>
            <option>Uttrakhand</option>
            <option>Odisha</option>
            <option>Keral</option>
            <option>Maharashtra</option>
            <option>Asam</option>
            <option>West Bengal</option>
            <option>Rajasthan</option>
            <option>Tamilnadu</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>
        <div class="col-md-4">
          <label for="country" class="form-label">Location</label>
          <select class="form-select" id="country" required="">
            <option value="">Choose...</option>
            <option>Ujjain(Mahakaleshwar)</option>
            <option>Ayodhya(Ram Janambhoomi)</option>
            <option>Katra(Vaishno Devi)</option>
            <option>Harddwar(Kedar Nath)</option>
            <option>Puri(konark Tempal)</option>
            <option>Pathanamthitta(Sabarimala)</option>
            <option>Nasik(Trimbakeshwa)</option>
            <option>Guwahati(Kamakhya)</option>
            <option>Kolkata(Kalighat Kali)</option>
            <option>Sikar(Khatusyam ji)</option>
            <option>Pamban Iland(Rameshwaram)</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="form">
    <div class="row py-lg-5">
      <div class="col-lg-6 text-center col-md-8 mx-auto">
        <h1 class="pb-2 border-bottom">Form</h1>

      </div>
    </div>
    <div class="hero container">

      <!-- <h2>Travel Booking Form</h2> -->
      <div class="hero-img-form row">

        <div class="col-md-6 col-sm-12 img-form">
          <!-- <img src="images/op-3.jpg" class="img-fluid img-hero" style="width: 73%; height: 71%; object-fit: cover;" /> -->
        </div>
        <div class="cont-form col-sm-12 col-md-6 colum">
          <!-- <div class="col-md-7 col-lg-8"> -->
          <h4 class="mt-3 text-center">Travel Booking Form</h4>

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
                <input name="last_name" type="text" class="form-control" id="lastName" placeholder="lastName" required="">
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
                  <option value="female">Female</option>
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
  </div>
  </div>

  <div class="" style="height: 3rem;"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>