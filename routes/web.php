<?php
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register'); // Pastikan file register.blade.php ada di folder auth
})->name('register');

Route::get('/home', function () {
    return view('home'); // Pastikan file home.blade.php ada di folder resources/views
})->name('home');

Route::get('/', function () {
    return view('homepage.homepage'); // Pastikan file homepage.blade.php ada di folder views/homepage
})->name('home');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/career', function () {
    return view('career.Career');
})->name('career');