<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContatController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WatchController;
use App\Http\Middleware\adminUser;
use App\Http\Middleware\islogged;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index')->middleware(islogged::class); // List all orders
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store')->middleware(islogged::class); // Create a new order
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show')->middleware(islogged::class); // Show a specific order
Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit')->middleware(islogged::class); // Edit a product by ID
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update')->middleware(islogged::class); // Update a specific order
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy')->middleware(islogged::class); // Delete a specific order

Route::get('/watches', [WatchController::class, 'index'])->name('watches.index'); // List all watches
Route::get('/watches/create', [WatchController::class, 'create'])->name('watches.create');
Route::post('/watches', [WatchController::class, 'store'])->name('watches.store'); // Create a new product
Route::get('/watches/{id}', [WatchController::class, 'show'])->name('watches.show'); // Show a specific watch
Route::get('/watches/{id}/edit', [WatchController::class, 'edit'])->name('watches.edit'); // Edit a product by ID
Route::put('/watches/{id}', [WatchController::class, 'update'])->name('watches.update'); // Update product by ID
Route::delete('/watches/{id}/destroy', [WatchController::class, 'destroy'])->name('watches.destroy')->middleware(adminUser::class); // Delete product by ID

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContatController::class, 'submit'])->name('contact.submit');

//URL::forceScheme("https");
?>
