<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blog-details', function(){
    return view('frontend.blog-details');
});

Route::get('/portfolio', function(){
    return view('frontend.portfolio');
});

Route::get('/portfolio-details', function(){
    return view('frontend.portfolio-details');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Routes

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('header', HeaderController::class);
    Route::resource('typer-title', TyperTitleController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('about', AboutController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
});
