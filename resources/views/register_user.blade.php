@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="/assets/img/imagesec2.png" class="img-register-user" alt="">
            </div>
            <div class="col-lg-8">
                <form action="#" method="post" class="register-user">
                    <div class="col-lg-12 mt-5 pt-5 mb-5 text-center">
                        <h1 class="register-heading">Join With Burpigames</h1>
                        <p class="register-description">
                            Create your account here!
                        </p>
                    </div>
                    <div class="col-lg-12 form-group mt-2">
                        <label class="form-label">Name</label>
                        <input type="text" name="" class="form-input">
                    </div>
                    <div class="col-lg-12 form-group mt-2">
                        <label class="form-label">Email</label>
                        <input type="email" name="" class="form-input">
                    </div>
                    <div class="col-lg-12 form-group mt-2">
                        <label class="form-label">Whatsapp</label>
                        <input type="text" name="" class="form-input">
                    </div>
                    <div class="col-lg-12 form-group mt-2">
                        <label class="form-label">Password</label>
                        <input type="password" name="" class="form-input">
                    </div>
                    <div class="col-lg-12 form-group mt-2">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="" class="form-input">
                    </div>
                    <div class="col-lg-12 mt-3 mb-3">
                        <div class="row">
                            <div class="col-lg-8 ">
                                <div class="row">
                                    <div class="col-1 col-lg-1">
                                        <input type="checkbox" name="requires">
                                    </div>
                                    <div class="col-11 col-lg-11 mb-3">
                                        <label for="">By registering, I agree to the privacy policy and terms &
                                            conditions applied by Burpigames</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                </form>
                {{-- <div class="col-lg-12 text-center mb-5">
                    <button class="btn btn-login-google">Login Dengan Akun Google</button>
                </div> --}}
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
@endsection
