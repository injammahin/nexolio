<header id="main-header" class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100">
    <div class="container">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/frontend/Nexolio_logo.svg') }}" alt="Nexolio Logo" class="logo" height="40">
        </a>

        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <!-- About Us Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>

                <!-- Services Dropdown (Trigger on hover) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('/services/web-development') }}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/mobile-development') }}">Mobile Development</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/ui-ux-design') }}">UI/UX Design</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/digital-marketing') }}">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="{{ url('/services/graphic-design') }}">Graphic Design</a></li>
                    </ul>
                </li>

                <!-- Blog Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                </li>

                <!-- Contact Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>

                <!-- Discover Button -->
                <li class="nav-item">
                    <a href="#" class="btn btn-primary ms-lg-3">Discover</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<style>/* Dropdown on Hover for Larger Screens */
    @media (min-width: 992px) {
        .navbar .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            visibility: visible;
            margin-top: 0; /* Align dropdown */
        }
    }

    /* For smaller screens (mobile), the dropdown opens on click */
    @media (max-width: 991.98px) {
        .navbar .dropdown-menu {
            display: none;
        }
        .navbar .dropdown-toggle:focus + .dropdown-menu,
        .navbar .dropdown-toggle:hover + .dropdown-menu,
        .navbar .dropdown-menu.show {
            display: block;
        }
    }

    /* Navbar General Styles */
    .navbar {
        padding: 1rem 0;
    }

    .navbar-brand .logo {
        height: 40px; /* Adjust logo size */
    }

    .nav-link {
        font-size: 1rem;
        font-weight: 500;
        color: #fff !important;
    }

    .navbar .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        font-size: 1rem;
        padding: 0.5rem 1.5rem;
        transition: background-color 0.3s;
    }

    .navbar .btn-primary:hover {
        background-color: #0b5ed7;
    }

    .navbar-toggler {
        border: none;
    }

    /* Dropdown Styling */
    .dropdown-menu {
        background-color: #333;
        border: none;
    }

    .dropdown-menu .dropdown-item {
        color: #fff;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #0d6efd;
        color: #fff;
    }

    /* Adjust spacing between navbar items */
    .navbar-nav .nav-item + .nav-item {
        margin-left: 1rem;
    }

    /* Styling for Header Scroll */
    #main-header {
        background-color: transparent;
        transition: background-color 0.5s ease, box-shadow 0.5s ease;
    }

    .scrolled #main-header {
        background-color: rgba(128, 128, 128, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #main-header .navbar-nav .nav-link {
        color: #fff;
    }

    .scrolled #main-header .navbar-nav .nav-link {
        color: #333;
    }
    </style>
<script>document.addEventListener("scroll", function() {
    const header = document.getElementById("main-header");
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (scrollPosition > 50) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
</script>
