@extends('layouts.main')
@section('content')
    <!-- Carousel -->
    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/banner1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="more-info-box">More Info</div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/banner1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="more-info-box">More Info</div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/banner1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="more-info-box">More Info</div>
                </div>
                <!-- Repeat for more slides -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <!-- Repeat for more indicators -->
        </div>
    </div>

    <!-- Categories Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white">Categories</h2>
                <div class="btn-group d-flex flex-wrap" role="group" aria-label="Categories">
                    <a href="#" class="btn btn-dark category-btn active">Top Seller</a>
                    <a href="#" class="btn btn-dark category-btn">via Login</a>
                    <a href="#" class="btn btn-dark category-btn">via UID</a>
                    <a href="#" class="btn btn-dark category-btn">Razer Payment</a>
                    <a href="#" class="btn btn-dark category-btn">Gift Card</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card product-card">
                    <img src="{{ asset('assets/img/product1.png') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary btn-block">View Item</a>
                    </div>
                </div>
            </div>
            <!-- Repeat for more products -->
        </div>
        <div class="row pt-3 pb-5">
            <div class="view-all-container text-center">
                <a href="#" class="view-all-btn">View All <i class="fas fa-caret-down"></i></a>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="about-us-section">
        <div class="about-us-content container text-center">
            <h2>
                <span class="about-text">About</span>
                <span class="us-text">Us</span>
            </h2>
            <h3>Burpigames</h3>
            <p>menyediakan layanan top up games dan voucher dengan harga terbaik, proses cepat dan 100% Legal dan
                Terpercaya!</p>
            <div class="about-us-cards d-flex justify-content-center">
                <!-- Add your cards here -->
            </div>
        </div>
    </div>

    <!-- Join Now Section -->
    <div class="join-now-section">
        <div class="join-now-content container">
            <h2>Join Now</h2>
            <p>Become a reseller and enjoy numerous benefits.</p>
            <a href="#" class="btn-join">Join Now</a>
        </div>
    </div>

    <div class="row pt-5 pb-5">
        {{-- About Us --}}
        <div class="about-us-section">
            <div class="about-us-content">
                <div class="about-us-text">
                    <h2>
                        <span class="about-text">About</span>
                        <span class="us-text">Us</span>
                    </h2>
                </div>
                <h3>Burpigames</h3>
                <p>menyediakan layanan top up games dan voucher dengan harga terbaik, proses cepat dan 100% Legal dan
                    Terpercaya!.</p>
                <div class="about-us-cards">
                    <div class="about-us-card">
                        <i class="fas fa-gamepad"></i>
                        <h4>Game Top-ups</h4>
                        <p>Fast and reliable game top-up services.</p>
                    </div>
                    <div class="about-us-card">
                        <i class="fas fa-gift"></i>
                        <h4>Vouchers</h4>
                        <p>Best prices on all gaming vouchers.</p>
                    </div>
                    <div class="about-us-card">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Trusted</h4>
                        <p>100% Legal and Trusted services.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- join now --}}
    <div class="row">
        <div class="join-now-section">
            <div class="join-now-content">
                <h2>GABUNG SEKARANG</h2>
                <p>Gabung jadi reseller untuk promosikan produk yang ada di Burpistore<br>dan terima keuntungan tiap
                    berhasil
                    menjual.</p>
                <a href="#" class="btn-join">DAFTAR JADI RESELLER</a>
            </div>
        </div>
    </div>
@endsection
