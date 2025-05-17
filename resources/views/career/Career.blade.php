@extends('layout.app')

@section('content')
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