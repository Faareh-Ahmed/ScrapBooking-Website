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
                        <img class="featureimage" src="{{ asset('images/photo3.jpg') }}" alt="Karachi" />
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
                        <img class="featureimage" src="{{ asset('images/scrap3.jpg') }}"  alt="Hunza" />
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
                        <img class="featureimage" src="{{ asset('images/product1.jpg') }}"  alt="Independence" />
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
                        <img class="featureimage" src="{{ asset('images/courses3.jpeg') }}" alt="Independence" />
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

    <!-- Include Footer -->
    @include('layouts.footer')

    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>