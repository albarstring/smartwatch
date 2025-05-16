@extends('layout.app')

@section('content')
    <section class="bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 min-h-screen flex items-center justify-center p-4">
        <div class="flex flex-col lg:flex-row-reverse items-center justify-center w-full max-w-6xl gap-12">
            <!-- Animated Illustration (Right Side) -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <div class="relative" style="width: 100%; max-width: 500px">
                    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                    <dotlottie-player src="https://lottie.host/22f5c2cb-fb45-440e-87ba-04722c3b455a/1BfcvDLmbl.lottie" background="transparent" speed="1" style="width: 100%; max-width: 400px; height: 400px" loop autoplay></dotlottie-player>
                </div>
            </div>

            <!-- Register Form (Left Side) -->
            <div class="w-full lg:w-1/2">
                <div class="border border-gray-200 rounded-3xl p-10 w-full max-w-md shadow-xl bg-white/90 backdrop-blur-sm hover:backdrop-blur transition-all duration-300 hover:shadow-2xl">
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500 tracking-tight">
                            Join the Squad!
                        </h2>
                        <p class="text-gray-500 mb-6">Bikin akun biar bisa <span class="font-semibold text-purple-500">#collab</span> sama kita! 🌟</p>

                        <div class="w-20 h-1 mx-auto bg-gradient-to-r from-blue-400 to-purple-500 rounded-full mb-6"></div>
                    </div>

                    <form action="{{ route('register') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="relative">
                            <input type="text" name="username" required
                                class="w-full px-4 py-3 border-b-2 border-purple-200 outline-none bg-transparent focus:border-blue-400 transition peer"
                                placeholder=" ">
                            <label class="absolute left-0 -top-3.5 text-sm text-gray-500 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-blue-500">
                                Username Keren
                            </label>
                            <span class="absolute right-0 top-3 text-purple-400">👾</span>
                        </div>

                        <div class="relative">
                            <input type="email" name="email" required
                                class="w-full px-4 py-3 border-b-2 border-purple-200 outline-none bg-transparent focus:border-blue-400 transition peer"
                                placeholder=" ">
                            <label class="absolute left-0 -top-3.5 text-sm text-gray-500 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-blue-500">
                                Email Aktif
                            </label>
                            <span class="absolute right-0 top-3 text-purple-400">✉️</span>
                        </div>

                        <div class="relative">
                            <input type="password" name="password" required
                                class="w-full px-4 py-3 border-b-2 border-purple-200 outline-none bg-transparent focus:border-blue-400 transition peer"
                                placeholder=" ">
                            <label class="absolute left-0 -top-3.5 text-sm text-gray-500 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-blue-500">
                                Buat Password
                            </label>
                            <span class="absolute right-0 top-3 text-purple-400">🔑</span>
                        </div>

                        <div class="relative">
                            <input type="password" name="password_confirmation" required
                                class="w-full px-4 py-3 border-b-2 border-purple-200 outline-none bg-transparent focus:border-blue-400 transition peer"
                                placeholder=" ">
                            <label class="absolute left-0 -top-3.5 text-sm text-gray-500 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-blue-500">
                                Ulangi Password
                            </label>
                            <span class="absolute right-0 top-3 text-purple-400">🔒</span>
                        </div>

                        <div class="flex items-center text-sm">
                            <input type="checkbox" id="terms" class="accent-blue-500 h-4 w-4 transform scale-110 mr-2">
                            <label for="terms" class="cursor-pointer text-gray-600 hover:text-blue-500 transition">
                                Saya setuju dengan <a href="#" class="text-blue-500 hover:underline">Syarat & Ketentuan</a>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-400 to-purple-500 text-white py-3.5 rounded-xl font-bold shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-2">
                            <span>Daftar Sekarang</span>
                            <span class="text-xl animate-bounce">🎯</span>
                        </button>

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Sudah punya akun? 
                            <a href="{{ route('login') }}" class="font-semibold text-blue-500 hover:text-purple-500 hover:underline transition">
                                Login aja!
                            </a>
                        </p>
                    </form>

                    <!-- Social Register -->
                    <div class="mt-8">
                        <div class="flex items-center my-6">
                            <div class="flex-grow h-px bg-gray-200"></div>
                            <span class="px-4 text-sm text-gray-400">atau daftar dengan</span>
                            <div class="flex-grow h-px bg-gray-200"></div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex items-center justify-center gap-2 border py-2.5 rounded-xl hover:bg-blue-50 transition-all duration-300 hover:border-blue-300">
                                <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google" class="h-6">
                                <span class="font-medium text-gray-700">Google</span>
                            </button>
                            <button class="flex items-center justify-center gap-2 border py-2.5 rounded-xl hover:bg-indigo-50 transition-all duration-300 hover:border-indigo-300">
                                <img src="{{ asset('images/moonton.png') }}" alt="Moonton" class="h-6">
                                <span class="font-medium text-gray-700">Moonton</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection