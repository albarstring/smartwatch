<!-- filepath: c:\~Amikom~\Semester 4\#WebSmartWatch\resources\views\layout\app.blade.php -->
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

    <title>Mybest</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="bg-white relative overflow-hidden min-h-screen">
        <!-- NAVBAR -->
        <nav class="h-24 sm:h-32 flex items-center z-30 w-full bg-white relative">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <img src="https://mcqmate.com/public/images/logos/60x60.png" alt="logo" class="w-10 h-10">
                    <div class="uppercase text-black font-black text-3xl">
                        <a href="{{ route('home') }}">Mybest</a>
                    </div>
                </div>

                <div class="flex items-center space-x-6">
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex font-sen text-black text-lg space-x-4">
                        <a href="{{ route('home') }}" class="relative py-2 px-4 group">
                            Home
                            <span class="absolute left-0 bottom-0 h-0.5 w-full bg-black scale-x-0 origin-center transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                        <a href="#" class="relative py-2 px-4 group">
                            Watch
                            <span class="absolute left-0 bottom-0 h-0.5 w-full bg-black scale-x-0 origin-center transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                        <a href="#" class="relative py-2 px-4 group">
                            Product
                            <span class="absolute left-0 bottom-0 h-0.5 w-full bg-black scale-x-0 origin-center transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                        <a href="{{ route('contact') }}" class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                            Contact Us
                        </a>
                        <a href="#" class="relative py-2 px-4 group">
                            Career
                            <span class="absolute left-0 bottom-0 h-0.5 w-full bg-black scale-x-0 origin-center transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                    </div>
                </div>

                <!-- Login/Register Buttons (Desktop) -->
                <div class="hidden lg:flex space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 border border-black text-black rounded hover:bg-gray-200 transition">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Register</a>
                </div>

                <!-- Hamburger Button (Mobile) -->
                <button id="menu-toggle" class="lg:hidden text-black focus:outline-none z-50">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="absolute top-full left-0 w-full bg-white shadow-lg overflow-hidden max-h-0 transition-[max-height] duration-500 ease-in-out lg:hidden z-40">
                <div class="flex flex-col items-start px-6 py-4 space-y-2">
                    <a href="{{ route('home') }}" class="text-black py-2">Home</a>
                    <a href="#" class="text-black py-2">Watch</a>
                    <a href="#" class="text-black py-2">Product</a>
                    <a href="{{ route('contact') }}" class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                        Contact Us
                    </a>
                    <a href="#" class="text-black py-2">Career</a>
                    <div class="flex space-x-4 py-2">
                        <a href="{{ route('login') }}" class="px-4 py-2 border border-black text-black rounded hover:bg-gray-200 transition">Login</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-black text-white rounded hover:bg-gray-700 transition">Register</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Konten Dinamis -->
        <main>
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="px-3 pt-4 lg:px-9 border-t-2 bg-gray-800 text-white">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <a href="#" class="inline-flex items-center">
                        <img src="https://mcqmate.com/public/images/logos/60x60.png" alt="logo" class="h-8 w-8">
                        <span class="ml-2 text-xl font-bold tracking-wide text-white-900">MYBEST</span>
                    </a>
                    <div class="mt-6 lg:max-w-xl">
                        <p class="text-sm text-white-800">
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

    <!-- Hamburger JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            toggleButton.addEventListener('click', function () {
                if (mobileMenu.classList.contains('max-h-0')) {
                    mobileMenu.classList.remove('max-h-0');
                    mobileMenu.classList.add('max-h-96');
                } else {
                    mobileMenu.classList.remove('max-h-96');
                    mobileMenu.classList.add('max-h-0');
                }
            });
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>