<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Anna Robert</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

</head>

<body>
     <!-- Include Navigation -->
 @include('layouts.navigation')
 
    <main>
        <section class="hero">
            <!-- Left Column: Hero Content -->
            <div class="hero-content">
                <h1>Get in Touch</h1>
                <p>We'd love to hear from you! Fill out the form below to reach us.</p>

                <!-- Form with validation -->
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Your Name">
                        <small id="nameError" class="error-message"></small>
                    </div>

                    <div class="form-group">
                        <input type="text" id="email" placeholder="Your Email">
                        <small id="emailError" class="error-message"></small>
                    </div>

                    <div class="form-group">
                        <input type="text" id="phone" placeholder="Your Phone Number">
                        <small id="phoneError" class="error-message"></small>
                    </div>

                    <div class="form-group">
                        <textarea id="message" rows="5" placeholder="Your Message"></textarea>
                        <small id="messageError" class="error-message"></small>
                    </div>

                    <div class="cta-buttons">
                        <button type="submit" class="btn primary-btn">Send Message</button>
                    </div>

                    <!-- Success message -->
                    <p id="successMessage" style="color: green; display: none;">Thank you for reaching out to us!</p>
                </form>
            </div>

            <div class="hero-image">
                <dotlottie-player src="https://lottie.host/82a29b75-160b-48d3-97b6-f5808c180a0b/NXfMe8vuBb.json"
                    autoplay loop style="width: 50%; height: 50%;">
                </dotlottie-player>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

    <script src="../js/contact.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>