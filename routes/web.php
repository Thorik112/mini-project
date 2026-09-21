<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Mengelompokkan semua route yang menggunakan PageController
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/case-studies', 'caseStudies')->name('case-studies');
    Route::get('/testimonials', 'testimonials')->name('testimonials');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog-detail', 'blogDetail')->name('blog-detail');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('/terms-of-service', 'termsOfService')->name('terms-of-service');
});