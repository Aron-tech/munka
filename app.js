import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function () {
        // Toggle the mobile menu visibility
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
    });
});

document.getElementById('user-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('user-menu');
    menu.classList.toggle('hidden');
});


