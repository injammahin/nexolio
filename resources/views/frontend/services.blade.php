<section id="services" class="services-section py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-4 fw-bold text-white">Our Services</h2>
                <p class="lead text-light">We offer a wide range of cutting-edge services tailored to meet your business needs.</p>
            </div>
        </div>

        <div class="row">
            <!-- Service 1: Web Development -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">Creating modern, responsive websites that drive user engagement and conversions.</p>
                </div>
            </div>

            <!-- Service 2: Mobile Development -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="service-title">Mobile Development</h3>
                    <p class="service-description">Building powerful mobile applications that enhance user experiences on iOS and Android.</p>
                </div>
            </div>

            <!-- Service 3: UI/UX Design -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">Designing intuitive and user-friendly interfaces that ensure a seamless digital experience.</p>
                </div>
            </div>

            <!-- Service 4: Digital Marketing -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="service-title">Digital Marketing</h3>
                    <p class="service-description">Implementing marketing strategies to help grow your online presence and reach new customers.</p>
                </div>
            </div>

            <!-- Service 5: Graphic Design -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="service-title">Graphic Design</h3>
                    <p class="service-description">Crafting visually stunning graphics to help your brand stand out from the competition.</p>
                </div>
            </div>

            <!-- Service 6: SEO Services -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="service-title">SEO Services</h3>
                    <p class="service-description">Optimizing your website to rank higher in search engines and drive more traffic.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>/* Global Section Transitions */
    section {
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    section.hidden {
        opacity: 0;
        transform: translateY(50px);
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    #heroVideo {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        transform: translate(-50%, -50%);
        background-size: cover;
        z-index: -1;
    }

    .hero-text, .hero-image {
        z-index: 2;
    }

    .animated-text {
        font-size: 4rem;
        font-weight: 700;
    }

    /* Services Section */
    .services-section {
        background-color: #121212;
    }

    .service-card {
        background-color: #1f1f1f;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        color: #fff;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.8);
    }

    /* About Us Section */
    .about-section {
        background-color: #121212;
    }

    .floating-images {
        position: relative;
        height: 500px;
    }

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
    </style>
<script>document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('hidden');
            } else {
                entry.target.classList.add('hidden');
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        section.classList.add('hidden'); // Add the hidden class to all sections initially
        observer.observe(section);
    });
});
</script>
