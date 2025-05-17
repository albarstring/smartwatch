@extends('layout.app')

@section('content')
    <section class="bg-gradient-to-br from-orange-50 via-pink-50 to-purple-50 min-h-screen flex items-center justify-center p-4">
        <div class="flex flex-col lg:flex-row items-center justify-center w-full max-w-6xl gap-12">
            <!-- Animated Illustration -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <div class="relative" style="width: 100%; max-width: 500px">
                    <dotlottie-player 
                        src="https://lottie.host/1f6ae326-a0a4-45d1-bb2f-c45d5fbfacaf/WoMz793CgV.lottie" 
                        background="transparent" 
                        speed="0.4"
                        loop 
                        autoplay
                        class="w-full h-auto">
                    </dotlottie-player>
                </div>
            </div>

            <!-- Login Form - Adjusted for better symmetry -->
            <div class="w-full lg:w-1/2 flex justify-end">
                <div class="border border-gray-200 rounded-3xl p-10 w-full max-w-md shadow-xl bg-white/90 backdrop-blur-sm hover:backdrop-blur transition-all duration-300 hover:shadow-2xl">
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-pink-500 tracking-tight">
                            Welcome Back!
                        </h2>
                        <p class="text-gray-500 mb-6">Login dulu biar bisa <span class="font-semibold text-pink-500">#Nikmati Promo</span> bareng! 🚀</p>

                        <div class="w-20 h-1 mx-auto bg-gradient-to-r from-orange-400 to-pink-500 rounded-full mb-6"></div>
                    </div>

                    <form action="{{ route('login') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="relative">
                            <input type="email" name="email" required
                                class="w-full px-4 py-3 border-b-2 border-pink-200 outline-none bg-transparent focus:border-orange-400 transition peer"
                                placeholder=" ">
                            <label class="absolute left-0 -top-3.5 text-sm text-gray-500 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-pink-500">
                                Email Kamu
                            </label>
                            <span class="absolute right-0 top-3 text-pink-400">✉️</span>
                        </div>

                        <div class="relative">
                            <input type="password" name="password" required
                                class="w-full px-4 py-3 border-b-2 border-pink-200 outline-none bg-transparent focus:border-orange-400 transition peer"
                                placeholder=" ">
                            <label class="absolute left-0 -top-3.5 text-sm text-gray-500 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-pink-500">
                                Password Rahasia
                            </label>
                            <span class="absolute right-0 top-3 text-pink-400">🔒</span>
                        </div>

                        <div class="flex justify-between items-center text-sm">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="accent-orange-500 h-4 w-4 transform scale-110">
                                <span class="hover:text-pink-500 transition">Ingat aku</span>
                            </label>
                            <a href="#" class="text-pink-500 hover:text-orange-500 hover:underline transition">Lupa Password?</a>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-orange-400 to-pink-500 text-white py-3.5 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-2">
                            <span>Masuk Sekarang</span>
                            <span class="text-xl animate-bounce">🚀</span>
                        </button>

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Belum punya akun? 
                            <a href="{{ route('register') }}" class="font-semibold text-pink-500 hover:text-orange-500 hover:underline transition">
                                Daftar dulu yuk!
                            </a>
                        </p>
                    </form>

                    <!-- Social Login -->
                    <div class="mt-8">
                        <div class="flex items-center my-6">
                            <div class="flex-grow h-px bg-gray-200"></div>
                            <span class="px-4 text-sm text-gray-400">atau masuk dengan</span>
                            <div class="flex-grow h-px bg-gray-200"></div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex items-center justify-center gap-2 border py-2.5 rounded-xl hover:bg-blue-50 transition-all duration-300 hover:border-blue-300">
                                <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google" class="h-7">
                                <span class="font-medium text-gray-700">Google</span>
                            </button>
                            <button class="flex items-center justify-center gap-2 border py-2.5 rounded-xl hover:bg-indigo-50 transition-all duration-300 hover:border-indigo-300">
                                <img src="images/moonton.png" alt="Moonton" class="h-12">
                                <span class="font-medium text-gray-700">Moonton</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LottieFiles CDN -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
@endsection

    @section('scripts')
        <script>
            // Initialize the DotLottie player
            const player = document.querySelector('dotlottie-player');
            player.play();
        </script>
    @endsection