<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


use App\Http\Controllers\PaymentController;
Route::post('/checkout/process', [PaymentController::class, 'process'])->name('checkout.process');

use App\Http\Controllers\checkoutPageController;
Route::post('/checkoutPage', [checkoutPageController::class, 'index'])->name('checkoutPage');
Route::get('/shoppingCart', [ShoppingCartController::class, 'index'])->name('shoppingCart');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('/product/view', [ProductController::class, 'viewProduct'])->name('product.view');


require __DIR__.'/auth.php';



//  categories routes
Route::get('/foods', function () {
    return view('Categories.foods');
})->name('foods');

Route::get('/treats', function () {
    return view('Categories.treats');
})->name('treats');

Route::get('/toys', function () {
    return view('Categories.toys');
})->name('toys');

Route::get('/grooming-supplies', function () {
    return view('Categories.grooming-supplies');
})->name('grooming-supplies');

Route::get('/accessories', function () {
    return view('Categories.accessories');
})->name('accessories');

Route::get('/health-needs', function () {
    return view('Categories.health-needs');
})->name('health-needs');

Route::get('/essentials', function () {
    return view('Categories.essentials');
})->name('essentials');






