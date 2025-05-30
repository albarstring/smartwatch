@extends('layout.app')

@section('content')
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

    <section class="relative bg-gradient-to-r from-black via-gray-700 to-white-900 py-10 px-10">
        <div class="custom-nav-btn left absolute top-1/2 left-0 z-10 -translate-y-1/2 cursor-pointer px-3 py-2" id="btnPrev">
            <i class='bx bx-chevron-left text-3xl text-gray-700'></i>
        </div>
        <div class="custom-nav-btn right absolute top-1/2 right-0 z-10 -translate-y-1/2 cursor-pointer px-3 py-2" id="btnNext">
            <i class='bx bx-chevron-right text-3xl text-gray-700'></i>
        </div>

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

    <div class="flex justify-center">
        <div>
            <h1 class="text-3xl font-bold">Produk terbaru</h1>
        </div>
    </div>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    
    {{-- isi dari contact kalau jadi --}}
    

    {{-- isi dari career ✅--}}
    <section class="bg-gradient-to-br from-pink-50 via-orange-50 to-white min-h-screen py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-5xl font-extrabold text-gray-800 mb-2 tracking-tight">
                    Join Our <span class="text-pink-500">Smart Team</span>!
                </h1>
                <p class="text-lg text-gray-500 mb-4">
                    Bersama kita wujudkan inovasi <span class="font-semibold text-orange-500">wearable masa depan</span> ⌚
                </p>
                <div class="flex justify-center mb-6">
                    <dotlottie-player src="https://lottie.host/1f6ae326-a0a4-45d1-bb2f-c45d5fbfacaf/WoMz793CgV.lottie" background="transparent" speed="1" style="width: 180px; height: 180px" loop autoplay></dotlottie-player>
                </div>
            </div>

            <!-- Benefit Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
                    <span class="text-4xl mb-2">⌚</span>
                    <h3 class="font-bold text-lg mb-1 text-pink-500">Smart Office</h3>
                    <p class="text-gray-500 text-center">Lingkungan kerja modern dengan teknologi wearable terbaru.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
                    <span class="text-4xl mb-2">🕒</span>
                    <h3 class="font-bold text-lg mb-1 text-orange-500">Flexible Time</h3>
                    <p class="text-gray-500 text-center">Jam kerja fleksibel, work-life balance terjaga.</p>
                </div>
                <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
                    <span class="text-4xl mb-2">🚀</span>
                    <h3 class="font-bold text-lg mb-1 text-purple-500">Growth Opportunity</h3>
                    <p class="text-gray-500 text-center">Kesempatan berkembang di industri teknologi masa depan.</p>
                </div>
            </div>

            <!-- Job List Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Lowongan Tersedia</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Example Job Card -->
                    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-3xl text-pink-500">💻</span>
                            <h3 class="font-semibold text-lg">Frontend Developer</h3>
                        </div>
                        <p class="text-gray-500 mb-4">Bikin UI smartwatch makin kece dan responsif!</p>
                        <a href="#" class="mt-auto bg-pink-500 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-pink-400 transition">Apply Now</a>
                    </div>
                    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-3xl text-orange-500">📱</span>
                            <h3 class="font-semibold text-lg">Mobile App Engineer</h3>
                        </div>
                        <p class="text-gray-500 mb-4">Kembangkan aplikasi mobile yang terintegrasi dengan smartwatch.</p>
                        <a href="#" class="mt-auto bg-orange-500 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-orange-400 transition">Apply Now</a>
                    </div>
                    <div class="bg-white rounded-xl shadow p-6 flex flex-col">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-3xl text-purple-500">🎨</span>
                            <h3 class="font-semibold text-lg">UI/UX Designer</h3>
                        </div>
                        <p class="text-gray-500 mb-4">Desain pengalaman pengguna smartwatch yang fun dan intuitif.</p>
                        <a href="#" class="mt-auto bg-purple-500 text-white px-4 py-2 rounded-lg text-center font-semibold hover:bg-purple-400 transition">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-12">
                <h3 class="text-xl font-bold mb-2">Belum nemu posisi yang cocok?</h3>
                <p class="text-gray-500 mb-4">Kirim CV dan portofolio kamu ke <a href="mailto:hr@smartwatch.com" class="text-pink-500 underline">hr@smartwatch.com</a></p>
                <a href="#" class="inline-block bg-gradient-to-r from-pink-500 to-orange-400 text-white px-8 py-3 rounded-full font-bold shadow hover:scale-105 transition-all duration-200">
                    Kirim Lamaran Umum 🚀
                </a>
            </div>
        </div>
    </section>
    <!-- LottieFiles CDN -->
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
@endsection