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
            <!-- Price List Section -->
            <div class="col-sm-12 col-md-12 col-lg-7 mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="price-list">
                            <div class="price-list-item">
                                <span class="price-list-text" data-name="60 Crystal">60 Crystal</span>
                                <span class="price-list-price" data-price="10000">
                                    Rp.10.000
                                    <br>
                                    <div class="price-lsit-disc-text">Normal Price : <span
                                            class="price-list-disc">Rp.20.000</span></div>
                                </span>
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
                                <span class="price-list-text" data-name="120 Crystal">120 Crystal</span>
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
                                <label for="text" class="form-label">Order Detail / Invoice</label>
                                <input type="text" id="text" class="form-input" required>
                            </div>
                        </form>
                    </div>

                    <!-- Customer Service Card -->
                    <div class="col-md-12 mb-5">
                        <div class="customer-service-card">
                            <i class="fas fa-clock customer-service-icon"></i>
                            <h2 class="customer-service-heading">Customer Service 24/7</h2>
                            <p class="customer-service-description">Whenever you have any problem, you can contact our
                                customer service. Burpi team will analyze the problem and get back to you
                                as soon as possible.</p>
                            <button class="customer-service-button">
                                <i class="fas fa-comments customer-service-button-icon"></i> Customer Service 24/7
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            {{-- account detail --}}
            <div class="col-sm-12 col-md-12 col-lg-5 mt-2">
                <div class="account-details">
                    <form id="paymentForm">
                        <div class="account-details-box">
                            Account Detail
                        </div>
                        <div class="form-group">
                            <label for="user-id" class="form-label">ID User</label>
                            <input type="text" id="user_id" name="user_id" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <select id="server" class="form-input" required>
                                <option value="">Select Server</option>
                                <option value="server1">Server 1</option>
                                <option value="server2">Server 2</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="account-details-box mt-1">
                            Order Data
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp" class="form-label">Whatsapp</label>
                            <input type="tel" id="whatsapp" name="whatsapp" class="form-input" required>
                        </div>

                        <div class="account-details-box mt-1">
                            Promo Code
                        </div>
                        <div class="form-group">
                            <select id="promo_code" name="promo_code" class="form-input" required>
                                <option value="">Select Promo Code</option>
                                <option value="promo1">Promo 1</option>
                                <option value="promo2">Promo 2</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>

                        {{-- Payment Method --}}
                        <div class="account-details-box mt-1">
                            Payment Method
                        </div>
                        <!-- Payment Boxes -->
                        <div class="payment-box" id="payment-1">
                            Payment Method 1
                        </div>
                        <div class="payment-box" id="payment-2">
                            Payment Method 2
                        </div>
                        <div class="payment-box" id="payment-3">
                            Payment Method 3
                        </div>

                        <!-- Total Price Section -->
                        <div class="total-price-section">
                            <div class="total-price-text">Total Price</div>
                            <div class="price">Rp.
                                <input type="text" name="total_price" id="total_price" value="0" readonly>
                            </div>
                            <div class="small-text"><b>Make sure your game data is correct. Game data input errors are not
                                    our responsibility.</b></div>
                            <div class="small-text">Price includes tax and administration fee</div>
                        </div>

                        <input type="hidden" name="payment_method" id="payment_method" value="">
                        <input type="hidden" name="product_name" id="product_name" value="">

                        <div class="form-group">
                            <button type="button" class="form-button" id="submitForm">Pay Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal confirmation --}}
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content confirmation">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Order Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="confirmProduct_name"></p>
                    <p id="confirmUser_id"></p>
                    <p id="confirmServer"></p>
                    <p id="confirmEmail"></p>
                    <p id="confirmWhatsapp"></p>
                    <p id="confirmPromo_code"></p>
                    <p id="confirmPayment_method"></p>
                    <p id="confirmTotal_price"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn__cancel" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn__confirm" id="confirmData">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    {{-- custom script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartButtons = document.querySelectorAll(".cart-button");
            const xmarkButtons = document.querySelectorAll(".xmark-button");
            const productName = document.getElementById("product_name");
            let totalPrice = 0;
            let activePriceListItem = null;

            const updateTotalPrice = () => {
                document.getElementById('total_price').value = totalPrice.toLocaleString('id-ID');
            };

            cartButtons.forEach(button => {
                button.addEventListener("click", function(event) {
                    const priceListItem = this.closest(".price-list");

                    // If there is already an active item, deactivate it
                    if (activePriceListItem && activePriceListItem !== priceListItem) {
                        deactivateItem(activePriceListItem);
                    }

                    const priceElement = priceListItem.querySelector('.price-list-price');
                    const nameElement = priceListItem.querySelector('.price-list-text');
                    const price = parseInt(priceElement.getAttribute('data-price'), 10);
                    const name = nameElement.getAttribute('data-name');

                    if (!isNaN(price)) {
                        totalPrice = price; // Set the price of the new active item
                        updateTotalPrice();
                    }

                    if (name) {
                        product_name.value = name;
                    }

                    // Activate the clicked item
                    priceListItem.classList.add("active");
                    this.style.display = 'none';
                    priceListItem.querySelector(".xmark-button").style.display = 'flex';

                    // Set this item as the active one
                    activePriceListItem = priceListItem;
                });
            });

            xmarkButtons.forEach(button => {
                button.addEventListener("click", function(event) {
                    const priceListItem = this.closest(".price-list");

                    // Deactivate the current active item
                    deactivateItem(priceListItem);

                    // Clear the active item reference
                    activePriceListItem = null;
                });
            });

            // Function to deactivate a price list item
            const deactivateItem = (priceListItem) => {
                const priceElement = priceListItem.querySelector('.price-list-price');
                const price = parseInt(priceElement.getAttribute('data-price'), 10);

                if (!isNaN(price)) {
                    totalPrice -= price; // Subtract the price of the deactivated item
                    updateTotalPrice();
                }

                priceListItem.classList.remove("active");
                priceListItem.querySelector(".cart-button").style.display = 'flex';
                priceListItem.querySelector(".xmark-button").style.display = 'none';
            };

            // Initialize price
            updateTotalPrice();


            // payment checklist
            const paymentBoxes = document.querySelectorAll('.payment-box');
            const paymentMethod = document.getElementById('payment_method');

            paymentBoxes.forEach(box => {
                box.addEventListener('click', () => {
                    // Remove active class from all payment boxes
                    paymentBoxes.forEach(box => box.classList.remove('active'));
                    // Add active class to the clicked box
                    box.classList.add('active');
                    paymentMethod.value = box.id;
                });
            });

            // confirmation modal
            document.getElementById('submitForm').addEventListener('click', function() {
                const user_id = document.getElementById('user_id').value;
                const server = document.getElementById('server').value;
                const email = document.getElementById('email').value;
                const whatsapp = document.getElementById('whatsapp').value;
                const payment_method = document.getElementById('payment_method').value;
                const total_price = document.getElementById('total_price').value;
                const product_name = document.getElementById('product_name').value;

                document.getElementById('confirmUser_id').innerText = `User ID: ${user_id}`;
                document.getElementById('confirmServer').innerText = `Server: ${server}`;
                document.getElementById('confirmEmail').innerText = `Email: ${email}`;
                document.getElementById('confirmWhatsapp').innerText = `Whatsapp: ${whatsapp}`;
                document.getElementById('confirmPayment_method').innerText =
                    `Payment Method: ${payment_method}`;
                document.getElementById('confirmTotal_price').innerText = `Total Price: ${total_price}`;
                document.getElementById('confirmProduct_name').innerText = `Product Name: ${product_name}`;

                const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                confirmationModal.show();
            });

            // store data
            document.getElementById('confirmData').addEventListener('click', function() {
                alert('Data has been saved to the cart!');
                const confirmationModal = bootstrap.Modal.getInstance(document.getElementById(
                    'confirmationModal'));
                confirmationModal.hide();
                document.getElementById('userForm').reset();
            });
        });
    </script>
@endsection
