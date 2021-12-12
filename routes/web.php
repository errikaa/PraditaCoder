<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\enroll_courseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\join_usController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/tips', function () {
    return view('tips');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/joinus', function () {
    return view('joinus');
});


//Login Routes
Route::get('/login', [LoginController::class, 'loginpage'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Sign Up Routes
Route::get('/signup', [SignupController::class, 'signuppage'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);

//Dashboard Routes
//Route::get('/dashboard', [DashboardController::class, 'profile'])->middleware('auth');

Route::get('/dashboard', function() { 
    return view('dashboard.profile');
})->middleware('auth');

Route::resource('/dashboard/enroll', enroll_courseController::class)->middleware('auth');

Route::resource('/courses', CoursesController::class);

Route::resource('/dashboard/user', UserController::class);

Route::post('/joinus', [join_usController::class, 'join']);

Route::post('/', [ContactUsController::class, 'contact']);