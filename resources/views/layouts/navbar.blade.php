<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/crystal.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="d-flex search-box mx-auto">
                <i class="fas fa-search"></i>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#promoCodeModal">
                        <i class="fas fa-percent promo-icon"></i>Promo Code
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="currencyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-dollar-sign currency-icon" id="currencyIcon"></i><span
                            id="currencyText">Currency</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                        <li>
                            <a class="dropdown-item" href="#" data-currency="SGD">
                                <i class="fas fa-dollar-sign me-2"></i>SGD
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" data-currency="IDR">
                                <i class="fas fa-coins me-2"></i>IDR
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    {{-- <a class="btn-login nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#loginForm">Login</a> --}}
                    <button type="button" class="btn-login nav-link" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
