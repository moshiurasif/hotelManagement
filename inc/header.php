<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 sticky-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>


            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- navbar -->
<!-- login modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-3"></i> User Login</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" id="email">

                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" id="password">

                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a class="text-secondary text-decoration-none" href="javascript:void(0)">Forgot Password?</a>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
<!-- login modal -->
<!-- Register modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-lines-fill fs-3 me-3"></i> User Registration</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">NOTE: Your Details must match your ID (Passport, Driving License etc.) That will be require during check-in.</span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 ps-0 pe-md-3 pe-0 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none" id="name">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none" id="email">
                            </div>
                            <div class="col-md-6 ps-0 pe-md-3 pe-0 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="number" class="form-control shadow-none" id="phone">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label for="picture" class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none" id="picture">
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label for="address" class="form-label">Address</label>

                                <textarea class="form-control shadow-none" id="address" rows="1"></textarea>
                            </div>
                            <div class="col-md-6 ps-0 pe-md-3 pe-0 mb-3">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none" id="pincode">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none" id="dob">
                            </div>
                            <div class="col-md-6 ps-0 pe-md-3 pe-0 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="password">
                            </div>
                            <div class="col-md-6 p-0 mb-3">
                                <label for="password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none" id="password">
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">Register</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
<!-- Register modal -->