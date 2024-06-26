<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\FooterController;



use App\Models\About;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Pricing;
use App\Models\Service;



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

Route::get('/', [MainController::class, 'index']);

Route::get('/dashboard', function () {
    $abouts = About::all();
    $footers = Footer::all();
    $homes = Home::all();
    $pricings = Pricing::all();
    $services = Service::all();
    return view('dashboard', compact('abouts','footers','homes','pricings','services'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::put('/home/update/{home}', [HomeController::class, 'update'])->middleware(['auth', 'verified'])->name('home.update');
Route::put('/about/update/{about}', [AboutController::class, 'update'])->middleware(['auth', 'verified'])->name('about.update');
Route::put('/services/update/{service}', [ServiceController::class, 'update'])->middleware(['auth', 'verified'])->name('services.update');
Route::put('/pricing/update/{pricing}', [PricingController::class, 'update'])->middleware(['auth', 'verified'])->name('pricing.update');
Route::put('/footer/update/{footer}', [FooterController::class, 'update'])->middleware(['auth', 'verified'])->name('footer.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->middleware(['auth', 'verified'])->name('services.destroy');
Route::delete('/pricings/{pricing}', [PricingController::class, 'destroy'])->middleware(['auth', 'verified'])->name('pricings.destroy');

Route::post('/pricing/store', [PricingController::class, 'store'])->middleware(['auth', 'verified'])->name('pricing.store');
Route::post('/services/store', [ServiceController::class, 'store'])->middleware(['auth', 'verified'])->name('services.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
