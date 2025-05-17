@extends('layout.app')

@section('content')
    <section class="bg-gradient-to-br from-pink-50 to-white py-16 min-h-screen">
        <div class="container mx-auto px-4 sm:px-6">
            <!-- Header with animated emoji -->
            <div class="text-center mb-10 animate-bounce">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-3">
                    Yuk Ngobrol! <span class="text-pink-500 animate-pulse">💬</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Ada pertanyaan atau mau kolab? Jangan sungkan hubungi kita! Bakal dibales cepet kok~
                </p>
            </div>

            <!-- Contact Card -->
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-xl border border-pink-100 transform hover:scale-[1.01] transition-all duration-300">
                <form action="#" method="POST" id="contactForm" class="space-y-6">
                    @csrf

                    <!-- Name Input -->
                    <div class="space-y-2">
                        <label for="name" class="block text-lg font-medium text-gray-700 flex items-center gap-2">
                            Nama Kamu <span class="text-pink-500">✨</span>
                        </label>
                        <input type="text" id="name" name="name" required 
                            class="w-full px-5 py-3 text-lg border-2 border-gray-200 rounded-xl focus:border-pink-400 focus:ring-pink-400 transition-all duration-300 placeholder-gray-400"
                            placeholder="Siapa nama kerenmu?">
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label for="email" class="block text-lg font-medium text-gray-700 flex items-center gap-2">
                            Email <span class="text-pink-500">📧</span>
                        </label>
                        <input type="email" id="email" name="email" required 
                            class="w-full px-5 py-3 text-lg border-2 border-gray-200 rounded-xl focus:border-pink-400 focus:ring-pink-400 transition-all duration-300 placeholder-gray-400"
                            placeholder="Email aktif ya biar bisa dibales~">
                    </div>

                    <!-- Message Input -->
                    <div class="space-y-2">
                        <label for="message" class="block text-lg font-medium text-gray-700 flex items-center gap-2">
                            Pesan <span class="text-pink-500">✍️</span>
                        </label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-5 py-3 text-lg border-2 border-gray-200 rounded-xl focus:border-pink-400 focus:ring-pink-400 transition-all duration-300 placeholder-gray-400"
                            placeholder="Tulis pesanmu di sini... Jangan lupa kasih emoticon biar makin kece 😉"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-pink-500 to-pink-600 text-white py-4 px-6 rounded-xl hover:from-pink-600 hover:to-pink-700 focus:outline-none transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-3 text-lg font-semibold">
                        <span>Kirim Sekarang</span>
                        <span class="text-xl animate-bounce">🚀</span>
                    </button>

                    <!-- Success Message -->
                    <div id="successMsg" class="hidden mt-6 p-4 bg-green-100 text-green-800 rounded-xl text-center font-medium animate-fade-in">
                        <div class="flex items-center justify-center gap-2">
                            <span class="text-xl">🎉</span>
                            <span>Wih pesanmu udah terkirim! Nanti kita bales ya~</span>
                        </div>
                    </div>
                </form>

                <!-- Social Media Links -->
                <div class="mt-12 text-center">
                    <p class="text-gray-500 mb-4 text-lg">Atau DM kita langsung di:</p>
                    <div class="flex justify-center gap-6">
                        <a href="https://instagram.com/" target="_blank" 
                           class="bg-pink-100 p-4 rounded-full text-pink-600 hover:bg-pink-200 transition-all duration-300 text-3xl shadow-md hover:shadow-lg"
                           title="Instagram">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" 
                           class="bg-green-100 p-4 rounded-full text-green-600 hover:bg-green-200 transition-all duration-300 text-3xl shadow-md hover:shadow-lg"
                           title="WhatsApp">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                        <a href="https://tiktok.com/" target="_blank" 
                           class="bg-gray-100 p-4 rounded-full text-gray-800 hover:bg-gray-200 transition-all duration-300 text-3xl shadow-md hover:shadow-lg"
                           title="TikTok">
                            <i class='bx bxl-tiktok'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission with fun animation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show success message
            const successMsg = document.getElementById('successMsg');
            successMsg.classList.remove('hidden');

            // Reset form and hide message after 5 seconds
            setTimeout(() => {
                successMsg.classList.add('hidden');
                this.reset();
            }, 5000);
        });

        // Add animation to inputs on focus
        document.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('focus', () => {
                input.classList.add('ring-2', 'ring-pink-300');
            });
            input.addEventListener('blur', () => {
                input.classList.remove('ring-2', 'ring-pink-300');
            });
        });
    </script>

    <style>
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection