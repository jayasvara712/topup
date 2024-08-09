@extends('layouts.main')
@section('content')
    <!-- Carousel -->
    <section id="slider" class="pt-5">
        <div class="container">
            <div class="slider">
                <div class="owl-carousel">
                    <a href="#">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('assets/img/banner1.jpg') }}" alt="">
                            </div>
                            <div class="more-info-box">More Info</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('assets/img/banner1.jpg') }}" alt="">
                            </div>
                            <div class="more-info-box">More Info</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('assets/img/banner1.jpg') }}" alt="">
                            </div>
                            <div class="more-info-box">More Info</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('assets/img/banner1.jpg') }}" alt="">
                            </div>
                            <div class="more-info-box">More Info</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white">Categories</h2>
                <div class="category-buttons-container">
                    <a href="#" class="btn btn-dark category-btn active">Top Seller</a>
                    <a href="#" class="btn btn-dark category-btn">via Login</a>
                    <a href="#" class="btn btn-dark category-btn">via UID</a>
                    <a href="#" class="btn btn-dark category-btn">Gift Card</a>
                    <a href="#" class="btn btn-dark category-btn">Razer Payment</a>
                    <!-- Add more buttons as needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-6 col-md-4 col-lg-3 mb-4">
                <a href="/detail">
                    <div class="card product-card">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/product1.png') }}"" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tarisland</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Repeat for more products -->
        </div>
        <div class="row pt-3 pb-5">
            <div class="view-all-container text-center">
                <button id="view-all-btn" class="view-all-btn bg-transparent">View All <i
                        class="fas fa-caret-down"></i></button>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container-fluid mt-5 about-us-section">
        <div class="about-us-content container">
            <div class="row">
                <div class="col-12 col-md-12 text-md-start">
                    <div class="about-us-header">
                        <h1 class="about-text">About</h1>
                        <h2 class="us-text">Us</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 text-center">
                    <div class="about-us-body">
                        <h3>Burpigames</h3>
                        <p>provides top up games and vouchers with the best prices, fast process and 100%
                            Legal and Trusted!</p>
                        <div class="about-us-cards d-flex justify-content-center">
                            <!-- Add your cards here -->
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="services-section container text-center">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="service-card p-3">
                                    <i class="fas fa-gamepad service-icon"></i>
                                    <h4>Gaming Top-Up</h4>
                                    <p>Top up your favorite games quickly and easily with our secure payment options.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="service-card p-3">
                                    <i class="fas fa-gift service-icon"></i>
                                    <h4>Gift Cards</h4>
                                    <p>Purchase gift cards for various platforms and services at the best prices.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="service-card p-3">
                                    <i class="fas fa-certificate service-icon"></i>
                                    <h4>Top Seller Rewards</h4>
                                    <p>Earn rewards and exclusive benefits by becoming one of our top sellers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Join Now Section -->
    <div class="container-fluid mt-5 join-now-section">
        <img src="/assets/img/bannersec2.gif" alt="Join Now Background" class="background-image">
        <div class="join-now-content container">
            <h2>JOIN NOW</h2>
            <p>Join as a reseller to promote products available at Burpistore and receive profits for every successful sale.
            </p>
            <a href="/reseller" class="btn-join">REGISTER AS RESELLER</a>
        </div>
        <img src="/assets/img/imagesec2.png" alt="Floating Image" class="floating-image">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const products = document.querySelectorAll('.product-card');
            const viewAllBtn = document.querySelector('.view-all-btn');
            const visibilityThreshold = 1024; // Screen width threshold
            let currentVisibleCount = window.innerWidth <= visibilityThreshold ? 6 : 4;

            // Function to update visibility of products and the button
            function updateProductVisibility() {
                const screenWidth = window.innerWidth;
                const visibleCount = screenWidth >= visibilityThreshold ? 4 : 6;
                products.forEach((product, index) => {
                    if (index < currentVisibleCount) {
                        product.style.display = 'block'; // Show product
                    } else {
                        product.style.display = 'none'; // Hide product
                    }
                });

                // Show the "View All" button only if there are more products to show
                if (currentVisibleCount < products.length) {
                    viewAllBtn.style.display = 'inline-flex';
                } else {
                    viewAllBtn.style.display = 'none';
                }
            }

            // Initially show first set of products
            updateProductVisibility();

            // Event listener for the "View All" button
            viewAllBtn.addEventListener('click', function() {
                const screenWidth = window.innerWidth;
                const increaseCount = screenWidth >= visibilityThreshold ? 4 : 6;
                currentVisibleCount +=
                    increaseCount; // Increase the visible count by 4 or 3 based on screen size
                updateProductVisibility();
            });

            // Update product visibility on window resize
            window.addEventListener('resize', function() {
                currentVisibleCount = window.innerWidth >= visibilityThreshold ? 4 : 6;
                updateProductVisibility();
            });
        });
    </script>
@endsection
