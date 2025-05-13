<!-- filepath: c:\~Amikom~\Semester 4\#WebSmartWatch\resources\views\contact\index.blade.php -->
@extends('layout.app')

@section('content')
<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Contact Us</h1>
        <div class="max-w-4xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
            <form action="#" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@endsection