@extends('layouts.main')
@section('content')
    {{-- description box --}}
    <div class="container mt-5 pt-5">
        <div class="row product-detail-row">
            <div class="col-auto product-detail-column product-detail-image-container">
                <img src="{{ asset('assets/img/product1.png') }}" alt="Product Image" class="product-detail-image">
            </div>
            <div class="col product-detail-column product-detail-description-container">
                <div class="product-detail-description">
                    <div class="product-detail-description-box">Deskripsi</div>
                    <div class="product-detail-heading">Tarisland</div>
                    <div class="product-detail-subheading">Level Infinite</div>
                    <div class="product-detail-full-description">
                        "Tarisland" adalah game MMORPG (Massively Multiplayer Online Role-Playing Game) yang dikembangkan
                        oleh
                        Tencent Games. Game ini menawarkan dunia fantasi yang luas dan mendalam dengan berbagai fitur
                        menarik
                        yang dirancang untuk memberikan pengalaman bermain yang kaya dan imersif. Berikut adalah beberapa
                        fitur
                        utama dari "Tarisland":
                        1. Dunia Fantasi yang Luas: Tarisland menawarkan dunia terbuka yang besar dan beragam untuk
                        dijelajahi.
                        Pemain dapat menjelajahi berbagai lingkungan seperti hutan, pegunungan, gurun, dan kota-kota dengan
                        arsitektur yang unik dan menawan.
                    </div>
                    <a href="#" class="product-detail-button">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="col product-detail-column product-detail-testimonial-container">
                <div class="product-detail-testimonial">
                    <div class="product-detail-testimonial-box-title">Testimonial</div>
                    <div class="product-detail-testimonial-box">
                        <div class="testimonial-name">John Doe</div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-description">"Tarisland has completely transformed my gaming experience. The
                            graphics are stunning and the gameplay is immersive. Highly recommend!"</div>
                    </div>
                    <div class="product-detail-testimonial-box">
                        <div class="testimonial-name">Jane Smith</div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="testimonial-description">"A fantastic MMORPG with a rich fantasy world. The quests are
                            engaging, and the community is welcoming."</div>
                    </div>
                    <div class="product-detail-testimonial-box">
                        <div class="testimonial-name">Alice Johnson</div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-description">"A fantastic MMORPG with a rich fantasy world. The quests are
                            engaging, and the community is welcoming."</div>
                    </div>
                    <div class="product-detail-testimonial-box">
                        <div class="testimonial-name">Bob Brown</div>
                        <div class="testimonial-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="testimonial-description">"A fantastic MMORPG with a rich fantasy world. The quests are
                            engaging, and the community is welcoming."</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- category menu --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="category-buttons-container">
                    <a href="#" class="btn btn-dark category-btn active">Crystal</a>
                    <a href="#" class="btn btn-dark category-btn">Monthly Subs</a>
                    <a href="#" class="btn btn-dark category-btn">Battle Pass</a>
                    <a href="#" class="btn btn-dark category-btn">Hot Bundles</a>
                    <a href="#" class="btn btn-dark category-btn">Custom Bundles</a>
                    <!-- Add more buttons as needed -->
                </div>
            </div>
        </div>
    </div>

    {{-- Price List Section --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 mt-2">
                <div class="row">
                    <!-- Price List Section -->
                    <div class="col-md-6">
                        <div class="price-list">
                            <div class="price-list-item">
                                <span class="price-list-text">60 Crystal</span>
                                <span class="price-list-price" data-price="10000">Rp.10.000</span>
                                <button class="cart-button">
                                    <i class="fas fa-shopping-cart cart-icon"></i>
                                </button>
                                <button class="xmark-button">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="price-list">
                            <div class="price-list-item">
                                <span class="price-list-text">120 Crystal</span>
                                <span class="price-list-price" data-price="20000">Rp.20.000</span>
                                <button class="cart-button">
                                    <i class="fas fa-shopping-cart cart-icon"></i>
                                </button>
                                <button class="xmark-button">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Add additional items as needed -->

                    {{-- Form Invoice --}}
                    <div class="col-md-12">
                        <form action="#">
                            <div class="form-group invoice">
                                <label for="text" class="form-label">Detail Pesanan / Invoice</label>
                                <input type="text" id="text" class="form-input" required>
                            </div>
                        </form>
                    </div>

                    <!-- Customer Service Card -->
                    <div class="col-md-12 mb-5">
                        <div class="customer-service-card">
                            <i class="fas fa-clock customer-service-icon"></i>
                            <h2 class="customer-service-heading">Customer Service 24/7</h2>
                            <p class="customer-service-description">Setiap kali Anda mengalami masalah, Anda dapat
                                menghubungi
                                layanan pelanggan kami. Tim Burpi akan menganalisis masalah tersebut dan menghubungi Anda
                                sesegera mungkin.</p>
                            <button class="customer-service-button">
                                <i class="fas fa-comments customer-service-button-icon"></i> Layanan Chat 24/7
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 mt-2">
                <div class="account-details">
                    <form action="/detail_transaction" method="get">
                        <div class="detail-akun-box">
                            Detail Akun
                        </div>
                        <div class="form-group">
                            <label for="user-id" class="form-label">ID User</label>
                            <input type="text" id="user-id" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <select id="server" class="form-input" required>
                                <option value="">Pilih Server</option>
                                <option value="server1">Server 1</option>
                                <option value="server2">Server 2</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="detail-akun-box mt-1">
                            Data Pemesanan
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp" class="form-label">Whatsapp</label>
                            <input type="tel" id="whatsapp" class="form-input" required>
                        </div>

                        <div class="detail-akun-box mt-1">
                            Promo Code
                        </div>
                        <div class="form-group">
                            <select id="promocode" class="form-input" required>
                                <option value="">Pilih Promo Code</option>
                                <option value="promo1">Promo 1</option>
                                <option value="promo2">Promo 2</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        {{-- Payment Method --}}
                        <div class="detail-akun-box mt-1">
                            Metode Pembayaran
                        </div>
                        <!-- Payment Boxes -->
                        <div class="payment-box" id="payment-box-1">
                            Klik untuk memilih metode pembayaran 1
                        </div>
                        <div class="payment-box" id="payment-box-2">
                            Klik untuk memilih metode pembayaran 2
                        </div>
                        <div class="payment-box" id="payment-box-3">
                            Klik untuk memilih metode pembayaran 3
                        </div>

                        <!-- Total Price Section -->
                        <div class="total-price-section">
                            <div class="total-price-text">Total Harga</div>
                            <div class="price" id="total-price">Rp. 100.000</div>
                            <div class="small-text"><b>Pastikan data game Anda sudah benar. Kesalahan input data game bukan
                                    tanggung jawab kami.</b></div>
                            <div class="small-text">Harga termasuk pajak dan biaya administrasi</div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Bayar Sekarang" class="form-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartButtons = document.querySelectorAll(".cart-button");
            const xmarkButtons = document.querySelectorAll(".xmark-button");
            let totalPrice = 0;

            const updateTotalPrice = () => {
                document.getElementById('total-price').textContent =
                    `Rp. ${totalPrice.toLocaleString('id-ID')}`;
            };

            cartButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const priceListItem = this.closest(".price-list");

                    const priceElement = event.target.closest('.price-list-item').querySelector(
                        '.price-list-price');
                    const price = parseInt(priceElement.getAttribute('data-price'), 10);
                    totalPrice += price;
                    updateTotalPrice();

                    // Toggle the active class on the clicked item
                    priceListItem.classList.toggle("active");

                    // Toggle button visibility
                    this.style.display = 'none';
                    priceListItem.querySelector(".xmark-button").style.display = 'flex';
                });
            });

            xmarkButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const priceListItem = this.closest(".price-list");

                    const priceElement = event.target.closest('.price-list-item').querySelector(
                        '.price-list-price');
                    const price = parseInt(priceElement.getAttribute('data-price'), 10);
                    totalPrice -= price;
                    updateTotalPrice();

                    // Toggle the active class on the clicked item
                    priceListItem.classList.toggle("active");

                    // Toggle button visibility
                    this.style.display = 'none';
                    priceListItem.querySelector(".cart-button").style.display = 'flex';
                });
            });

            // update price
            updateTotalPrice();

            // payment checklist
            const paymentBoxes = document.querySelectorAll('.payment-box');

            paymentBoxes.forEach(box => {
                box.addEventListener('click', () => {
                    // Remove active class from all payment boxes
                    paymentBoxes.forEach(box => box.classList.remove('active'));
                    // Add active class to the clicked box
                    box.classList.add('active');
                });
            });
        });
    </script>
@endsection
