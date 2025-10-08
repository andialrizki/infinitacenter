<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\MailController;
//root beranda landingpage
Route::get('/', [HomeController::class,'index'])->name('home');

// about route
Route::get('/about', [HomeController::class,'about_us'])->name('about');
// Route::get('/about_us/program', [HomeController::class,'index'])->name('program');
// Route::get('/about_us/activities', [HomeController::class,'index'])->name('activities');
// Route::get('/about_us/certifications', [HomeController::class,'certifications'])->name('certifications');

// product route
Route::get('/product', [HomeController::class,'product'])->name('product');
Route::get('/product/category/{id}', [HomeController::class,'product_detail'])->name('product_detail');

// service route
Route::get('/service', [HomeController::class,'services'])->name('service');

// project route
Route::get('/project', [HomeController::class,'index'])->name('project');

// gallery route
Route::get('/gallery', [HomeController::class,'gallery'])->name('gallery');

// download route
Route::get('/download', [HomeController::class,'index'])->name('download');

// contact us route
Route::get('/contact-us', [HomeController::class,'contact_us'])->name('contact-us');

// video route
Route::get('/video',[HomeController::class,'video'])->name('video');

// news route
Route::get('/news', [HomeController::class,'news'])->name('news');
Route::get('/news/detail/{id}', [HomeController::class,'news_detail'])->name('news_detail');

// send mail
Route::post('send_email',[MailController::class,'index'])->name('sendMail');

