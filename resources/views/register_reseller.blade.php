@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <form action="#" method="post" class="register-seller">
                <div class="col-lg-12 mt-5 pt-5 mb-5 text-center">
                    <h1 class="register-heading">Pendaftaran Reseller Burpigames</h1>
                    <p class="register-description">
                        Pendaftaran akan diproses maksimal 5 hari kerja setelah formulir dikirim.
                        Setelah selesai diproses, kamu akan menerima email konfirmasi dari tim Reseller Burpigames.
                    </p>
                </div>
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="" class="form-select">
                                <option>1</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Alamat Email</label>
                            <input type="email" name="" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">No Handphone</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label class="form-label">Alamat</label>
                    <textarea name="" class="form-control"></textarea>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">Negara</label>
                            <select name="" class="form-select">
                                <option>1</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Password</label>
                            <input type="password" name="" class="form-control">
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
                    <label for="">Saya setuju dengan syarat dan ketentuan</label>
                </div>
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
