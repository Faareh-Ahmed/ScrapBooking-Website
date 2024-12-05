@extends('layouts.app')

@section('title', 'About Us')

@section('content')

        <!-- Blog Announcements Section -->
        <section class="blog-announcements">
            <h2>Latest Announcements</h2>
            <div class="blog-announcements-grid">
                <div class="announcement">
                    <h3>Upcoming Scrapbooking Workshops for Beginners</h3>
                    <p>Are you new to the world of scrapbooking? Join us for our upcoming beginner-friendly workshops,
                        where you'll learn the basics of designing beautiful scrapbook pages, from layout creation to
                        choosing the right materials. Each workshop will run one night a week for three weeks, both
                        in-studio and online, offering flexible learning options.</p>
                    <p>Whether you're documenting family moments, special occasions, or personal milestones, this
                        workshop will equip you with the skills to create stunning scrapbooks that you'll treasure
                        forever. Book your spot today!</p>
                    <img  src="{{ asset('images/scrap2.jpeg') }}" alt="Exclusive Album Collection">
                </div>
                <div class="announcement">
                    <h3>Personalized Scrapbook Albums: A Perfect Gift for Every Occasion</h3>
                    <p>Looking for the perfect gift to celebrate a loved one’s special moment? Whether it's a wedding,
                        birthday, or anniversary, a personalized scrapbook album is a meaningful way to capture memories
                        that last a lifetime.</p>
                    <p>Whether you want to craft the album yourself or let us handle the entire design process, we’re
                        here to make sure your memories are beautifully preserved. Stop by our studio today to discuss
                        your ideas or start your project online!</p>
                    <img src="{{ asset('images/scrap3.jpg') }}" alt="Holiday-Themed Supplies">
                </div>

            </div>

        </section>
        @endsection