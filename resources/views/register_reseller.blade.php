@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <form action="#" method="post" class="register-seller">
                <div class="col-lg-12 mt-5 pt-5 mb-5 text-center">
                    <h1 class="register-heading">Burpigames Reseller Registration</h1>
                    <p class="register-description">
                        Registration will be processed within a maximum of 5 working days after the form is submitted.
                        Once processed, you will receive a confirmation email from the Burpigames Reseller team.
                    </p>
                </div>
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="" class="form-control"
                                placeholder="name according to identity card">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Gender</label>
                            <select name="" class="form-select">
                                <option>Man</option>
                                <option>Woman</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="" class="form-control" placeholder="Fill with active email">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="" class="form-control"
                                placeholder="Fill with active phone number">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label class="form-label">Address</label>
                    <textarea name="" class="form-control" placeholder="Fill address according to identity card"></textarea>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">Region</label>
                            <select name="" class="form-select">
                                <option>1</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Password</label>
                            <input type="password" name="" class="form-control" placeholder="Fill the password">
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <label class="form-label">Upload KTP</label>
                    <div class="identity-desc">
                        <ul>
                            <li>Pastikan KTP sesuai dengan identitas pendaftar, masih berlaku saat ini, dan dapat dibaca
                                dengan jelas.</li>
                            <li>Pastikan mengambil foto dari KTP asli (bukan scan/fotocopy).</li>
                            <li>Pastikan KTP diupload dalam format JPG/PNG/jpeg.</li>
                            <li>Maksimal 3MB per file.</li>
                        </ul>
                        <div class="file-upload-wrapper">
                            <label for="file-upload" class="file-upload-label">Upload KTP</label>
                            <input type="file" id="file-upload" name="identity" class="form-control-file">
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 mt-3 mb-3">
                    <input type="checkbox" name="requires">
                    <label for="">I agree to the Terms & Conditions and Privacy Policy applicable at
                        Burpigames</label>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
