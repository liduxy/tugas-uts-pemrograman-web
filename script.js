window.onscroll = function() {
    const navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};

const mobileMenu = document.getElementById("mobile-menu");
const navLinks = document.querySelector(".nav-links");

mobileMenu.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

// Tambahkan ini ke file script.js Anda

document.addEventListener("DOMContentLoaded", function() {
    const starField = document.createElement('div');
    starField.className = 'stars';
    document.body.appendChild(starField);
});

