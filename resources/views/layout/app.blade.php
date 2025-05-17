<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- External CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Laravel Asset CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Add Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Mybest</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
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
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, #5046E5 0%, #FF6B6B 100%);
            transition: width 0.3s ease;
            border-radius: 4px;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .navbar-gradient {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
        }
        
        .logo-shine {
            position: relative;
            overflow: hidden;
        }
        
        .logo-shine::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.3) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }
        
        @keyframes shine {
            0% {
                transform: translateX(-100%) rotate(30deg);
            }
            100% {
                transform: translateX(100%) rotate(30deg);
            }
        }
        
        .mobile-menu-transition {
            transition: max-height 0.5s ease, opacity 0.5s ease, transform 0.5s ease;
        }
    </style>
</head>

<body class="font-poppins">
    <main class="bg-white relative overflow-hidden min-h-screen">
        <!-- NAVBAR -->
        <nav class="fixed top-0 left-0 right-0 z-50 navbar-gradient transition-all duration-300">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- Logo Area -->
                    <div class="flex items-center space-x-3">
                        <div class="logo-shine rounded-full bg-gradient-to-br from-primary to-secondary p-0.5">
                            <div class="bg-white rounded-full p-1">
                                <img src="https://mcqmate.com/public/images/logos/60x60.png" alt="logo" class="w-10 h-10">
                            </div>
                        </div>
                        <div class="uppercase font-black text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary text-3xl tracking-tight">
                            <a href="{{ route('home') }}" class="hover:opacity-90 transition-opacity">Mybest</a>
                        </div>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center justify-center">
                        <div class="flex font-medium text-gray-800 space-x-1">
                            <a href="{{ route('home') }}" class="nav-link px-4 py-2 hover:text-primary transition-colors">Home</a>
                            <a href="#" class="nav-link px-4 py-2 hover:text-primary transition-colors">Watch</a>
                            <a href="#" class="nav-link px-4 py-2 hover:text-primary transition-colors">Product</a>
                            <a href="{{ route('contact') }}" class="nav-link px-4 py-2 hover:text-primary transition-colors">Contact Us</a>
                            <a href="#" class="nav-link px-4 py-2 hover:text-primary transition-colors">Career</a>
                        </div>
                    </div>

                    <!-- Login/Register Buttons (Desktop) -->
                    <div class="hidden lg:flex items-center space-x-3">
                        <a href="{{ route('login') }}" class="px-5 py-2 border-2 border-primary text-primary rounded-full hover:bg-primary hover:text-white transition-all duration-300">Login</a>
                        <a href="{{ route('register') }}" class="px-5 py-2 bg-gradient-to-r from-primary to-secondary text-white rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300">Register</a>
                    </div>

                    <!-- Hamburger Button (Mobile) -->
                    <button id="menu-toggle" class="lg:hidden text-gray-800 focus:outline-none z-50 p-2">
                        <svg id="hamburger-icon" class="w-8 h-8 transition-all duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="w-8 h-8 hidden transition-all duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden overflow-hidden max-h-0 opacity-0 -translate-y-5 mobile-menu-transition">
                <div class="bg-white shadow-xl rounded-b-3xl mx-4 px-6 py-6 mb-4">
                    <div class="flex flex-col space-y-4">
                        <a href="{{ route('home') }}" class="text-gray-800 hover:text-primary font-medium py-2 border-b border-gray-100">Home</a>
                        <a href="#" class="text-gray-800 hover:text-primary font-medium py-2 border-b border-gray-100">Watch</a>
                        <a href="#" class="text-gray-800 hover:text-primary font-medium py-2 border-b border-gray-100">Product</a>
                        <a href="{{ route('contact') }}" class="text-gray-800 hover:text-primary font-medium py-2 border-b border-gray-100">Contact Us</a>
                        <a href="#" class="text-gray-800 hover:text-primary font-medium py-2 border-b border-gray-100">Career</a>
                        
                        <div class="flex flex-col space-y-3 pt-3">
                            <a href="{{ route('login') }}" class="px-5 py-3 border-2 border-primary text-primary text-center rounded-full hover:bg-primary hover:text-white transition-all duration-300">Login</a>
                            <a href="{{ route('register') }}" class="px-5 py-3 bg-gradient-to-r from-primary to-secondary text-white text-center rounded-full hover:shadow-lg transition-all duration-300">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Content Spacer (to prevent content from hiding behind fixed navbar) -->
        <div class="h-24"></div>

        <!-- Konten Dinamis -->
        <main>
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="px-3 pt-6 lg:px-9 border-t-2 bg-gray-800 text-white">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <a href="#" class="inline-flex items-center">
                        <div class="bg-white rounded-full p-1">
                            <img src="https://mcqmate.com/public/images/logos/60x60.png" alt="logo" class="h-8 w-8">
                        </div>
                        <span class="ml-2 text-xl font-bold tracking-wide text-white">MYBEST</span>
                    </a>
                    <div class="mt-6 lg:max-w-xl">
                        <p class="text-sm text-gray-300">
                            © 2025 mybest. Semua hak dilindungi.
                            Smartwatch terbaik untuk gaya hidup aktif dan sehat.
                            📧 support@mybest.com | ☎️ +62 812-3456-7890
                            📍 Jakarta, Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- Enhanced JavaScript for Navbar -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const navbar = document.querySelector('nav');
            
            // Function to toggle mobile menu
            toggleButton.addEventListener('click', function () {
                if (mobileMenu.classList.contains('max-h-0')) {
                    // Open menu
                    mobileMenu.classList.remove('max-h-0', 'opacity-0', '-translate-y-5');
                    mobileMenu.classList.add('max-h-[1000px]', 'opacity-100', 'translate-y-0');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    // Close menu
                    mobileMenu.classList.remove('max-h-[1000px]', 'opacity-100', 'translate-y-0');
                    mobileMenu.classList.add('max-h-0', 'opacity-0', '-translate-y-5');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
            
            // Change navbar style on scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 20) {
                    navbar.classList.add('shadow-lg');
                    navbar.classList.remove('py-4');
                    navbar.classList.add('py-2');
                } else {
                    navbar.classList.remove('shadow-lg');
                    navbar.classList.remove('py-2');
                    navbar.classList.add('py-4');
                }
            });
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>