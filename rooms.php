<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - ROOMS</title>
    <!-- links -->
    <?php require "inc/links.php"; ?>

</head>

<body class="bg-light">
    <!-- header -->
    <?php require "inc/header.php"; ?>
    <!-- header -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px">CHECK AVAILABILITY</h5>
                                <label for="checkin" class="form-label">Check In</label>
                                <input type="date" class="form-control shadow-none mb-3" id="checkin">
                                <label for="checkout" class="form-label">Check Out</label>
                                <input type="date" class="form-control shadow-none" id="checkout">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f1">
                                    <label for="f1" class="form-check-label">Facility One</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f2">
                                    <label for="f2" class="form-check-label">Facility Two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f3">
                                    <label for="f3" class="form-check-label">Facility Three</label>
                                </div>



                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px">GUESTS</h5>

                                <div class="d-flex">
                                    <div class="me-2">
                                        <label for="adults" class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none" id="adults">

                                    </div>
                                    <div>
                                        <label for="children" class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none" id="children">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room One</h5>
                            <div class="features mb-2">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Bathroom</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Balcony</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">3 Sofa</span>

                            </div>
                            <div class="facilities mb-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">AC</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Room Heater</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-fill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-fill bg-light text-dark text-wrap">4 Children</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h5 class="mb-4">$200 per night</h5>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 k btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room One</h5>
                            <div class="features mb-2">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Bathroom</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Balcony</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">3 Sofa</span>

                            </div>
                            <div class="facilities mb-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">AC</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Room Heater</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-fill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-fill bg-light text-dark text-wrap">4 Children</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h5 class="mb-4">$200 per night</h5>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 k btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room One</h5>
                            <div class="features mb-2">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">2 Rooms</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Bathroom</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">1 Balcony</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">3 Sofa</span>

                            </div>
                            <div class="facilities mb-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">AC</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">Room Heater</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-fill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-fill bg-light text-dark text-wrap">4 Children</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h5 class="mb-4">$200 per night</h5>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 k btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




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