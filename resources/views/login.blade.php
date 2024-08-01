@extends('layouts.login_template')
@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card login-card p-4">
            <div class="card-body text-center">
                <img src="path/to/your/logo.png" alt="Logo" class="logo mb-4">
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Enter your password"
                            required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-custom">Login</button>
                        <a href="/reseller" class="btn btn-custom">
                            Register
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
