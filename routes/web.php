<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishController;
use App\Models\Cart;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'display_product'])->name('display_products');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/user/reg', [UserController::class, 'registrationForm'])->name('registration');
Route::post('/user/reg', [UserController::class, 'register'])->name('loginpage');
Route::get('/user/login', [UserController::class, 'login'])->name('display_product');
Route::post('/user/login', [UserController::class, 'loginhome'])->name('Openstore');
Route::middleware(['auth'])->group(function () {
    Route::get('/maxrite/store', [StoreController::class, 'storename'])->name('stokes');
    Route::post('/maxrite/store', [StoreController::class, 'storelogo'])->name('Stores');
    Route::get('/maxrite/product/{id}', [ProductController::class, 'sales'])->name('display_store');
    Route::post('/maxrite/product', [ProductController::class, 'items'])->name('display_price');
    Route::get('/item', [CartController::class, 'cartItems'])->name('Items');
    Route::get('/cart/add-to-cart', [CartController::class, 'addToCart'])->name('carts')->middleware(['auth']);
    // Route::get('/view/cart', [CartController::class, 'viewcart'])->name('ViewCart');

    Route::get('/cart', [CartController::class, 'viewcart'])->name('ViewCart');
    Route::get('/cart/items', [CartItemController::class, 'ViewItem'])->name('viewcart');
    Route::get('/cart/delete/{id}', [CartItemController::class, 'Removeitems'])->name('deleteitems');
    Route::get('/order/items', [OrderController::class, 'makeOrder'])->name('OrderProduct')
        ->middleware(['auth']);
    Route::get('/order/payment', [PaymentController::class, 'payment'])->name('paid');

    Route::get('/maxrite/dashboard', [DashboardController::class, 'dashboard'])->name('Maxrite_dashBoard');
    Route::get('/payment/initialize', [PaymentController::class, 'initializePayment'])->name('payment.initialize');
    Route::get('/payment/verify', [PaymentController::class, 'verifyPayment'])->name('payment.verify');
});

// Admin Routes
Route::middleware(['admin-guard', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/maxrite/admin', [DashboardController::class, 'admin_dashboard'])->name('admin');
    Route::get('/maxrite/salesrecord', [SaleController::class, 'showrecord'])->name('show_record');
    Route::get('/maxrite/users', [UserController::class, 'Maxrite_user'])->name('users');
    Route::get('/maxrite/cart', [DashboardController::class, 'maxrite_cart'])->name('users_cart');
    Route::get('/maxrite/storage', [DashboardController::class, 'maxrite_order'])->name('users_order');
    Route::get('/maxrite/cartitem', [DashboardController::class, 'maxrite_cartitems'])->name('users_cartitems');
    Route::get('maxrite/admin/store', [DashboardController::class, 'maxrite_store'])->name('adminStores');
    Route::get('/maxrite/product_admin', [DashboardController::class, 'maxrite_products'])->name('admin_products');
    Route::get('maxrite/update/{id}', [UserController::class, 'Update_user'])->name('update_user');
});
// Route::get('/update_user', function () {
//     echo "you have turn this user to admin";
// })->name('update_user');
// Route::get('maxrite/user_wish', [WishController::class, 'wishlist'])->name('User_wish');
// Route::get('maxrite/view_wishcart', [WishController::class, 'View_wishcart'])->name('view_the_wish')->middleware(['auth']);
Route::get('/search/product', [ProductController::class, 'Searched'])->name('searchProduct');
require __DIR__ . '/auth.php';
