// Owlcarousel
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        center: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>",
        ],
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });
});

/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById("nav-menu"),
    navToggle = document.getElementById("nav-toggle"),
    navClose = document.getElementById("nav-close");

/* Menu show */
navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
});

/* Menu hidden */
navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
});

/*=============== SEARCH ===============*/
const search = document.getElementById("search"),
    searchBtn = document.getElementById("search-btn"),
    searchClose = document.getElementById("search-close");

/* Search show */
searchBtn.addEventListener("click", () => {
    search.classList.add("show-search");
});

/* Search hidden */
searchClose.addEventListener("click", () => {
    search.classList.remove("show-search");
});

/*=============== LOGIN ===============*/
const login = document.getElementById("login"),
    loginBtn = document.getElementById("login-btn"),
    loginClose = document.getElementById("login-close");

/* Login show */
loginBtn.addEventListener("click", () => {
    login.classList.add("show-login");
});

/* Login hidden */
loginClose.addEventListener("click", () => {
    login.classList.remove("show-login");
});
