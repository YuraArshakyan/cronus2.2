<?php

use Illuminate\Support\Facades\Route;
use App\Models\carousel_imgs;
use App\Models\texts;
use App\Models\photos;
use App\Models\titles;
use App\Http\Controllers\admin;
use App\Http\Controllers\edit;
use App\Models\configs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $slides = array(
        "slide1" => carousel_imgs::where('id', 1)->get(),
        "slide2" => carousel_imgs::where('id', 2)->get(),
    );
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    $config = configs::all();
    return view('index',compact('slides','title', 'texts', 'photos', 'config'));
});

Route::get('/contact', function () {
    $config = configs::all();
    $texts = texts::all();
    $title = titles::all();
    $icone = array(
        16 => 'fal fa-envelope',
        17 => 'fal fa-arrow-right',
        18 => 'fal fa-map-marker-alt',
    );
    return view('contact', compact( 'texts', 'config', 'title', 'icone'));
})->name('contacts');

Route::get('/head', function () {
    $config = configs::all();
    return view('head', compact( 'config'));
})->name('head');

Route::get('/news', function () {
    $config = configs::all();
    return view('news', compact('config'));
})->name('news');

Route::get('/faq', function () {
    $config = configs::all();
    return view('faq', compact('config'));
})->name('faq');

Route::get('/team', function () {
    $config = configs::all();
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    return view('team', compact('title', 'texts', 'photos', 'config'));
})->name('team');

Route::get('/pricing', function () {
    $config = configs::all();
    return view('pricing', compact('config'));
})->name('pricing');

Route::get('/404', function () {
    $config = configs::all();
    return view('404',compact('config'));
})->name('404');

Route::get('/services', function () {
    $config = configs::all();
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    $icone = array(
       2 => 'flaticon-airplane-5',
       3 => 'flaticon-ship-5',
       4 => 'flaticon-truck-2',
       5 => 'flaticon-subway',
       6 => 'flaticon-food',
       7 => 'flaticon-drone-2',
    );
    return view('services', compact('title', 'texts', 'photos', 'config', 'icone'));
})->name('services');

Route::get('/about', function () {
    $config = configs::all();
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    return view('about', compact('title', 'texts', 'photos', 'config'));
})->name('about');

Route::get('/A_log', function () {
    $config = configs::all();
    return view('A_log', compact('config'));
});
Route::controller(admin::class)->group(function (){
    Route::get('login', [admin::class, 'login'])->name('admin.login');
    Route::get('logout', [admin::class, 'logout'])->name('admin.logout');

});

Route::get('/edit_config', function () {
    $config = configs::all();
    return view('edit_config', compact('config'));
})->name('edit_config');

Route::controller(edit::class)->group(function (){
    Route::get('/edit/{id}/{count}', [edit::class, 'edit'])->name('edit');
    Route::put('update/{id}/{id2}', [edit::class, 'update'])->name('update');
});
