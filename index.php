<?php
include 'includes/config.php';
include 'includes/db_connection.php';
include 'includes/functions.php';
include 'includes/header.php';
?>

<!-- Hero Section with Parallax Effect -->
<section class="hero-section text-center d-flex align-items-center justify-content-center" style="background-image: url('assets/images/img_1.webp'); background-size: cover; background-position: center; height: 100vh;">
    <div class="container">
        <h1 class="animate__animated animate__fadeInDown display-3 text-white">Connecting You to Your Dream Property – Effortlessly</h1>
        <p class="lead animate__animated animate__fadeInUp text-white">Your Trusted Real Estate Partner in Delhi NCR</p>
        <a href="pages/properties.php" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Explore Listings</a>
    </div>
</section>

<!-- Enquiry Form section -->
<section id="enquiry-form" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Submit Your Details</h2>
        <form id="contactForm" action="process_enquiry.php" method="post" class="row g-3 align-items-center justify-content-center">
            <div class="col-auto">
                <label class="visually-hidden" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" 
                       placeholder="Name" minlength="2" required>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                       placeholder="Email" required>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="mobile">Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" 
                       placeholder="Mobile Number" pattern="[0-9]{10}" title="Please enter 10 digit mobile number" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</section>

<!-- Featured Properties with Hover Effects -->
<section id="featured-properties" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Featured Properties</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card property-card">
                    <img src="assets/images/img_7.jpg" class="card-img-top" alt="Property 1">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Apartment in Gurgaon</h5>
                        <p class="card-text">3 BHK | ₹1.2 Cr</p>
                        <a href="pages/property-details.php?id=1" class="btn btn-primary">View Details</a>
                    </div>
                    <div class="property-overlay">
                        <div class="overlay-content">
                            <h5>Luxury Apartment in Gurgaon</h5>
                            <p>3 BHK | ₹1.2 Cr</p>
                            <a href="pages/property-details.php?id=1" class="btn btn-outline-light">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card property-card">
                    <img src="assets/images/img_7.jpg" class="card-img-top" alt="Property 2">
                    <div class="card-body">
                        <h5 class="card-title">Commercial Space in Noida</h5>
                        <p class="card-text">2000 sq.ft | ₹2.5 Cr</p>
                        <a href="pages/property-details.php?id=2" class="btn btn-primary">View Details</a>
                    </div>
                    <div class="property-overlay">
                        <div class="overlay-content">
                            <h5>Commercial Space in Noida</h5>
                            <p>2000 sq.ft | ₹2.5 Cr</p>
                            <a href="pages/property-details.php?id=2" class="btn btn-outline-light">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card property-card">
                    <img src="assets/images/img_7.jpg" class="card-img-top" alt="Property 3">
                    <div class="card-body">
                        <h5 class="card-title">Villa in Greater Noida</h5>
                        <p class="card-text">4 BHK | ₹3 Cr</p>
                        <a href="pages/property-details.php?id=3" class="btn btn-primary">View Details</a>
                    </div>
                    <div class="property-overlay">
                        <div class="overlay-content">
                            <h5>Villa in Greater Noida</h5>
                            <p>4 BHK | ₹3 Cr</p>
                            <a href="pages/property-details.php?id=3" class="btn btn-outline-light">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Carousel -->
<section id="testimonials" class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">What Our Clients Say</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-card text-center p-4">
                        <p class="testimonial-text">"The best real estate service I've ever used. They helped me find my dream home in no time!"</p>
                        <h5 class="testimonial-author">- John Doe</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-card text-center p-4">
                        <p class="testimonial-text">"Highly professional and responsive team. They made the entire process seamless."</p>
                        <h5 class="testimonial-author">- Jane Smith</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-card text-center p-4">
                        <p class="testimonial-text">"I would recommend them to anyone looking for a reliable real estate partner."</p>
                        <h5 class="testimonial-author">- Michael Johnson</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Blog Preview Section -->
<section id="blog-preview" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Latest Blog Posts</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/images/blog1.jpg" class="card-img-top" alt="Blog 1">
                    <div class="card-body">
                        <h5 class="card-title">5 Tips for First-Time Home Buyers</h5>
                        <a href="pages/blog-post.php?id=1" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/images/blog2.jpg" class="card-img-top" alt="Blog 2">
                    <div class="card-body">
                        <h5 class="card-title">How to Choose the Right Neighborhood</h5>
                        <a href="pages/blog-post.php?id=2" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/images/blog3.jpg" class="card-img-top" alt="Blog 3">
                    <div class="card-body">
                        <h5 class="card-title">Investing in Commercial Real Estate</h5>
                        <a href="pages/blog-post.php?id=3" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Map Integration -->
<section id="property-map" class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Find Us on the Map</h2>
        <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.123456789012!2d77.12345678901234!3d28.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDA3JzI0LjQiTiA3N8KwMDcnMjQuNCJF!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>





<!-- Newsletter Signup Section -->
<section id="newsletter" class="py-5 bg-primary text-white">
    <div class="container">
        <h2 class="text-center mb-4">Subscribe to Our Newsletter</h2>
        <p class="text-center lead mb-4">Get the latest updates on properties, market trends, and exclusive offers.</p>
        <form action="scripts/subscribe.php" method="POST" class="form-inline justify-content-center">
            <input type="email" name="email" class="form-control mr-2 mb-2" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-light mb-2">Subscribe</button>
        </form>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section text-center py-5 bg-light">
    <div class="container">
        <h2 class="mb-4">Ready to Find Your Dream Property?</h2>
        <p class="lead mb-4">Contact us today and let us help you find the perfect home or investment property.</p>
        <a href="pages/contact.php" class="btn btn-primary btn-lg">Get in Touch</a>
    </div>
</section>

<!-- Using Font Awesome Icons -->
<div id="floating-icons">
    <a href="https://wa.me/your-whatsapp-number" target="_blank" class="floating-icon whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/your-instagram-username" target="_blank" class="floating-icon instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://m.me/your-facebook-username" target="_blank" class="floating-icon messenger">
        <i class="fab fa-facebook-messenger"></i>
    </a>
</div>




<script src="/assets/js/script.js"></script>
<script src="/assets/js/analytics.js"></script>
<script src="/assets/js/chatbot.js"></script>


<?php include 'includes/footer.php'; ?>