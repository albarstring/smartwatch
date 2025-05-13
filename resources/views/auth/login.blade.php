<!-- filepath: c:\~Amikom~\Semester 4\#WebSmartWatch\resources\views\login.blade.php -->
@extends('layout.app')

@section('content')
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                </div>
                <button type="submit"
                    class="w-full bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                    Login
                </button>
            </form>
            <p class="text-sm text-center text-gray-600 mt-4">
                Don't have an account? <a href="{{ route('register') }}" class="text-pink-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
@endsection