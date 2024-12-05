<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anna Robert's Scrapbooking Studio</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

</head>

<body>
    
 <!-- Include Navigation -->
 @include('layouts.navigation')
 
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <!-- Video Background -->
            <video id="bg-video" src="{{ asset('images/bg4.mp4') }}" autoplay muted loop playsinline></video>

            <!-- Hero Content -->
            <div class="hero-content">
                <h1>Welcome to Anna's Scrapbooking Studio</h1>
                <p>Craft the moments that matter. Join our scrapbooking courses and shop for the best products.</p>
                <div class="cta-buttons">
                    <a href="pages/about.html" class="btn primary-btn">About Us</a>
                    <a href="pages/services.html" class="btn secondary-btn">Shop Now</a>
                </div>
            </div>
        </section>

        <!-- Featured Sections -->
        <section id="features">
            <h2>Our Services</h2>
            <div class="features-grid">
                <div class="feature-box">
                    <div class="feature-image">
                        <img class="featureimage" src="assets/photo3.jpg" alt="Karachi" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-text">
                            <h2>Photography Session</h2>
                            <p>Professional Photography for your Private Functions.</p>
                        </div>
                    </div>
                </div>

                <div class="feature-box">
                    <div class="feature-image">
                        <img class="featureimage" src="assets/scrap3.jpg" alt="Hunza" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-text">
                            <h2>Trainings</h2>
                            <p>Book 1-1 Training sessions with Scrapbooking experts</p>
                        </div>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="feature-image">
                        <img class="featureimage" src="assets/product1.jpg" alt="Independence" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-text">
                            <h2>View Products</h2>
                            <p>Buy Modern Photography and Scrapbooking Products</p>
                        </div>
                    </div>
                </div>
                <div class="feature-box">
                    <div class="feature-image">
                        <img class="featureimage" src="assets/courses3.jpeg" alt="Independence" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-text">
                            <h2>Courses</h2>
                            <p>Learn modern Scrapbooking Techniques through professional Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials Section -->
        <section class="testimonials">
            <h2>Testimonials</h2>
            <div class="testimonial">
                <p>"The coffee and kids' play area made it so easy to relax and focus on my scrapbooking. Loved the
                    courses!"</p>
                <span>- Sarah P.</span>
            </div>
            <div class="testimonial">
                <p>"Anna's scrapbooking design made for the perfect wedding gift. My daughter loved it!"</p>
                <span>- Jessica W.</span>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="row">
                <a href="#"><img src="assets/insta.png" alt="Instagram" class="social-icon"></a>
                <a href="#"><img src="assets/youtube.webp" alt="YouTube" class="social-icon"></a>
                <a href="#"><img src="assets/twitter.png" alt="Twitter" class="social-icon"></a>
            </div>

            <div class="row">
                <ul>
                    <li><a href="pages/about.html">About Us</a></li>
                    <li><a href="pages/contact.html">Contact us</a></li>
                    <li><a href="pages/services.html">Our Services</a></li>
                    <li><a href="pages/announcements.html">Announcements</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="row">
                ANNA SCRAPBOOKING STUDIO © 2024 - All rights reserved
            </div>
        </div>
    </footer>

    <script src="../js/index.js"></script>
</body>

</html>