<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .header {
        height: 35vh;
        margin-top: 35px;
        background: url(images/header.jpg);
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;

    }



    img {
        border-radius: 15px;
    }

    img:hover {
        transition: transform 0.3s ease;
    }

    .grey {
        background-color: #f1f1f1;
    }
</style>

<body>
    <?php
    include 'navbar.php';

    ?>
    <div class="header">
        <div class="overlay">
            <p style="color: white;">About Us</p>
        </div>
    </div>

    <?php
    include 'about-inc.php';
    ?>

    <?php
    include 'img-slide.php';
    ?>

    <div class="grey">
        <div class=" container px-4 py-5" id="hanging-icons">
            <div class="text-center">

                <h2 class="pb-2 border-bottom">Our Services</h2>
            </div>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
                            <use xlink:href="#toggles2"></use>
                        </svg> </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Tour Packages:</h3>
                        <p>Our meticulously designed tour packages cater to a wide spectrum of preferences and interests. From the bustling streets of Delhi to the tranquil backwaters of Kerala, we, the Best Travel Agents In Bhopal, offer a diverse array of experiences that capture the essence of India's myriad landscapes, cultures, and traditions.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
                            <use xlink:href="#cpu-fill"></use>
                        </svg> </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Hotel Booking:</h3>
                        <p>We, the Best Travel Agents In Bhopal, understand the importance of comfortable accommodation while traveling. Through our extensive network of partner hotels, we ensure that our clients have access to a range of options, from budget-friendly stays to luxurious resorts.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
                            <use xlink:href="#tools"></use>
                        </svg> </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Transport Services:</h3>
                        <p>Seamless transportation is the backbone of any successful travel experience. We are best Travel Agency In Bhopal, Travel India Tourism provides a range of transport options, including private cars, buses, and trains, ensuring that our clients can explore India at their own pace and convenience.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
                            <use xlink:href="#tools"></use>
                        </svg> </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Flight Booking:</h3>
                        <p>With access to a vast database of airlines and flight routes, we, as the Best Travel Agents In Bhopal, facilitate hassle-free flight bookings, ensuring that our clients can reach their desired destinations with ease..</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
                            <use xlink:href="#tools"></use>
                        </svg> </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Visa Assistance:</h3>
                        <p>Navigating the complexities of visa applications can be a daunting task. Our dedicated team of experts, recognized as the Best Visa Agents In Bhopal, provides comprehensive assistance in securing visas for both domestic and international travel, simplifying the process for our clients.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
                            <use xlink:href="#tools"></use>
                        </svg> </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Tour India and International:</h3>
                        <p>Whether it's the vibrant streets of New York or the serene landscapes of Bali, Travel India Tourism extends its expertise in curating international travel experiences. Our itineraries are designed to offer a perfect blend of exploration, relaxation, and cultural immersion..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="mission">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6"> <img src="images/about5.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" style="margin-left: 30px;">Our Mission</h1>
                <p class="lead" style="margin-left: 30px;">Welcome to Quick Tripz, Our mission is to facilitate a profound journey for devotees and seekers, guiding them through the depths of Hindu spirituality. We curate a comprehensive platform that honors the sacred scriptures, rituals, and teachings of Hinduism, offering insights and experiences to deepen one's connection with the divine. Through immersive content and multimedia resources, we virtually transport pilgrims to revered temples and holy sites, fostering a sense of reverence and devotion. Rooted in the principles of dharma, seva, and bhakti, we aim to create a supportive community where seekers can connect and grow in their spiritual practice. Whether you're embarking on your first pilgrimage or seeking to deepen your understanding, Train Yatra is your trusted companion on the path to self-discovery and divine realization. Join us as we journey together towards the heart of Hindu spirituality, embracing the timeless wisdom of our heritage and awakening the soul to its highest potential.</p>

            </div>
        </div>
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