<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
     <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <title>Mybest</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>

<body>
    <main class="dark:bg-gray-800 bg-white relative overflow-hidden min-h-screen">

        <!-- NAVBAR -->
         
        @include('components.navbar')


        <!-- HERO SECTION -->
        <section class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-6 flex flex-col lg:flex-row relative py-16">
                <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20" data-aos="fade-right" data-aos-duration="1000">
                    <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12"></span>
                    <h1
                        class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                        Smart Lifestyle, <span class="text-5xl sm:text-7xl">Smart Choice</span>
                    </h1>
                    <p class="text-sm sm:text-base text-gray-700 dark:text-white mt-4">
                        Dimension of reality that makes change possible and understandable. An indefinite and
                        homogeneous environment in which natural events and human existence take place.
                    </p>
                    <div class="flex mt-8">
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                            Get started
                        </a>
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            Read more
                        </a>
                    </div>
                </div>
                <div class="w-full mt-7 mb-2 lg:w-3/5 relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
                    <div class="owl-carousel">
                        <div><img src="https://www.tailwind-kit.com/images/object/10.png"
                                class="max-w-xs md:max-w-sm m-auto" /></div>
                        <div><img
                                src="https://www.apple.com/id/watch/images/overview/select/product_se__c83w8hz9gre6_medium.png"
                                class="max-w-xs md:max-w-sm m-auto" /></div>
                        <div><img
                                src="https://www.apple.com/v/watch/bq/images/overview/select/product_s10__c724044usymq_xlarge.png"
                                class="max-w-xs md:max-w-sm m-auto" /></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Teks Produk Terbaru -->
        <section class="bg-white text-gray-800 py-1 flex justify-center items-center pt-10">
            <div class="grid grid-row-1 p-11 gap-2 text-center gap-1" data-aos="fade-up" data-aos-duration="1500">
                <h1 class="text-4xl font-bold text-black-500 mb-1">Produk Terbaru</h1>
            </div>
        </section>


        <!-- SECTION BARU (Putih) -->
        <section class="bg-white text-gray-800 py-16 pt-9 flex justify-center items-center">
            <div class="grid grid-row-2 p-16 gap-4 md:grid-cols-3 gap-6">
                <div class="w-72 bg-white shadow-md flex justify-center items-center rounded-xl duration-500 hover:scale-105 hover:shadow-xl"data-aos="fade-up" data-aos-duration="1500">
                    <a href="#">
                        <img src="https://www.apple.com/v/watch/bq/images/overview/select/product_u2__hedpiz396nue_xlarge.png"
                            alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <p class="text-lg font-bold text-black truncate block capitalize">Apple Watch Series 10</p>
                            <span class="text-gray-400 mr-3 text-md">Jam olahraga dan bertualang paling andal.</span>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                <del>
                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                </del>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--   🛑 Product card 1 - Ends Here  -->

                <!--   ✅ Product card 2 - Starts Here 👇 -->
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"data-aos="fade-up" data-aos-duration="1500">
                    <a href="#">
                        <img src="https://www.apple.com/v/watch/bq/images/overview/select/product_s10__c724044usymq_xlarge.png"
                            alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <p class="text-lg font-bold text-black truncate block capitalize">Apple Watch Series 10</p>
                            <span class="text-gray-400 mr-3 text-md">Layar paling tipis dan paling besar. <br>Fitur
                                kesehatan canggih. <br></span>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                <del>
                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                </del>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--   🛑 Product card 2- Ends Here  -->

                <!--   ✅ Product card 3 - Starts Here 👇 -->
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"data-aos="fade-up" data-aos-duration="1500">
                    <a href="#">
                        <img src="https://www.apple.com/id/watch/images/overview/select/product_se__c83w8hz9gre6_medium.png"
                            alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <p class="text-lg font-bold text-black truncate block capitalize">Apple Watch SE</p>
                            <span class="text-gray-400 mr-3 text-md">Semua yang esensial. <br>Harga yang istimewa.
                                <br></span>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                <del>
                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                </del>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--   🛑 Product card 3 - Ends Here  -->

                <!--   ✅ Product card 4 - Starts Here 👇 -->
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"data-aos="fade-up" data-aos-duration="1500">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1651950540805-b7c71869e689?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8Mjl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                            <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                <del>
                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                </del>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--   🛑 Product card 4 - Ends Here  -->

                <!--   ✅ Product card 5 - Starts Here 👇 -->
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"data-aos="fade-up" data-aos-duration="1500">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1649261191624-ca9f79ca3fc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDd8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                            <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                <del>
                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                </del>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--   🛑 Product card 5 - Ends Here  -->

                <!--   ✅ Product card 6 - Starts Here 👇 -->
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"data-aos="fade-up" data-aos-duration="1500">
                    <a href="#">
                        <img src="https://images.unsplash.com/photo-1649261191606-cb2496e97eee?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                            <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                <del>
                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                </del>
                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
            <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
                <video class="min-w-full min-h-full absolute object-cover"
                    src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4"
                    type="video/mp4" autoplay muted loop></video>
            </div>
            <div class="video-content pt-20 space-y-6 z-10 px-6">
                <h1 class="font-bold text-5xl sm:text-6xl">Smart. Stylish. Seamless.</h1>
                <h3 class="font-light text-2xl sm:text-3xl">
                    Temukan cara baru untuk tetap terhubung dan aktif. <br class="sm:block">
                    Smartwatch & Earbuds kami dirancang untuk menemani setiap detik hidupmu.
                </h3>
                <div class="mt-10"> <!-- Tambahkan wrapper untuk margin -->
                    <a href="#products"
                        class="bg-pink-500 hover:bg-pink-600 text-white py-3 px-6 rounded-full text-lg transition-all">
                        Jelajahi Produk
                    </a>
                </div>
            </div>
        </section>




        <style>
            .video-docker video {
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>

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

                <div class="flex flex-col gap-2 text-sm">
                    <p class="text-base font-bold tracking-wide text-white-900">Popular Courses</p>
                    <a href="#">UPSC - Union Public Service Commission</a>
                    <a href="#">General Knowledge</a>
                    <a href="#">MBA</a>
                    <p class="text-base font-bold tracking-wide text-white-900">Popular Topics</p>
                    <a href="#">Human Resource Management</a>
                    <a href="#">Operations Management</a>
                    <a href="#">Marketing Management</a>
                </div>

                <div>
                    <p class="text-base font-bold tracking-wide text-white-900">COMPANY IS ALSO AVAILABLE ON</p>
                    <div class="flex items-center gap-1 px-2">
                        <a href="#" class="w-full min-w-xl">
                            <img src="https://mcqmate.com/public/images/icons/playstore.svg" alt="Playstore Button"
                                class="h-10">
                        </a>
                        <a class="w-full min-w-xl" href="https://www.youtube.com/channel/UCo8tEi6SrGFP8XG9O0ljFgA">
                            <img src="https://mcqmate.com/public/images/icons/youtube.svg" alt="Youtube Button"
                                class="h-28">
                        </a>
                    </div>
                    <p class="text-base font-bold tracking-wide text-white-900">Contacts</p>
                    <div class="flex">
                        <p class="mr-1 text-white-800">Email:</p>
                        <a href="#" title="send email">Albarnaga123@gmail.com</a>
                    </div>
                </div>

            </div>

            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-gray-600">© Copyright 2025 Company. All rights reserved.</p>
                <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                    <li>
                        <a href="#"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                            &amp; Cookies Policy
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Disclaimer
                        </a>
                    </li>
                </ul>
            </div>

        </footer>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                items: 1,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
            });
        });
    </script>

     <script>
        AOS.init();
    </script>
</body>

</html>