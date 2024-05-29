<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homePage')->name('home.landingpage');


    // Create and Save
    // Route::get('/create/product', 'createProduct')->name('home.createform');
    // Route::post('/save/product', 'saveProduct')->name('home.saveproduct');

    // Read Product
    Route::get('/', 'readProduct')->name('home.readproduct');
});

// Authentication Routes
Route::controller(AuthController::class)->group(function () {
    // Register Page
    Route::get('/loginsystem', 'registerPage')->name('auth.register-page');
    // Save Registered User
    Route::post('/loginsystem/save', 'storeUser')->name('auth.save-user');

    // Login Action
    Route::post('/loginsystem/login', 'loginAction')->name('auth.login-action');
    // Logout Action
    Route::get('/logout', 'logout')->middleware('auth')->name('auth.logout-action');
});

// Route::get('/user-profile', [HomePageController::class, 'userProfile'])->name('homepage.user-profile');

// Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/user-profile', [HomePageController::class, 'userProfile'])->name('homepage.user-profile');
    // Order Product

    Route::post('/order/action', [HomePageController::class,'oderAction'])->name('homepage.order-action');
});

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin-dashboard', [HomePageController::class, 'adminDashboard'])->name('homepage.admin-dashboard');
    Route::controller(HomeController::class)->group(function () {

        // Create and Save
        Route::get('/create/product', 'createProduct')->name('home.createform');
        Route::post('/save/product', 'saveProduct')->name('home.saveproduct');


        Route::get('/products/{id}/edit', 'updateProduct')->name('home.updateform');
        // Update Player and Save
        Route::put('/products/{id}/update', 'saveUpdatProduct')->name('home.save-product');
        // Delete Player
        Route::delete('/products/{id}/delete', 'deleteProduct')->name('home.delete-product');
    });
    Route::middleware('auth')->group(function () {
        // User profile page
        Route::get('/user-profile', [HomePageController::class, 'userProfile'])->name('homepage.user-profile');
        
        // Admin dashboard page
        Route::get('/admin-dashboard', [HomePageController::class, 'adminDashboard'])->name('homepage.admin-dashboard');
    
        // Order creation (POST request)
        Route::post('/order', [HomePageController::class, 'orderAction'])->name('order.action');
    
        // Order update (POST request)
        Route::post('/order/update/{id}', [HomePageController::class, 'updateOrder'])->name('order.update');
    
        // Order deletion (DELETE request)
        Route::delete('/order/delete/{id}', [HomePageController::class, 'deleteOrder'])->name('order.delete');
    });
    





});
