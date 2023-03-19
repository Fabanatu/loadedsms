@extends('layouts.layout')
    <!-- Carousel Start -->
    @section('content')
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Simple and Affordable SMS Solutions</h1>
                            <!--<a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>-->
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">07033195773</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Connect with Your Customers Instantly</h1>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">info@loadedsms.com</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Bulk SMS for Any Occasion</h1>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">@loadedsms</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div id="about">
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="img/bulk-sms-img.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h5>
                        <h1 class="display-5 mb-0">We Offers the best SMS services</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Welcome to LoadedSMS, your trusted partner for bulk SMS services!</h4>
                    <p class="mb-4">We are a leading provider of affordable, reliable, and efficient SMS solutions for businesses of all sizes. Our goal is to help you connect with your customers quickly and easily through the power of SMS. At LoadedSMS, we understand the importance of effective communication for business success. That's why we offer a user-friendly platform that makes it easy to send SMS messages to large audiences with just a few clicks. Our service is ideal for promotional campaigns, customer engagement, event notifications, and more.</p>
                    <p class="mb-4">
                    Our team of experts is dedicated to delivering top-notch customer service and support. We work closely with our clients to understand their unique needs and tailor our services accordingly. Whether you need help setting up your account, selecting the right SMS package, or troubleshooting any issues, we're here to help.
                    </p>
                    <!--<div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                                <i class="fa fa-star fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">15 Years Experience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <i class="fa fa-award fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Award Winning</h4>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div id="services" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h5>
                <h1 class="display-5 mb-0">Our Excellent Features</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">                            
                            <h3 class="mb-3">Bulk SMS</h3>
                            <p>Efficient, Affordable Bulk SMS for Connecting with Your Audience Instantly</p>
                            <!--<a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">                            
                            <h3 class="mb-3">Personalized SMS</h3>
                            <p>Engage your audience like never before with personalized bulk SMS - simplify your communication strategy.</p>
                            <!--<a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">                            
                            <h3 class="mb-3">Automated SMS</h3>
                            <p>Effortlessly connect with your audience around the clock with automated SMS - enhance your customer experience.</p>
                            <!--<a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">                            
                            <h3 class="mb-3">DND Free</h3>
                            <p>Say goodbye to DND restrictions with our SMS platform - reach your audience hassle-free.</p>
                            <!--<a href="">Read More<i class="bi bi-arrow-right ms-2"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Pricing Plan Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pricing Plan</h5>
                <h1 class="display-5 mb-0">Pricing Plan For CCTV Security Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Basic Plan</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-secondary rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h3 class="text-white">Standard Plan</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Extended Plan</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Pricing Plan End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                        <h5 class="text-white text-uppercase" style="letter-spacing: 5px;">Special Offer</h5>
                        <h1 class="display-5 text-white">Lets set you up on LoadedSMS</h1>
                    </div>
                    <p class="text-white mb-4">Lets get you signed up on LoadedSMS today and get 10 free SMS units instantly! These free SMS units must be used within a month of sign-up. With our reliable and affordable bulk SMS service, you can reach your audience with ease. Don't miss out on this amazing offer - sign up now and start sending personalized SMS messages to your customers and loved ones.</p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Call 07033195773 NOW!</a>
                    <!--<a href="" class="btn btn-secondary py-md-3 px-md-5">Read More</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Team Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Team Members</h5>
                <h1 class="display-5 mb-0">Our Professional Team Members</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/team-1.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white m-0">Designation</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/team-2.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white m-0">Designation</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="img/team-3.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Team End -->


    <!-- Testimonial Start -->
    <div id="reviews" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Reviews</h5>
                <h1 class="display-5 mb-0">What People Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">LoadedSMS is hands down the best SMS platform I have used! Their service is affordable, reliable and extremely easy to use. What sets them apart from other providers is their excellent customer support.
                        </p>
                        <h4 class="text-truncate">Tobiloba Emmanuel</h4>
                        <i>Senior Backend Developer</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">The team is always available to help me with any issues or questions I have. Their platform has helped me to streamline my communication strategy and engage with my customers on a more personal level.
                        </p>
                        <h4 class="text-truncate">David Emelogwu</h4>
                        <i>UI/UX Developer</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">I highly recommend LoadedSMS to anyone looking for an efficient and cost-effective way to send bulk SMS messages.
                        </p>
                        <h4 class="text-truncate">Zainab Otukoya</h4>
                        <i>Analytics Engineer</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">I have been using LoadedSMS for over a year now and I must say, their platform has been a game-changer for my business.
                        </p>
                        <h4 class="text-truncate">Jerry Oyakhilome Anuge</h4>
                        <i>Graphics Designer</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Blog Post</h5>
                <h1 class="display-5 mb-0">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="">
                            <div class="blog-date">
                                <h5 class="text-white fw-bold mb-0">01</h5>
                                <h6 class="text-light mb-0">January</h6>
                            </div>
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">Admin</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">Web Design</span>
                            </div>
                            <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="">
                            <div class="blog-date">
                                <h5 class="text-white fw-bold mb-0">01</h5>
                                <h6 class="text-light mb-0">January</h6>
                            </div>
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">Admin</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">Web Design</span>
                            </div>
                            <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Blog End -->
     <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Enter your contact details below:</p>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="message">Message:</label>
      <textarea id="message" name="message"></textarea><br><br>
      <input type="submit" value="Send">
    </form>
  </div>
</div>

    @endsection

 