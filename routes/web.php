<?php

use App\Http\Controllers\MealKitController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\PostController;




// User Routes (protected by auth middleware)
Route::middleware('auth')->group(function () {
    // User Landing Page
    Route::get('/user/landingpage', [UserController::class, 'landingPage'])->name('user.landingpage');
    
    // Cart Routes
    Route::post('/add-to-cart/{mealKit}', [CartController::class, 'addToCart'])->name('cart.add'); // Add to cart
    Route::get('/cart', [CartController::class, 'show'])->name('cart.show'); // Show cart
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout'); // Checkout
});

// Admin Routes (protected by auth:admin middleware)
Route::middleware('auth:admin')->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Meal Kit Routes (Product related routes)
Route::get('/', [MealKitController::class, 'index'])->name('/user/landingpage'); // Homepage
Route::get('/browse-mealkits', [MealKitController::class, 'index'])->name('browse.mealkits');
Route::resource('meal-kits', MealKitController::class); // RESTful MealKit routes

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products'); // Show all products (meal kits)
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.details'); // Show a single product details

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout Route (Protected by auth middleware)
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');

// Laravel Default Auth Routes (Handles other authentication routes)
Auth::routes();  // This automatically handles routes for login, registration, etc.

// Home Route (Redirect to home after login or registration)
Route::get('/user/landingpage', [App\Http\Controllers\HomeController::class, 'index'])->name('landingpage');

// Cleaned up the duplicate route for landing page
// This route will load the 'user.landingpage' view.
Route::get('/user/landingpage', [UserController::class, 'landingPage'])->name('user.landingpage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');



Route::get('/landing-page', function () {
    return view('user.landingpage');
});


Route::middleware('admin')->group(function () {
    // Admin routes
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


Route::get('/about', function () {
    return view('user.aboutus');
})->name('about');


Route::prefix('cart')->group(function () {
    Route::post('add/{recipeId}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('remove/{recipeId}', [CartController::class, 'remove'])->name('cart.remove');
});

// web.php
Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');



// routes/web.php
Route::get('/checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('/checkout/stripe', [StripeController::class, 'createCheckoutSession'])->name('checkout.stripe');
Route::get('/checkout/success', [StripeController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [StripeController::class, 'cancel'])->name('checkout.cancel');

Route::post('/webhook/stripe', [StripeWebhookController::class, 'handle']);
Route::get('/checkout/success', [StripeController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [StripeController::class, 'cancel'])->name('checkout.cancel');


Route::middleware('auth')->group(function () {
    Route::post('/cart/add/{recipe}', [CartController::class, 'add'])->name('cart.add');
    // Other cart-related routes, like viewing the cart or proceeding to checkout
});

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{recipe}', [CartController::class, 'add'])->name('cart.add');
    // Add any other cart routes here
});



Route::middleware(['auth'])->group(function () {
    Route::get('/community', [PostController::class, 'index'])->name('community.index');
    Route::post('/community', [PostController::class, 'store'])->name('community.store');
});
