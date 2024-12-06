@extends('layouts.app')

@section('title', 'About Us')

@section('content')

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
                <dotlottie-player src="https://lottie.host/b09eea33-874f-446b-a88a-405c21d2b53d/BcXf9Vls4Z.lottie"
                     autoplay loop style="width: 50%; height: 50%;">
                </dotlottie-player>
            </div>
        </section>
        @endsection
        

        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
