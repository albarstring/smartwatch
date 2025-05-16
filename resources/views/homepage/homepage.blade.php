@extends('layout.app')

@section('content')
<!-- HERO SECTION -->
<section class="bg-white flex relative z-20 items-center overflow-hidden">
    <div class="container mx-auto px-6 flex flex-col lg:flex-row relative py-16">
        <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
            <h1
                class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none text-gray-800">
                Smart Lifestyle, <span class="text-5xl sm:text-7xl">Smart Choice</span>
            </h1>
            <p class="text-sm sm:text-base text-black dark:text-black mt-4">
                Dimension of reality that makes change possible and understandable. An indefinite and
                homogeneous environment in which natural events and human existence take place.
            </p>
            <div class="flex mt-8">
                <a href="#"
                    class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                    Get started
                </a>
                <a href="#"
                    class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 dark:text-pink hover:bg-pink-500 hover:text-white text-md">
                    Read more
                </a>
            </div>
        </div>
        <div class="w-full mt-7 mb-2 lg:w-3/5 relative">
            <div class="owl-carousel">
                <div><img src="https://www.tailwind-kit.com/images/object/10.png" class="max-w-xs md:max-w-sm m-auto" /></div>
                <div><img src="https://www.apple.com/id/watch/images/overview/select/product_se__c83w8hz9gre6_medium.png" class="max-w-xs md:max-w-sm m-auto" /></div>
                <div><img src="https://www.apple.com/v/watch/bq/images/overview/select/product_s10__c724044usymq_xlarge.png" class="max-w-xs md:max-w-sm m-auto" /></div>
            </div>
        </div>
    </div>
</section>

<!-- Card Slider -->
<section class="relative bg-gradient-to-r from-black via-gray-700 to-white-900 py-10 px-10">
    <!-- Tombol panah custom -->
    <div class="custom-nav-btn left absolute top-1/2 left-0 z-10 -translate-y-1/2 cursor-pointer px-3 py-2" id="btnPrev">
        <i class='bx bx-chevron-left text-3xl text-gray-700'></i>
    </div>
    <div class="custom-nav-btn right absolute top-1/2 right-0 z-10 -translate-y-1/2 cursor-pointer px-3 py-2" id="btnNext">
        <i class='bx bx-chevron-right text-3xl text-gray-700'></i>
    </div>

    <!-- Carousel container -->
    <div id="owl-carousel-1" class="owl-carousel owl-theme">
        @for ($i = 0; $i < 30; $i += 5)
            <div class="item grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 px-4 overflow-hidden">
            @for ($j = $i; $j < $i + 5 && $j < 30; $j++)
                <a href="/produk/{{ $j }}" class="block">
                <div class="bg-orange-500 rounded-lg overflow-hidden shadow-lg group relative h-full transition duration-300 hover:shadow-2xl">
                    <svg class="absolute bottom-0 left-0 mb-8 scale-150 transition-transform duration-300 ease-in-out group-hover:scale-90" viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
                    </svg>
                    <div class="relative pt-10 px-6 flex items-center justify-center transition-transform duration-300 ease-in-out group-hover:scale-90">
                        <img class="relative w-24" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
                    </div>
                    <div class="relative text-white px-4 pb-4 mt-4 transition-transform duration-300 ease-in-out group-hover:scale-90">
                        <span class="block opacity-75 text-sm -mb-1">Outdoor</span>
                        <div class="flex justify-between">
                            <span class="block font-semibold text-base">Plant {{ $j + 1 }}</span>
                            <span class="bg-white rounded-full text-orange-500 text-xs font-bold px-2 py-1">Rp 68.000</span>
                        </div>
                    </div>
                </div>
                </a>
                @endfor
    </div>
    @endfor
    </div>
</section>

<!-- Teks Produk Terbaru -->
<div class="flex justify-center">
    <div>
        <h1 class="text-3xl font-bold">Produk terbaru</h1>
    </div>
</div>

<!-- Card Produk Terbaru -->
<section class="bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-14">
                @for ($i = 0; $i < 8; $i++)
                    @include('components.productcard', [ 'image'=> 'https://www.tailwind-kit.com/images/object/10.png',
                    'title' => 'Apple Watch Series ' . ($i + 1),
                    'description' => 'Jam olahraga dan bertualang paling andal.',
                    'price' => '20.000',
                    'original' => '29.999'
                    ])
                    @endfor
            </div>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 p-10">
        <div class="col-span-8">

        </div>

    </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('js/main.js') }}"></script>

@endsection