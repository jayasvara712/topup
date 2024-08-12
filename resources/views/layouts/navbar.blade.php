<!--==================== HEADER ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="/" class="nav__logo">Logo</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" class="nav__link">Home</a>
                </li>

                <li class="nav__item">
                    <a class="nav__link" href="#" data-bs-toggle="modal" data-bs-target="#promoCodeModal">
                        <i class="fas fa-percent nav__icon"></i>Promo Code
                    </a>
                </li>
            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav__actions">
            <!-- Search button -->
            <i class="ri-search-line nav__icon" id="search-btn"></i>

            <!-- Currency button -->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="currencyDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-dollar-sign nav__icon" id="currencyIcon"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="currencyDropdown">
                    <li>
                        <a class="dropdown-item" href="#" data-currency="SGD"> <i
                                class="fas fa-dollar-sign me-2"></i>SGD </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-currency="IDR"> <i
                                class="fas fa-coins me-2"></i>IDR </a>
                    </li>
                </ul>
            </li>

            <!-- Cart Button -->
            <a href="/cart">
                <i class="ri-shopping-cart-2-line nav__icon"></i>
            </a>

            <!-- Login button -->
            <i class="ri-user-line nav__icon" id="login-btn"></i>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
    </nav>
</header>

<!--==================== SEARCH ====================-->
<div class="search" id="search">
    <form action="" class="search__form">
        <i class="ri-search-line search__icon"></i>
        <input type="search" placeholder="What are you looking for?" class="search__input" />
    </form>

    <i class="ri-close-line search__close" id="search-close"></i>
</div>

<!--==================== LOGIN ====================-->
<div class="login" id="login">
    <div class="">
        <div class="login__form title">
            <span class="login__title">
                Register yourself now, at Burpigames you will get lots of promos and you can see your purchase history.
            </span>
        </div>
    </div>
    <form action="" class="login__form">

        <img src="path/to/your/logo.png" alt="Logo" class="logo mb-4">

        <div class="login__group">
            <div>
                <input type="email" placeholder="Write your email" name="email" class="login__input" />
            </div>

            <div>
                <input type="password" placeholder="Enter your password" name="password" class="login__input" />
            </div>
        </div>

        <div class="row">
            <div class="col-6 mb-2">
                <button type="submit" class="btn login__button">Log In</button>
            </div>
            <div class="col-6 mb-2">
                <a href="#" class="btn login__button"> Register </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-white text-center">
                By entering Burpigames, you agree to the Terms and Conditions and Privacy Policy.
            </div>
        </div>

    </form>

    <i class="ri-close-line login__close" id="login-close"></i>
</div>
