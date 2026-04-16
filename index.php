<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentacare</title>
    <link rel="stylesheet" href="style/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- TOP BAR (NEW) -->
    <div class="top-bar">
        <div class="bar-left">
            <span>Email: info@gmail.com</span>
        </div>
        <div class="right-social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <header id="header">


        <!-- Logo -->
        <div class="logo">
            <h2>Denta<span style="color:#1e3a8a;">Care</span></h2>
        </div>

        <!-- Navigation Links -->
        <input type="checkbox" id="check" value="" name="">
        <label for="check" class="check-btn"><i class="fa fa-bars" style="color: black;"></i></label>
        <nav>


            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <!-- Icons + Phone -->
        <div class="contact">

            <i class="fa fa-search searc" id="openSearch"></i>
            <button  class="a-btn" id="book-appointment"><i class="fa fa-phone"></i> Appointment</button>
        </div>




    </header>
    <!--HERO SECTION-->
    <section class="hero-slider">
        <div class="slides">
            <div class="slide active" style="background-image: url('images/dental.jpg');">
                <div class="overlay">
                    <h1>Brighten Your Smile</br> Today</h1>
                    <p>Professional dental care with a gentle touch.</br> Our experienced team ensures healthy teeth and a </br>confident smile for you and your family.</p>
                    <button  id="">Book Appointment</button>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/dental3.avif');">
                <div class="overlay">
                    <h1>Regular Checkups </br> Healthy Teeth</h1>
                    <hr>
                    <p>Stay ahead of dental problems with our thorough</br> checkups and personalized care plans.</br> Prevention is the key to lasting smiles.</p>

                    <button id="book-appointment">Schedule a Checkup</button>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/dental4.avif');">
                <div class="overlay">
                    <h1>Emergency Dental</br> Care</h1>
                    <hr>
                    <p>Immediate attention for dental emergencies. Our expert team is here </br>to provide fast, reliable, and gentle treatment.</p>
                    <button>Contact Us Now</button>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="arrows">
            <span class="prev">&#10094;</span>
            <span class="next">&#10095;</span>
        </div>

        <!-- Dots -->
        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <!--SVG SECTION-->

    <div class="section">
        <svg viewBox="0 0 1440 100">
            <path fill="#1e3a8a" d="M0,0 C720,100 720,0 1440,100 L1440,0 L0,0 Z"></path>
        </svg>
    </div>
    <div class="whatsapp-float">
        <a href="https://wa.me/923008723449" target="_blank">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <div id="scroll-top"><i class="fa-solid fa-arrow-up"></i></div>

    <!-- services section---->
    <section id="dental-services" style="padding: 60px 20px; font-family: Arial, sans-serif;">
        <div style="max-width: 900px; margin: 0 auto; text-align: center;">
            <h2 style="font-size: 32px; color: #333; margin-bottom: 20px;">
                From Implants to Aesthetic Dentistry - Comprehensive Dental Solution For Every Smile
            </h2>
            <h3 style="font-size: 24px; color: #555; margin-bottom: 15px;">
                Our Range of Services
            </h3>
            <p style="font-size: 16px; color: #666; line-height: 1.6; margin-bottom: 15px;">
                At our clinic, the team of the best dentists in Karachi provides a wide range of dental services, including restorative treatments like implants, general check-ups, cosmetic dentistry, and much more.
            </p>
            <p style="font-size: 16px; color: #666; line-height: 1.6;">
                We take pride in offering comprehensive dental care services, including pediatric dentistry, orthodontics, and more, tailored to keep every smile healthy and beautiful.
            </p>
        </div>
    </section>

    <!--ABOUT SECTION-->
    <section class="about-section" id="about">
        <div class="container">
            <!-- Left Column -->
            <div class="left">
                <h2>About Our Dental Clinic</h2>
                <strong>Leading Dental Services in Karachi, Pakistan serving you since 2000</strong>
                <br>
                <br>

                <p>
                    Dentacare is a multi-specialty dental clinic located in the heart of Gulshan-e-Iqbal, near Maskan Chowrangi. We take pride in being one of the largest dental care facilities in Karachi. Our clinic also houses the state-of-the-art Dentacare Laboratory,
                    providing advanced dental services all under one roof.
                    <br>

                    The clinic operates with a focus on providing expert care across all dental specialties,
                </p>
               <a href="tel:03002195473">
                 <button>Contact</button>
                          </a>
            </div>

            <!-- Right Column: Content -->
            <div class="right">
                <div class="ima-div">
                    <img src="images/ImageService3.webp" alt="Dental Care" />
                </div>
            </div>
        </div>
    </section>
    <!-- Bottom Curve -->
    <div class="bottom-curve">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path fill="#e7e7e7" d="M0,0 Q720,120 1440,0 L1440,0 L0,0 Z"></path>
        </svg>
    </div>








    <!--gallery-section--->
    <section id="dental-services " style="padding: 40px 20px; font-family: Arial, sans-serif; ">
        <div style="max-width: 900px; margin: 0 auto; text-align: center;">
            <p class="section-tag" style="font-size:18px;">Our Services</p>
            <h2 style="font-size: 36px;font-weight:700; color: #0a2540; margin-bottom: 15px;">
                Our Range of Services
            </h2>
            <p style="font-size: 16px; color: #666; line-height: 1.6; margin-bottom: 15px;">
                At our clinic, the team of the best dentists in Karachi provides a wide range of dental services, including restorative treatments like implants, general check-ups, cosmetic dentistry, and much more.
            </p>

        </div>

    </section>
    <section class="gallery-section" id="services">


        <div class="gallery-container">

            <div class="gallery-content">
                <button class="btn-one"><i class="fa-solid fa-tooth"></i>Expertise Services</button>

                <h2>From Implants to Aesthetic Dentistry – Comprehensive Dental Solution For Every Smile</h2>
                <br>
                <h3>Our Range of Services</h3>
                <br>
                <p>
                    At our clinic, the team of the best dentists in Karachi provides a wide range of dental services, including restorative treatments like implants, general check-ups, cosmetic dentistry, and much more.
                </p>
                <br>
                <p>
                    At our clinic, the team of the best dentists in Karachi provides a wide range of dental services, including restorative treatments like implants, general check-ups, cosmetic dentistry, and much more.
                </p>

                <button class="btn-one">Explore our services</button>


            </div>
            <!--end gallery-content--->
            <div class="gallery-images">
                <div class="gallery-item"><img src="images/cometic.webp" alt="Gallery Image 1">
                    <h4>Dental Implant</h4>
                </div>
                <div class="gallery-item"><img src="images/dental.jpg" alt="Gallery Image 2">
                    <h4>Teeth Whitening</h4>
                </div>
                <div class="gallery-item"><img src="images/dental3.avif" alt="Gallery Image 3">
                    <h4>Dental Checkup</h4>
                </div>
                <div class="gallery-item"><img src="images/dental4.avif" alt="Gallery Image 4">
                    <h4>Crown & Bridges</h4>
                </div>
                <div class="gallery-item"><img src="images/dental5.jpg" alt="Gallery Image 5">
                    <h4>Dental Checkup</h4>
                </div>
                <div class="gallery-item"><img src="images/image.webp" alt="Gallery Image 6">
                    <h4>Teeth Alignement</h4>
                </div>
                <div class="gallery-item"><img src="images/image (1).webp" alt="Gallery Image 7">
                    <h4>Invisible Aligner</h4>
                </div>
                <div class="gallery-item"><img src="images/ImageService3.webp" alt="Gallery Image 8">
                    <h4>Root Canal</h4>
                </div>
            </div>

        </div>
        <!--end gallery-container--->

    </section>
    <!--Result SECTION-->
    <section class="results-section">
        <div class="container">

            <p class="section-tag" style="font-size:18px;">Our Results</p>
            <h2 class="section-title">Real Smiles, Real Results</h2>
            <p class="section-description">
                See the transformations our patients have experienced. From teeth whitening to complete smile makeovers.
            </p>

            <div class="results-grid">

                <div class="result-box">
                    <h3 class="counter"><span style="color:green;font-size: 40px;font-weight: 700;margin-bottom: 5px;">2,000+</span></h3>
                    <p>Treatments Done</p>
                </div>

                <div class="result-box">
                    <h3 class="counter"><span style="color:blue;font-size: 40px;font-weight: 700;margin-bottom: 5px;">5.0 ★</span></h3>
                    <p>Google Rating</p>
                </div>

                <div class="result-box">
                    <h3 class="counter"><span style="color:red;font-size: 40px;font-weight: 700;margin-bottom: 5px;">98%</span></h3>
                    <p>Patient Satisfaction</p>
                </div>

            </div>

        </div>
    </section>



    <!--CAROUSEL SECTION-->
    <section class="review-section">
        <div class="review-container">

            <div class="review-content">

                <h2 class="title">Real Patient Reviews</h2>

                <h3 class="subtitle">Trusted Care at DentistCare Clinic</h3>

                <p class="desc">
                    At <strong>DentistCare Clinic</strong>, we believe that every smile matters. Our patients’ experiences reflect our commitment to providing
                    <strong>high-quality dental care</strong> in a comfortable environment.
                </p>

                <!-- <p class="desc">
    From routine checkups to advanced treatments, we ensure every patient feels 
    <strong>relaxed, confident, and well cared for</strong>.
  </p> -->

                <p class="highlight">
                    Real stories. <strong>Real smiles.</strong> Real satisfaction.
                </p>

            </div>

            <!-- RIGHT SLIDER -->
            <div class="review-box">
                <div class="review-track">

                    <div class="review-card">
                        <h4>— Ayesha Khan</h4>

                        <p class="review-text">“I’ve never felt this comfortable at a dentist before. The staff is so kind and professional!”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Ahmed Raza</h4>

                        <p class="review-text">“My smile has completely changed thanks to DentistCare Clinic. Highly recommended!”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Sana Ali</h4>
                        <p class="review-text">“The doctor explained everything clearly and made sure I was comfortable throughout the procedure.”</p>

                        <div class="stars">★★★★☆</div>
                    </div>

                    <div class="review-card">
                        <h4>— Bilal Hussain</h4>
                        <p class="review-text">“Excellent service and very hygienic environment. I trust them for all my dental care.”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Fatima Noor</h4>
                        <p class="review-text">“Quick appointment and painless treatment. Couldn’t ask for a better experience!”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Usman Tariq</h4>
                        <p class="review-text">“They truly care about their patients. I’m very satisfied with the results!”</p>

                        <div class="stars">★★★★☆</div>
                    </div>

                    <!-- duplicate -->
                    <div class="review-card">
                        <h4>— Ayesha Khan</h4>
                        <p class="review-text">“I’ve never felt this comfortable at a dentist before. The staff is so kind and professional!”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Ahmed Raza</h4>
                        <p class="review-text">“My smile has completely changed thanks to DentistCare Clinic. Highly recommended!”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Sana Ali</h4>
                        <p class="review-text">“The doctor explained everything clearly and made sure I was comfortable throughout the procedure.”</p>

                        <div class="stars">★★★★☆</div>
                    </div>

                    <div class="review-card">

                        <h4>— Bilal Hussain</h4>
                        <p class="review-text">“Excellent service and very hygienic environment. I trust them for all my dental care.”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">

                        <h4>— Fatima Noor</h4>
                        <p class="review-text">“Quick appointment and painless treatment. Couldn’t ask for a better experience!”</p>

                        <div class="stars">★★★★★</div>
                    </div>

                    <div class="review-card">
                        <h4>— Usman Tariq</h4>
                        <p class="review-text">“They truly care about their patients. I’m very satisfied with the results!”</p>

                        <div class="stars">★★★★☆</div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- FAQ Image Section -->
    <section class="faq-section-image" style="background-image: url('images/faq-pic1.webp');">
        <div class="faq-ima-overlay">
            <div class="faq-title">
                <h2>COMMON QUESTION</h2>
                <h3>Find quick answers to common questions about The <br> <span>Dental Clinic</span>, our <span>treatments</span>, <span>appointments</span>, and<span> policies</span>.</h3>
            </div>
            <!--faq-title end--->
        </div>
    </section>
    <!-- Faq section end -->
    <!-- Faq question section -->
    <section class="accordian-section">
        <div class="accordian-container">
            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>What services does your dental clinic offer?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>We offer a wide range of dental services including general checkups, teeth cleaning, cosmetic dentistry, root canal treatment, dental implants, and orthodontic care.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->


            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>Do I need an appointment or can I walk in?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>We recommend booking an appointment in advance to avoid waiting, but we do accept walk-in patients depending on availability.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>Are dental treatments painful?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>Modern dental techniques and anesthesia ensure that most treatments are comfortable and virtually painless for our patients.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>How often should I visit the dentist?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>It is recommended to visit the dentist every 6 months for a routine checkup and professional cleaning.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>What is the cost of dental treatments?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>The cost varies depending on the treatment. We provide affordable pricing and detailed consultation before starting any procedure.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>Do you offer cosmetic dentistry services?</h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>Yes, we provide cosmetic treatments such as teeth whitening, veneers, smile design, and dental bonding to enhance your smile.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>What should I do in case of a dental emergency?</h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>If you have severe pain, swelling, or injury, contact our clinic immediately. We provide emergency dental care for urgent cases.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>What services does your dental clinic offer?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>We offer a wide range of dental services including general checkups, teeth cleaning, cosmetic dentistry, root canal treatment, dental implants, and orthodontic care.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->

            <div class="accordian-item">
                <div class="accordian-title">
                    <h4>What services does your dental clinic offer?<i class="fa-solid fa-angle-down"></i></h4>
                </div>
                <!---accordian-title end----->
                <div class="accordian-content">
                    <p>We offer a wide range of dental services including general checkups, teeth cleaning, cosmetic dentistry, root canal treatment, dental implants, and orthodontic care.</p>
                </div>
                <!---accordian-content end----->
            </div>
            <!---accordian-item end----->
        </div>
        <!---accordian-container end----->
    </section>
    <!---accordian-section----->
    <!---accordian-section----->
    <section class="timing-section" id="contact">

        <!-- LEFT DIV -->
        <div class="timing-left">
            <h2>We Are Open All 7 Days</h2>
            <br>
            <br>
            <ul>
                <li><strong>Monday - Friday:</strong> 9:00 AM - 10:00 PM</li>
                <li><strong>Saturday:</strong> 10:00 AM - 8:00 PM</li>
                <li><strong>Sunday:</strong> 11:00 AM - 6:00 PM</li>
            </ul>
            <div class="timing-btn">
                <button >Book Appointment</button>
               <a href="tel:03002195473">
                    <button>Call to Contact</button></a>
            </div>
        </div>

        <!-- RIGHT DIV (MAP) -->
        <div class="timing-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7422535215405!2d67.08078907377634!3d24.906771943405808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f289b20c27f%3A0xbc684c8e17bf53a4!2sBait-ul-Mukaram%20Masjid%2C%20Block%208%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1776145354552!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

    <!---FOOTER SECTION---->
    <footer class="footer">

        <!-- 1st DIV -->
        <div class="footer-col">
            <h3>Dentacare</h3>
            <p>We provide high quality dental services with modern technology and expert doctors. Your smile is our priority.</p>
        </div>

        <!-- 2nd DIV (Services) -->
        <div class="footer-col">
            <h3>Our Services</h3>
            <ul>
                <li>Teeth Whitening</li>
                <li>Dental Implants</li>
                <li>Root Canal</li>
                <li>Braces Treatment</li>
                <li>Smile Design</li>
            </ul>
        </div>

        <!-- 3rd DIV (Contact) -->
        <div class="footer-col">
            <h3>Our Location</h3>
            <p><strong>Address:</strong> Karachi, Pakistan</p>
            <p><strong>Email:</strong> info@dentacare.com</p>
            <p><strong>Phone:</strong> +92 300 1234567</p>
        </div>

    </footer>






    <!-- Search Modal -->
    <div class="search-modal" id="searchModal">
        <div class="search-box">
            <input type="text" placeholder="Search here...">
            <span class="close-btn" id="closeSearch">&times;</span>
        </div>
    </div>
    <!-- Appointment form Modal -->
    <div class="form-overlay" id="form-overlay"></div>
    <div class="appointment-form" id="appointment-form">
        <h2>Book Your Appointment Today</h2>
        <span style ="color:#fff;background-color:red;position:absolute;top:15;right:10px;
        padding:5px;text-align:center;border-radius:50%;height:30px;width:30px;" id="close-form">&times;</span>
        <form action="" method="post" id="form-submit">

            <div class="field">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>

            <div class="field">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="field">
                <label>Phone Number</label>
                <input type="tel" name="phone" placeholder="Enter your number" required>
            </div>

            <div class="field">
                <label>Note (if any)</label>
                <textarea name="note" placeholder="Write your message..."></textarea>
            </div>

            <div class="field">
                <input type="submit" value="Book Appointment" id="submit">
            </div>

        </form>
    </div>
    <!-- End Appointment form Modal -->
    <div class="cursor"></div>
    <div class="cursor-dot"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        // modal open
        $(document).ready(function() {

            $('#openSearch').click(function() {
                $('#searchModal').fadeIn();
            });

            // sow appointment form
            // OPEN FORM
            $("#book-appointment").click(function() {
                $("#form-overlay").fadeIn();
                $("#appointment-form").fadeIn();
            });

            $('#close-form').click(function(){
                 $('#form-overlay').fadeOut();
                $('#appointment-form').fadeOut();
            });



            $('#closeSearch').click(function() {
                $('#searchModal').fadeOut();
            });
         

  // FORM SUBMIT
  $('#form-submit').submit(function(e){
    e.preventDefault();

    $.ajax({
      url: 'action.php',
      method: 'POST',
      data: $(this).serialize(),

      success: function(response){
        alert(response); 

        $('#form-submit')[0].reset(); 

       
        $('#form-overlay').fadeOut();
        $('#appointment-form').fadeOut();
      }

    });

  });

});


            /*banner- slider*/
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            const prev = document.querySelector('.prev');
            const next = document.querySelector('.next');

            let currentIndex = 0;

            // Show slide function
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                    dots[i].classList.toggle('active', i === index);
                });
            }

            // Next Slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                showSlide(currentIndex);
            }

            // Previous Slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                showSlide(currentIndex);
            }

            // Dot navigation
            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    showSlide(currentIndex);
                });
            });

            // Arrow navigation
            next.addEventListener('click', nextSlide);
            prev.addEventListener('click', prevSlide);

            // Auto slide every 5 seconds
            setInterval(nextSlide, 4000);


        


        // review animation on scroll
        const elements = document.querySelectorAll(".title, .subtitle, .desc, .highlight");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, {
            threshold: 0.3
        });

        elements.forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>