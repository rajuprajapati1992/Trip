<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Tripz</title>
  <link href="styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .index-header {
      background-image: url(images/Alleppey-Kerala-Tour.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    body {
      overflow-x: hidden;
    }

    .package{
      overflow: hidden;
    }

    .feature{
      transition: transform 0.3s ease;
    }

    .feature:hover{
      transform: scale(1.007);
      box-shadow: 5px 5px 10px rgba(139, 139, 139, 0.582);
    }



    /* Optional: Ensure media queries apply if needed */
    @media screen and (max-width: 10000px) {

      html,
      body {
        overflow-x: hidden !important;
      }
    }

    .fixed-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .fixed-image:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      cursor: pointer;
    }
  </style>
</head>

<body>

  <?php
  include 'navbar.php';
  ?>

  <header class="row py-5 mt-5 text-center text-dark index-header" style="height: 70vh;">
    <div class="container row">
      <h1 class="display-4 fw-bold text-light" style="margin-top: 5rem ;font-family: 'Segoe UI', sans-serif;">
        Make Your Hassle-free Travel Plan Now!
      </h1>
      <p class="lead text-light fs-1 mb-3" style="font-weight: 500;">
        Holidays Designed For You
      </p>


    </div>

  </header>

  </div>
  <div class="mb-2" id="about">

    <div class="pricing-header p-3  text-center">
      <h2 class=" border-bottom">About Us</h2>
    </div>

    <?php
    include 'about-inc.php';
    ?>

    <?php
    include 'img-slide.php';
    ?>

  </div>
  <div class="package">
    <div class="container px-4 py-5" id="featured-3">
      <div class="pricing-header p-3 pb-md-4 text-center">
        <h2 class="pb-2 border-bottom">Our Packages</h2>
      </div>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">

          <div class="package">
            <h2>12-Day Exotic Adventure Package</h2>
            <p class="">Explore the best of [Destination Name] with our all-inclusive 12-day travel experience.</p>
            <ul>

              <li> 4-star Accommodation</li>
              <li> Airport Pick-up & Daily Transport</li>
              <li> Daily Breakfast & Dinner</li>
              <li> Sightseeing, Activities & Guided Tours</li>
            </ul>
            <p><strong>Price:</strong> ₹XX,XXX per person</p>

          </div>
          <div class="package">
            <img src="images/mp_gwalior.jpg" class="fixed-image" alt="Image 1">
          </div>


        </div>
        <div class="feature col">

          <div class="package">
            <h2>18-Day Exotic Adventure Package</h2>
            <p class="">Explore the best of [Destination Name] with our all-inclusive 18-day travel experience.</p>
            <ul>

              <li> 4-star Accommodation</li>
              <li> Airport Pick-up & Daily Transport</li>
              <li> Daily Breakfast & Dinner</li>
              <li> Sightseeing, Activities & Guided Tours</li>
            </ul>
            <p><strong>Price:</strong> ₹XX,XXX per person</p>

          </div>
          <div class="package">
            <img src="images/mp_panchmarhi.jpg" class="fixed-image" alt="Image 2">
          </div>


        </div>
        <div class="feature col">

          <div class="package">
            <h2>25-Day Exotic Adventure Package</h2>
            <p class="">Explore the best of [Destination Name] with our all-inclusive 125-day travel experience.</p>
            <ul>

              <li> 4-star Accommodation</li>
              <li> Airport Pick-up & Daily Transport</li>
              <li> Daily Breakfast & Dinner</li>
              <li> Sightseeing, Activities & Guided Tours</li>
            </ul>
            <p><strong>Price:</strong> ₹XX,XXX per person</p>

          </div>
          <div class="package">
            <img src="images/mp_sanchi.jpg" class="fixed-image" alt="Image 3">
          </div>


        </div>
        <div class="feature col">
          <div class="package">

            <h2>Bus</h2>
            <p> departure date:14 May, 23 May, 28 May, 04 June, 09 June, 16 June, 22 June, 28 August & 09 September 2025
              departure from:Haridwar
              booking amount:₹1000/per person</p>

          </div>
          <div class="package">

            <img src="images/bus.jpg" class="fixed-image" alt="Image 3">
          </div>
        </div>
        <div class="feature col">
          <div class="package">

            <h2>Train</h2>
            <p> departure date:14 May, 23 May, 28 May, 04 June, 09 June, 16 June, 22 June, 28 August & 09 September 2025
            departure from:Haridwar
            booking amount:₹1000/per person.</p>

          </div>
          <div class="package">

            <img src="images/train.avif" class="fixed-image" alt="Image 3">
          </div>
        </div>
        <div class="feature col">
          <div class="package">

            <h2>Flight</h2>
            <p> departure date:14 May, 23 May, 28 May, 04 June, 09 June, 16 June, 22 June, 28 August & 09 September 2025
              departure from:Haridwar
              booking amount:₹1000/per person</p>

          </div>
          <div class="package">

            <img src="images/flight.webp" class="fixed-image" alt="Image 3">
          </div>
        </div>


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
          <p class="lead ">On this sacred path I tread,
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
        <h1 class="pb-2 border-bottom">Let’s Get in Touch</h1>

      </div>
    </div>
    <?php
    include 'book_form.php';
    ?>
  </div>
  </div>
  <!--Contact Us Section -->
  <section id="contact" class="bg-light py-5 mt-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>

      <div class="row">
        <!-- Map Column -->
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="h-100 w-100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935585.3351202749!2d80.83200036888186!3d23.65341045258052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3986fba4d8edd2e5%3A0x8aed0335e93cb22a!2sShahdol%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1751516152531!5m2!1sen!2sin"
              width="100%"
              height="100%"
              style="border:0; min-height: 450px;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

        <!-- Form Column -->
        <div class="col-md-6">
          <form action="contact_submit.php" method="POST" class="p-4 bg-white shadow rounded h-100">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Full Name">
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="example@email.com">
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="form-control" required placeholder="9876543210">
              </div>
              <div class="col-md-6">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Trip Inquiry / Feedback">
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Your Message</label>
                <textarea name="message" id="message" class="form-control" rows="5" required placeholder="Write your message here..."></textarea>
              </div>
            </div>
            <div class="mt-4 text-center">
              <button type="submit" name="contact_submit" class="btn btn-primary px-4">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


 
  <?php
  include 'footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>