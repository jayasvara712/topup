<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burpi</title>
    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"
        type="text/css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/ef7f5f6c8e.js" crossorigin="anonymous"></script>

</head>

<body>
    @include('layouts.navbar')
    @yield('content')

    <!-- Modal Structure -->
    <div class="modal fade" id="promoCodeModal" tabindex="-1" aria-labelledby="promoCodeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="promoCodeModalLabel">Check Code <span>Promotion</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Promo Items Container -->
                        <div class="col-lg-12">
                            <div class="promo-item-list">
                                <!-- Example Promo Item -->
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <!-- Repeat similar promo items for demonstration -->
                                <!-- Add more promo items as needed -->
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <div class="row promo-outline promo-item mb-3">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/product1.png') }}" alt="Promotion Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="promo-description-box">
                                            <h6 class="promo-text">TOPUPBERSAMABURPIGAMES</h6>
                                        </div>
                                        <p class="promo-expired">6 Agustus - 18 Agustus 2024</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="promo-description">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                            Perferendis quae debitis maxime perspiciatis cum nemo a, quibusdam provident
                                            fugit inventore.</p>
                                    </div>
                                </div>
                                <!-- Add more promo items as needed -->
                            </div>
                        </div>
                        <!-- View All Button -->
                        <div class="col-lg-12 text-center">
                            <button id="viewMoreBtn" class="btn">View All <i
                                    class="fas fa-caret-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="footer-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">Code Promo</a></li>
                        <li><a href="#">Gift Card</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="footer-menu">
                        <li><a href="#">Daftar Reseller</a></li>
                        <li><a href="#">Top Seller</a></li>
                        <li><a href="#">Pusat Bantuan</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i> +123 456 7890
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i> contact@burpigames.com
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-end">
                    <p class="footer-disclaimer">Nama terdaftar dan merek dagang adalah hak cipta
                        dan properti pemiliknya masing-masing.

                    </p>
                    <p class="footer-disclaimer">© 2024 burpi.com</p>
                    <ul class="footer-legal">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat Penggunaan</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script>
    {{-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> --}}
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var currencyDropdown = document.getElementById('currencyDropdown');
            var currencyIcon = document.getElementById('currencyIcon');
            var currencyText = document.getElementById('currencyText');

            var dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');
            dropdownItems.forEach(function(item) {
                item.addEventListener('click', function() {
                    var selectedCurrency = this.getAttribute('data-currency');
                    if (selectedCurrency === 'SGD') {
                        currencyText.textContent = 'SGD';
                        currencyIcon.className = 'fas fa-dollar-sign currency-icon'; // Dollar icon
                    } else if (selectedCurrency === 'IDR') {
                        currencyText.textContent = 'IDR';
                        currencyIcon.className = 'fas fa-coins currency-icon'; // Rupiah icon
                    }
                });
            });
        });

        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // showmore modal
        // Select all promo items
        const promoItems = document.querySelectorAll('.promo-item');
        const viewMoreBtn = document.getElementById('viewMoreBtn');

        // Show only the first 3 promo items initially
        let itemsToShow = 3;
        promoItems.forEach((item, index) => {
            if (index >= itemsToShow) {
                item.style.display = 'none';
            }
        });

        // Hide the View More button if there are less than 3 items
        if (promoItems.length <= 3) {
            viewMoreBtn.style.display = 'none';
        }

        // Add click event to the View More button
        viewMoreBtn.addEventListener('click', function() {
            // Show 3 more promo items each time the button is clicked
            itemsToShow += 3;
            promoItems.forEach((item, index) => {
                if (index < itemsToShow) {
                    item.style.display = 'flex';
                }
            });

            // If all items are shown, hide the View More button
            if (itemsToShow >= promoItems.length) {
                viewMoreBtn.style.display = 'none';
            }
        });
    </script>
</body>

</html>
