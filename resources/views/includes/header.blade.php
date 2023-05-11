<!-- Topbar Start -->
<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
            </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn-lg-square text-orange border-end rounded-0" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn-lg-square text-orange border-end rounded-0" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn-lg-square text-orange border-end rounded-0" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn-lg-square text-orange pe-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-orange m-0">Baker</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{ route('home.index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('product.index') }}" class="nav-item nav-link">Products</a>
        </div>
        <div class=" d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <i class="fa fa-phone text-orange"></i>
            </div>
            <div class="ps-3">
                <small class="text-orange mb-0">Call Us</small>
                <p class="text-light fs-5 mb-0">+012 345 6789</p>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
