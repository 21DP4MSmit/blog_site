<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PageController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('review', [HomeController::class, 'review']);


Route::get('login', [AuthController::class, 'login']);
Route::middleware('throttle:5,1')->post('/login', [AuthController::class, 'login']); // to protect against brute-force attacks applied rate limiting to the /login


Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create_user']);
Route::get('verify/{token}', [AuthController::class, 'verify']);

Route::get('forgot-password', [AuthController::class, 'forgot']);
Route::middleware('throttle:5,1')->post('/forgot-password', [AuthController::class, 'forgotPassword']); // to protect against brute-force attacks applied rate limiting to the /forgot-password

Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'post_reset']);

Route::get('logout', [AuthController::class, 'logout']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'admin'], function() {
    
    Route::get('panel/user/list', [UserController::class, 'user']);
    Route::get('panel/user/add', [UserController::class, 'add_user']);
    Route::post('panel/user/add', [UserController::class, 'insert_user']);
    Route::get('panel/user/edit/{id}', [UserController::class, 'edit_user']);
    Route::post('panel/user/edit/{id}', [UserController::class, 'update_user']);
    Route::get('panel/user/delete/{id}', [UserController::class, 'delete_user']);

    Route::get('panel/category/list', [CategoryController::class, 'category']);
    Route::get('panel/category/add', [CategoryController::class, 'add_category']);
    Route::post('panel/category/add', [CategoryController::class, 'insert_category']);
    Route::get('panel/category/edit/{id}', [CategoryController::class, 'edit_category']);
    Route::post('panel/category/edit/{id}', [CategoryController::class, 'update_category']);
    Route::get('panel/category/delete/{id}', [CategoryController::class, 'delete_category']);

    Route::get('panel/page/list', [PageController::class, 'page']);
    Route::get('panel/page/add', [PageController::class, 'add_page']);
    Route::post('panel/page/add', [PageController::class, 'insert_page']);
    Route::get('panel/page/edit/{id}', [PageController::class, 'edit_page']);
    Route::post('panel/page/edit/{id}', [PageController::class, 'update_page']);
});

Route::group(['middleware' => 'adminuser'], function() {

    Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('panel/change-password', [UserController::class, 'ChangePassword']);
    Route::post('panel/change-password', [UserController::class, 'UpdatePassword']);

    Route::get('panel/account-settings', [UserController::class, 'AccountSettings']);
    Route::post('panel/account-settings', [UserController::class, 'UpdateAccountSettings']);
    


    Route::get('panel/reviews/list', [ReviewController::class, 'reviews']);
    Route::get('panel/reviews/add', [ReviewController::class, 'add_review']);
    Route::post('panel/reviews/add', [ReviewController::class, 'insert_review']);
    Route::get('panel/reviews/edit/{id}', [ReviewController::class, 'edit_review']);
    Route::post('panel/reviews/edit/{id}', [ReviewController::class, 'update_review']);
    Route::get('panel/reviews/delete/{id}', [ReviewController::class, 'delete_review']);
    
    Route::post('review-comment-submit', [HomeController::class, 'ReviewCommentSubmit']);
});


Route::get('{slug}', [HomeController::class, 'reviewdetail']);
