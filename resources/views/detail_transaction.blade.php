@extends('layouts.main')
@section('content')
    <div class="container pt-5 mt-5">
        <!-- First Column: Detailed Order Information -->
        <div class="row">
            <div class="col-md-6 col-equal-height order-info">
                <div class="row title-content">
                    <div class="col-6 title-text">
                        <h2>Order Detail</h2>
                    </div>
                    <div class="col-6 invoice-number">
                        <p class="text-end">INV123456789 <span class="copy-icon" onclick="copyInvoiceNumber()"><i
                                    class="fa-regular fa-copy"></i></span></p>
                    </div>
                </div>
                <div class="row p-5">
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Order Status:</span>
                            <span class="value">Pending</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Payment Status:</span>
                            <span class="value">Unpaid</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Product Name:</span>
                            <span class="value">60 Crystal</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Order Created:</span>
                            <span class="value">60 Crystal</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Order End:</span>
                            <span class="value">60 Crystal</span>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Payment Method:</span>
                            <span class="value">60 Crystal</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="info-row">
                            <span class="label">Total Prices:</span>
                            <span class="value">60 Crystal</span>
                        </div>
                    </div>
                </div>
                <button class="btn print-btn"><i class="fa-solid fa-print print-icon"></i> Print</button>
            </div>
            <!-- Second Column: Payment Instructions -->
            <div class="col-md-6 col-equal-height payment-instructions">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-instructions-header">
                            <h3>How To Pay</h3>
                        </div>
                    </div>
                    <div class="col-lg-12 p-5">
                        <ol>
                            <li>Log in to your account.</li>
                            <li>Go to the payment section.</li>
                            <li>Choose your preferred payment method.</li>
                            <li>Enter payment details.</li>
                            <li>Confirm the payment.</li>
                            <li>Review the payment summary.</li>
                            <li>Click 'Submit' to complete the transaction.</li>
                        </ol>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="payment-image">
                                    <img src="{{ asset('assets/img/product1.png') }}" alt="Payment Instructions Image">
                                </div>
                            </div>
                            <div class="col-lg-7 account-name">
                                <div class="payment-text">
                                    <p>A/N Lorem ipsum dolor sit amet.</p>
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
        function copyInvoiceNumber() {
            const invoiceNumberElement = document.querySelector('.invoice-number p');

            if (!invoiceNumberElement) {
                console.error('Invoice number element not found.');
                return;
            }

            // Get the invoice number text
            const invoiceNumberText = invoiceNumberElement.textContent.trim().split(' ')[0];

            // Check if the Clipboard API is available
            if (navigator.clipboard) {
                navigator.clipboard.writeText(invoiceNumberText)
                    .then(() => {
                        // Alert the user that the text has been copied
                        alert('Invoice number copied: ' + invoiceNumberText);
                    })
                    .catch(err => {
                        // Handle any errors
                        console.error('Failed to copy: ', err);
                    });
            } else {
                // Fallback approach using older methods
                const textArea = document.createElement('textarea');
                textArea.value = invoiceNumberText;
                document.body.appendChild(textArea);
                textArea.select();
                try {
                    document.execCommand('copy');
                    alert('Invoice number copied: ' + invoiceNumberText);
                } catch (err) {
                    console.error('Failed to copy using fallback method: ', err);
                }
                document.body.removeChild(textArea);
            }
        }
    </script>
@endsection
