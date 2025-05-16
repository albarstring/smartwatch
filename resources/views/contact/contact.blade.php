<!-- filepath: c:\~Amikom~\Semester 4\#WebSmartWatch\resources\views\contact.blade.php -->
@extends('layout.app')

@section('content')
    <section class="bg-white py-16 min-h-screen">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-2 flex items-center justify-center gap-2">
                <span>Contact</span> <span>✨</span>
            </h1>
            <p class="text-center text-lg text-gray-500 mb-8">Ada pertanyaan atau ide seru? Kirim aja, jangan malu-malu! 😎
            </p>
            <div class="max-w-4xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
                <form action="#" method="POST" id="contactForm">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Kamu 😁</label>
                        <input type="text" id="name" name="name" required placeholder="Masukkan nama kerenmu"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-400 transition-all duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Email aktif ya!"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-400 transition-all duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Pesanmu ✍️</label>
                        <textarea id="message" name="message" rows="4" required placeholder="Tulis pesan, saran, atau curhatanmu di sini..."
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-pink-400 transition-all duration-300"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-400 focus:outline-none transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Kirim Pesan</span> <span>🚀</span>
                    </button>
                    <div id="successMsg" class="hidden mt-4 text-center text-green-500 font-semibold">
                        Pesan kamu sudah terbang ke admin 🚀. Makasih ya!
                    </div>
                </form>
                <div class="mt-8 flex flex-col items-center gap-3">
                    <span class="text-gray-500">Atau DM kami di:</span>
                    <div class="flex gap-4">
                        <a href="https://instagram.com/" target="_blank" class="text-pink-500 hover:text-pink-700 text-2xl"
                            title="Instagram">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="text-green-500 hover:text-green-700 text-2xl"
                            title="WhatsApp">
                            <i class='bx bxl-whatsapp'></i>
                        </a>
                        <a href="https://tiktok.com/" target="_blank" class="text-black hover:text-gray-700 text-2xl"
                            title="TikTok">
                            <i class='bx bxl-tiktok'></i>
                        </a>
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <button id="toggleTheme"
                        class="px-4 py-2 rounded bg-gray-300 text-gray-800 hover:bg-gray-400 transition">🌗 Ganti Tema
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Fun success message
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            document.getElementById('successMsg').classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('successMsg').classList.add('hidden');
            }, 3500);
            this.reset();
        });

        // Simple dark/light mode toggle
        document.getElementById('toggleTheme').onclick = function () {
            document.body.classList.toggle('bg-gray-900');
            document.body.classList.toggle('text-white');
        };
    </script>
@endsection