<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// {{ ---------------------------------------------------------}}
// {{ -------------------    LOGIN    -------------------------}}
// {{ ---------------------------------------------------------}}

Route::get('/', function () {
    return view('Auth.login');
})->name('login');

Route::post('/Auth.login',[PageController::class,'login'])->name('Auth.login');

// {{ ---------------------------------------------------------}}
// {{ -------------------    ADMIN    -------------------------}}
// {{ ---------------------------------------------------------}}





// {{ ---------------------------------------------------------}}
// {{ -------------------   CUSTOMER  -------------------------}}
// {{ ---------------------------------------------------------}}

// {{------------------- dashboard customer --------------------}}

Route::get('/dashboard-customer', [PageController::class,'showInventoryCustomer'])->name('dashboard-customer');

Route::post('dashboard-customer/checkout', [PageController::class, 'checkout'])->name('order.checkout');

Route::get ('/dashboard', function ()
    {
        return view('User.dashboard');
    }
)->name('dashboard');


// {{--------------------------------- Order ------------------------------}}
Route::get('/order-history', function () {
    return view('User.orderHistory');
})->name('order-history');

// {{----------------------- get history order -----------------------------}}
Route::get('dashboard-customer/orders', [PageController::class, 'getOrders'])->name('order.history');


// {{------------------------ Profile ------------------------------------}}
Route::get('profile', function ()
    {
        return view('User.profile');
    }
)->name('profile');
