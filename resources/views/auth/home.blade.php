<!-- filepath: c:\~Amikom~\Semester 4\#WebSmartWatch\resources\views\layout\app.blade.php -->
<nav class="flex justify-between items-center py-4">
    <a href="{{ route('home') }}" class="text-lg font-bold text-black hover:text-pink-500">
        Home
    </a>
    <div class="flex space-x-4">
        <a href="{{ route('login') }}" class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-black text-black hover:bg-black hover:text-white text-md">
            Login
        </a>
        <a href="{{ route('register') }}" class="uppercase py-2 px-4 rounded-lg bg-black text-white hover:bg-white hover:text-black border-2 border-black text-md">
            Register
        </a>
        <a href="{{ route('contact') }}"
            class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
            Contact Us
        </a>
    </div>
</nav>

<div class="flex mt-8">
    <a href="#"
        class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
        Get started
    </a>
    <a href="{{ route('contact') }}"
        class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 hover:bg-pink-500 hover:text-white text-md">
        Contact Us
    </a>
</div>