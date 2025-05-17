// Inisialisasi Owl Carousel
$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});

// Toggle menu
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    if (menuBtn && menu) {
        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }
});


    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        if (mobileMenu.classList.contains('max-h-0')) {
            mobileMenu.classList.remove('max-h-0');
            mobileMenu.classList.add('max-h-96'); // adjust max height as needed
        } else {
            mobileMenu.classList.remove('max-h-96');
            mobileMenu.classList.add('max-h-0');
        }
    });


    $(document).ready(function() {
    const owl1 = $("#owl-carousel-1");

    owl1.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,  // kita pakai tombol custom
        dots: false,
        items: 1
    });

    $("#btnNext").click(function() {
        owl1.trigger('next.owl.carousel');
    });

    $("#btnPrev").click(function() {
        owl1.trigger('prev.owl.carousel');
    });
});

tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#5046E5',
                        'primary-dark': '#4038C7',
                        'secondary': '#FF6B6B',
                        'secondary-dark': '#FF5252',
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
