@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <!-- Left Column: Hero Content -->
        <div class="hero-content">
            <h1>Welcome to Anna's Scrapbooking Studio</h1>
            <p>
                Welcome to Just Scrapping Studios, where creativity and memories come together! Founded by Anna Robert,
                a passionate photographer and graphic designer with years of experience, our studio is a space designed
                for individuals who love to capture and cherish life's special moments.
            </p>
            <p>
                So whether you’re looking to craft a heartfelt gift, learn new techniques, or simply unwind with a cup
                of coffee, Just Scrapping Studios is the place for you. Join us on this creative journey and let’s make
                memories that last a lifetime!
            </p>
            <div class="cta-buttons">
                <a href="{{ url('services') }}" class="btn primary-btn">Join a Course</a>
                <a href="{{ url('announcements') }}" class="btn secondary-btn">Latest News</a>
            </div>
        </div>

        <!-- Right Column: Image -->
        <div class="hero-image">
            <img src="{{ asset('images/aout4.jpg') }}" alt="Anna" />
        </div>
    </section>
@endsection
