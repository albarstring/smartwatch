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

<!-- Teks Produk Terbaru -->
<section class="bg-white text-gray-800 py-1 flex justify-center items-center pt-5">
    <div class="grid grid-row-1 p-8 gap-2 text-center gap-1">
        <h1 class="text-4xl font-bold text-black-500 mb-1">Produk Terbaru</h1>
    </div>
</section>

<!-- Card Produk Terbaru -->
<section class="bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-14">
                @for ($i = 0; $i < 8; $i++)
                    @include('components.productcard', [
        'image' => 'https://www.tailwind-kit.com/images/object/10.png',
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