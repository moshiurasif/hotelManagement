<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - HOME</title>
    <!-- links -->
    <?php require "inc/links.php"; ?>
    <!-- swiper js css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- links -->
    <style>
        .availability-form {
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 30px;

            }
        }
    </style>
</head>

<body class="bg-light">
    <!-- header -->
    <?php require "inc/header.php"; ?>
    <!-- header -->
    <!-- Carousel swiper Start-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.jpg" class="w-100 d-block" />
                </div>

            </div>
        </div>
    </div>
    <!--Carousel swiper End-->
    <!-- check Availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-md-5 p-3 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label for="checkin" class="form-label" style="font-weight: 500">Check In</label>
                            <input type="date" class="form-control shadow-none" id="checkin">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="checkout" class="form-label" style="font-weight: 500">Check Out</label>
                            <input type="date" class="form-control shadow-none" id="checkout">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="adult" class="form-label" style="font-weight: 500">Adult</label>
                            <select id="adult" class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label for="children" class="form-label" style="font-weight: 500">Children</label>
                            <select id="children" class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- check Availability form end -->
    <!-- our rooms -->
    <h2 class="mt-4 pt-4 mb-4 fw-bold text-center h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Simple Room Name</h4>
                        <h5 class="mb-4">200 per night</h5>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">3 Sofa</span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Room Heater</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-fill bg-light text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-fill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-fill bg-light">
                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm k btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Simple Room Name</h4>
                        <h5 class="mb-4">200 per night</h5>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">3 Sofa</span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Room Heater</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-fill bg-light text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-fill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-fill bg-light">
                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm k btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4>Simple Room Name</h4>
                        <h5 class="mb-4">200 per night</h5>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Rooms</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">3 Sofa</span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">AC</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">Room Heater</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-fill bg-light text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-fill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-fill bg-light">
                                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm k btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>
    <!-- our rooms end -->

    <!-- facilities section -->
    <h2 class="mt-4 pt-4 mb-4 fw-bold text-center h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_96423.svg" width="80px" alt="">
                <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_41622.svg" width="80px" alt="">
                <h5 class="mt-3">Television</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_43553.svg" width="80px" alt="">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_47816.svg" width="80px" alt="">
                <h5 class="mt-3">M</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_49949.svg" width="80px" alt="">
                <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>
    <!-- facilities section -->

    <!-- testimonial -->
    <h2 class="mt-4 pt-4 mb-4 fw-bold text-center h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/IMG_27079.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque suscipit et saepe natus voluptas inventore praesentium, accusantium sit deserunt.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/IMG_27079.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque suscipit et saepe natus voluptas inventore praesentium, accusantium sit deserunt.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/IMG_27079.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque suscipit et saepe natus voluptas inventore praesentium, accusantium sit deserunt.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Khon More >>></a>
        </div>
    </div>
    <!-- testimonial end -->

    <!-- Reach Us -->
    <h2 class="mt-4 pt-4 mb-4 fw-bold text-center h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-4 mb-lg-0 mb-3 rounded bg-white">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.059008038063!2d90.35490730781252!3d23.800288000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c19a338087d3%3A0xbc7f6183875634a3!2sGenuity%20Training!5e0!3m2!1sen!2sbd!4v1677404339035!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: 01838357303" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 01838357303</a>
                    <br>
                    <a href="tel: 01838357303" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 01838357303</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-twitter me-1"></i> Twitter</span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i> Facebook</span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-whatsapp me-1"></i> Whatsapp</span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i> Instagram</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Reach Us end -->

    <!-- footer section start -->
    <?php require "inc/footer.php"; ?>
    <!-- footer section end -->


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                460: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }

        });
    </script>
</body>

</html>