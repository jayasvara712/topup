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
                        <h1 class="register-heading">Bergabung Bersama Burpigames</h1>
                        <p class="register-description">
                            Buat Akun mu Disini!
                        </p>
                    </div>
                    <div class="col-lg-12 form-group mt-2">
                        <label class="form-label">Nama</label>
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
                        <label class="form-label">Konfirmasi</label>
                        <input type="password" name="" class="form-input">
                    </div>
                    <div class="col-lg-12 mt-3 mb-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <input type="checkbox" name="requires">
                                <label for="">Dengan mendaftar, saya setuju dengan kebijakan pribadi dan syarat &
                                    ketentuan yang berlaku oleh Burpigames</label>
                            </div>
                            <div class="col-lg-4 text-center">
                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
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
            <h2>GABUNG SEKARANG</h2>
            <p>Gabung jadi reseller untuk promosikan produk yang ada di Burpistore dan terima keuntungan tiap berhasil
                menjual.</p>
            <a href="/reseller" class="btn-join">DAFTAR JADI RESELLER</a>
        </div>
        <img src="/assets/img/imagesec2.png" alt="Floating Image" class="floating-image">
    </div>
@endsection
