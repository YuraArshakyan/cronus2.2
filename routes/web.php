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
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $slider = carousel_imgs::all();
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    $config = configs::all();
    return view('index',compact('title', 'texts', 'photos', 'config', 'slider', 'topbar'));
});

Route::get('/contact', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::where('id', 2)->get();
    $config2 = configs::where('id', 3)->get();
    $texts = texts::all();
    $title = titles::all();
    $icone = array(
        16 => 'fal fa-envelope',
        17 => 'fal fa-phone',
        18 => 'fal fa-map-marker-alt',
    );
    return view('contact', compact( 'texts', 'config', 'config2', 'title', 'icone', 'topbar'));
})->name('contacts');

Route::get('/head', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('head', compact( 'config', 'topbar'));
})->name('head');

Route::get('/track', function () {
    $config = configs::all();
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    return view('track', compact('config', 'topbar'));
})->name('track');

Route::get('/news', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('news', compact('config', 'topbar'));
})->name('news');

Route::get('/faq', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('faq', compact('config', 'topbar'));
})->name('faq');

Route::get('/team', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    return view('team', compact('title', 'texts', 'photos', 'config', 'topbar'));
})->name('team');

Route::get('/pricing', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('pricing', compact('config', 'topbar'));
})->name('pricing');

Route::get('/404', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('404',compact('config', 'topbar'));
})->name('404');

Route::get('/services', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
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
    return view('services', compact('title', 'texts', 'photos', 'config', 'icone', 'topbar'));
})->name('services');

Route::get('/about', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    $title = titles::all();
    $texts = texts::all();
    $photos = photos::all();
    return view('about', compact('title', 'texts', 'photos', 'config', 'topbar'));
})->name('about');

Route::get('/A_log', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('A_log', compact('config', 'topbar'));
});
Route::controller(admin::class)->group(function (){
    Route::get('login', [admin::class, 'login'])->name('admin.login');
    Route::get('logout', [admin::class, 'logout'])->name('admin.logout');

});

Route::get('/edit_config', function () {
    $topbar = array(
        1 => configs::where('id', 5)->get(),
        2 => configs::where('id', 6)->get(),
        3 => configs::where('id', 7)->get(),
    );
    $config = configs::all();
    return view('edit_config', compact('config', 'topbar'));
})->name('edit_config');

Route::controller(edit::class)->group(function (){
    Route::get('/edit/{id}/{count}', [edit::class, 'edit'])->name('edit');
    Route::put('update/{id}/{id2}', [edit::class, 'update'])->name('update');
});
