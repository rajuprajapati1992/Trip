<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .contact {
        height: 35vh;
        margin-top: 35px;
        background: url(images/header.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>
    <?php
    include 'navbar.php';

    ?>
    <div class="contact">
        <div class="overlay">
            <p style="color: white;">Contact Us</p>
        </div>
    </div>


    <div class="form">
        <div class="row py-lg-5">
            <div class="col-lg-6 text-center col-md-8 mx-auto">
                <h1 class="pb-2 border-bottom">Form</h1>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>