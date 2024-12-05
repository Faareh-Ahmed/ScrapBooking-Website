<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anna Robert's Scrapbooking Studio</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
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
            <!-- Left Column: Hero Content -->
            <div class="hero-content">
                <h1>Welcome to Anna's Scrapbooking Studio</h1>
                <p>
                    Welcome to Just Scrapping Studios, where creativity and memories come together! Founded by Anna
                    Robert,
                    a passionate photographer and graphic designer with years of experience, our studio is a space
                    designed
                    for individuals who love to capture and cherish life's special moments.
                </p>
                <p>
                    So whether you’re looking to craft a heartfelt gift, learn new techniques, or simply unwind with a
                    cup
                    of coffee, Just Scrapping Studios is the place for you. Join us on this creative journey and let’s
                    make
                    memories that last a lifetime!
                </p>
                <div class="cta-buttons">
                    <a href="services.html" class="btn primary-btn">Join a Course</a>
                    <a href="announcements.html" class="btn secondary-btn">Latest News</a>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="hero-image">
                <img src="{{ asset('images/aout4.jpg') }}" alt="Anna" />
            </div>
        </section>
    </main>

    

    <!-- Include Footer -->
    @include('layouts.footer')

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>