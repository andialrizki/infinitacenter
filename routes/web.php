<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\BannerHomeController;
use App\Http\Controllers\admin\BannerPageController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\GalleryCategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ProductCategoryController;
use App\Http\Controllers\admin\AllProductController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\SettingController;



Route::prefix('webmin')->group(function () {

    //Authentication Controll
    Route::get('/login', [AuthController::class,'index'])->middleware('authdashboard')->name('login');
    Route::POST('/login/post', [AuthController::class,'login'])->middleware('authdashboard')->name('auth.login');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

    //Dashboard
    Route::get('/', [DashboardController::class,'index'])->middleware('authlogin')->name('dashboard');


    //Banner Home
    Route::prefix('banner-home')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [BannerHomeController::class,'index'])->name('banner-home.index');

        //func
        Route::POST('/submit', [BannerHomeController::class,'create'])->name('banner-home.create');
        Route::get('/delete/{id}', [BannerHomeController::class,'delete'])->name('banner-home.delete');
        Route::get('/multidelete', [BannerHomeController::class,'multi_delete'])->name('banner-home.multi_delete');
        Route::get('/status/{id}', [BannerHomeController::class,'editstatus'])->name('banner-home.status');

    });


    //Banner Page
    Route::prefix('banner-page')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [BannerPageController::class,'index'])->name('banner-page.index');

        //func
        Route::POST('/submit', [BannerPageController::class,'create'])->name('banner-page.create');
        Route::get('/delete/{id}', [BannerPageController::class,'delete'])->name('banner-page.delete');
        Route::get('/multidelete', [BannerPageController::class,'multi_delete'])->name('banner-page.multi_delete');
        Route::get('/status/{id}', [BannerPageController::class,'editstatus'])->name('banner-page.status');

    });

    //Video
    Route::prefix('video')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [VideoController::class,'index'])->name('video.index');

        //func
        Route::POST('/submit', [VideoController::class,'create'])->name('video.create');
        Route::get('/delete/{id}', [VideoController::class,'delete'])->name('video.delete');
        Route::get('/multidelete', [VideoController::class,'multi_delete'])->name('video.multi_delete');
        Route::get('/status/{id}', [VideoController::class,'editstatus'])->name('video.status');

    });



    //gallery category
    Route::prefix('gallery-category')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [GalleryCategoryController::class,'index'])->name('gallery-category.index');
        Route::get('/edit/{id}', [GalleryCategoryController::class,'edit'])->name('gallery-category.edit');

        //func
        Route::POST('/submit', [GalleryCategoryController::class,'create'])->name('gallery-category.create');
        Route::get('/delete/{id}', [GalleryCategoryController::class,'delete'])->name('gallery-category.delete');
        Route::get('/multidelete', [GalleryCategoryController::class,'multi_delete'])->name('gallery-category.multi_delete');
        Route::get('/status/{id}', [GalleryCategoryController::class,'editstatus'])->name('gallery-category.status');

    });


    //gallery
    Route::prefix('gallery')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [GalleryController::class,'index'])->name('gallery.index');
        Route::get('/edit/{id}', [GalleryController::class,'edit'])->name('gallery.edit');

        //func
        Route::POST('/submit', [GalleryController::class,'create'])->name('gallery.create');
        Route::get('/delete/{id}', [GalleryController::class,'delete'])->name('gallery.delete');
        Route::get('/multidelete', [GalleryController::class,'multi_delete'])->name('gallery.multi_delete');
        Route::get('/status/{id}', [GalleryController::class,'editstatus'])->name('gallery.status');

    });

    //client
    Route::prefix('client')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [ClientController::class,'index'])->name('client.index');
        Route::get('/edit/{id}', [ClientController::class,'edit'])->name('client.edit');

        //func
        Route::POST('/submit', [ClientController::class,'create'])->name('client.create');
        Route::get('/delete/{id}', [ClientController::class,'delete'])->name('client.delete');
        Route::get('/multidelete', [ClientController::class,'multi_delete'])->name('client.multi_delete');
        Route::get('/status/{id}', [ClientController::class,'editstatus'])->name('client.status');

    });


    //Services
    Route::prefix('services')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [ServicesController::class,'index'])->name('services.index');

        //func
        Route::get('/edit/{id}', [ServicesController::class,'edit'])->name('services.edit');
        Route::POST('/submit', [ServicesController::class,'create'])->name('services.create');
        Route::get('/delete/{id}', [ServicesController::class,'delete'])->name('services.delete');
        Route::get('/multidelete', [ServicesController::class,'multi_delete'])->name('services.multi_delete');
        Route::get('/status/{id}', [ServicesController::class,'editstatus'])->name('services.status');

    });

    //Company
    Route::prefix('company')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [CompanyController::class,'index'])->name('company.index');

        //func
        Route::get('/edit/{id}', [CompanyController::class,'edit'])->name('company.edit');
        Route::POST('/submit', [CompanyController::class,'create'])->name('company.create');
        Route::get('/delete/{id}', [CompanyController::class,'delete'])->name('company.delete');
        Route::get('/multidelete', [CompanyController::class,'multi_delete'])->name('company.multi_delete');
        Route::get('/status/{id}', [CompanyController::class,'editstatus'])->name('company.status');

    });


    //Project
    Route::prefix('project')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [ProjectController::class,'index'])->name('project.index');

        //func
        Route::get('/edit/{id}', [ProjectController::class,'edit'])->name('project.edit');
        Route::POST('/submit', [ProjectController::class,'create'])->name('project.create');
        Route::get('/delete/{id}', [ProjectController::class,'delete'])->name('project.delete');
        Route::get('/multidelete', [ProjectController::class,'multi_delete'])->name('project.multi_delete');
        Route::get('/status/{id}', [ProjectController::class,'editstatus'])->name('project.status');

    });



    //product category
    Route::prefix('product-category')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [ProductCategoryController::class,'index'])->name('product-category.index');

        //func
        Route::get('/edit/{id}', [ProductCategoryController::class,'edit'])->name('product-category.edit');
        Route::POST('/submit', [ProductCategoryController::class,'create'])->name('product-category.create');
        Route::get('/delete/{id}', [ProductCategoryController::class,'delete'])->name('product-category.delete');
        Route::get('/multidelete', [ProductCategoryController::class,'multi_delete'])->name('product-category.multi_delete');
        Route::get('/status/{id}', [ProductCategoryController::class,'editstatus'])->name('product-category.status');

    });


    //All Product
    Route::prefix('all-product')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [AllProductController::class,'index'])->name('all-product.index');

        //func
        Route::get('/edit/{id}', [AllProductController::class,'edit'])->name('all-product.edit');
        Route::POST('/submit', [AllProductController::class,'create'])->name('all-product.create');
        Route::get('/delete/{id}', [AllProductController::class,'delete'])->name('all-product.delete');
        Route::get('/multidelete', [AllProductController::class,'multi_delete'])->name('all-product.multi_delete');
        Route::get('/status/{id}', [AllProductController::class,'editstatus'])->name('all-product.status');

    });


    //News
    Route::prefix('news')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [NewsController::class,'index'])->name('news.index');

        //func
        Route::get('/edit/{id}', [NewsController::class,'edit'])->name('news.edit');
        Route::POST('/submit', [NewsController::class,'create'])->name('news.create');
        Route::get('/delete/{id}', [NewsController::class,'delete'])->name('news.delete');
        Route::get('/multidelete', [NewsController::class,'multi_delete'])->name('news.multi_delete');
        Route::get('/status/{id}', [NewsController::class,'editstatus'])->name('news.status');

    });


    //Setting
    Route::prefix('setting')->middleware('authlogin')->group(function () {
        //view
        Route::get('/', [SettingController::class,'index'])->name('setting.index');

        //func
        Route::post('/submit', [SettingController::class,'create'])->name('setting.create');

    });

    Route::get('/clearcache',function(){
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('storage:link');
        // Artisan::call('vendor:publish --force');

        return 'ok';
    });
    Route::get('/storagelink',function(){
        Artisan::call('storage:link');

        return 'ok';
    });

});

Route::group(['prefix' => 'filemanager', 'middleware' => ['authlogin']], function ()
   {\UniSharp\LaravelFilemanager\Lfm::routes();}
);



