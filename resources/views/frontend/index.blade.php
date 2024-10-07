@extends('frontend.app')

@section('content')

<section class="hero-section">
    <!-- Video Background -->
    <video autoplay muted loop playsinline id="heroVideo">
        <source src="{{ asset('img/frontend/hero/hero.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay Content -->
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Text Content -->
            <div class="col-lg-6 text-white hero-text">
                <h1 class="display-3 fw-bold animated-text"></h1>
                <p class="lead mb-4">Enjoy award-winning stereo beats with wireless listening freedom and sleek, streamlined design.</p>
                <a href="#" class="btn btn-dark btn-lg">Our Products <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Right Image Content -->
            <div class="col-lg-6 d-none d-lg-block hero-image">
                <img src="{{ asset('img/frontend/hero/Hasnatinternational-2.webp') }}" alt="Product Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about-us" class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 text-white about-text">
                <h2 class="display-4 fw-bold">Who We Are</h2>
                <p class="lead mb-4">At Nexolio, we push the boundaries of innovation to deliver cutting-edge digital solutions. Our focus is on revolutionizing the way you experience technology, offering services that blend creativity and technical expertise.</p>
                <p class="mb-4">With a team of passionate professionals, we specialize in web development, mobile app design, digital marketing, and beyond. Your success is our mission, and we're here to make it happen.</p>
                <a href="#" class="btn btn-outline-light btn-lg">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Image/Graphic Content -->
            <div class="col-lg-6 d-none d-lg-block about-image">
                <div class="floating-images">
                    <img src="{{ asset('img/frontend/about/about-img1.png') }}" alt="About Image" class="img-fluid floating-img floating-img-1">
                    <img src="{{ asset('img/frontend/about/about-img2.png') }}" alt="About Image" class="img-fluid floating-img floating-img-2">
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.services')
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
    // Typing effect initialization
    var typed = new Typed('.animated-text', {
        strings: ["Experience Media Like Never Before"],
        typeSpeed: 60,
        backSpeed: 30,
        loop: false,
        showCursor: false,
    });

    // Scroll effect for hero section text and image
    document.addEventListener('scroll', function () {
        const scrollPos = window.scrollY || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;

        const heroText = document.querySelector('.hero-text');
        const heroImage = document.querySelector('.hero-image');

        const maxScroll = windowHeight * 0.6;  // Max scroll point before hero text is fully offscreen
        const scrollPercentage = Math.min(scrollPos / maxScroll, 1); // Limits scroll to a max of 1

        // Calculate translation and opacity based on scroll percentage
        heroText.style.transform = `translateX(${scrollPercentage * -100}%)`;
        heroImage.style.transform = `translateX(${scrollPercentage * 100}%)`;

        // Reduce opacity as you scroll down
        heroText.style.opacity = `${1 - scrollPercentage}`;
        heroImage.style.opacity = `${1 - scrollPercentage}`;
    });
</script>

@endpush

@endsection

<style>
    /* Hero Section */
    .hero-section {
        position: relative;
        height: 100vh; /* Full viewport height */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    /* Video Background */
    #heroVideo {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1; /* Behind the content */
        transform: translate(-50%, -50%);
        background-size: cover;
        overflow: hidden;
    }

    /* Hero Text and Image */
    .hero-text {
        position: relative;
        z-index: 2;
        color: #fff; /* White text */
        transform: translateX(0); /* Start in place */
        opacity: 1; /* Fully visible */
        transition: transform 0.5s, opacity 0.5s;
    }

    .hero-image {
        position: relative;
        z-index: 2;
        transform: translateX(0); /* Start in place */
        opacity: 1; /* Fully visible */
        transition: transform 0.5s, opacity 0.5s;
    }

    /* Typing effect for h1 */
    .animated-text {
        font-size: 4rem;
        font-weight: 700;
    }

    /* Button styling */
    .hero-section .btn-dark {
        background-color: #111;
        border-color: #111;
        padding: 0.75rem 1.5rem;
        font-size: 1.1rem;
    }

    .hero-section .btn-dark:hover {
        background-color: #333;
    }

    /* Responsive Fixes for Small Screens */
    @media screen and (max-width: 768px) {
        .hero-text h1 {
            font-size: 2.5rem;
        }

        .hero-text p {
            font-size: 1rem;
        }

        .hero-image {
            display: none; /* Hide image on small screens */
        }
    }

    /* About Us Section */
    .about-section {
        position: relative;
        padding: 100px 0;
        background: #121212;
        color: #fff;
        overflow: hidden;
    }

    /* Text Content Styling */
    .about-text h2 {
        font-size: 3rem;
        font-weight: 700;
        color: #fff;
    }

    .about-text p {
        font-size: 1.2rem;
        color: #ddd;
    }

    /* Floating Image Animations */
    .about-image {
        position: relative;
    }

    .floating-images {
        position: relative;
        height: 500px; /* Adjust height */
    }

    .floating-img {
        position: absolute;
        animation: floatIn 1.5s forwards ease-in-out;
    }

    /* Floating Images Positioning */
    .floating-img-1 {
        top: 10%;
        left: 20%;
        width: 50%;
        animation-delay: 1s;
    }

    .floating-img-2 {
        bottom: 10%;
        right: 20%;
        width: 50%;
        animation-delay: 1.5s;
    }

    /* Floating and Fade-In Animations */
    @keyframes floatIn {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Fixes */
    @media screen and (max-width: 768px) {
        .about-text h2 {
            font-size: 2.5rem;
        }

        .about-image {
            display: none;
        }

        .floating-images {
            height: auto;
        }
    }
</style>
