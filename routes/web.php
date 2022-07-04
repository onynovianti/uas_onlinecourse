<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\InstructorAdminController;
use App\Http\Controllers\CourseAdminController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\PaymentAdminController;

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

// FRONT
// INDEX
Route::get('/', [LoginController::class, 'tampil']); 

// CRUD Login
Route::resource('login', LoginController::class);
Route::get('/mustlogin', [LoginController::class, 'mustlogin']); 
Route::get('/register', [LoginController::class, 'tampilregister']); // Register
Route::post('/logincek', [LoginController::class, 'validasiLogin']); // Memvalidasi Login
Route::post('/logout', [LoginController::class, 'logout']); // Logout

// Role: USER
Route::group(['middleware' => 'user'], function () {
    // MAIN - HOME
    Route::get('/user', [UserController::class, 'index']);
    
    // EXPLORE COURSES
    Route::get('/explorecourse', [UserController::class, 'exploreCourses']);
    Route::get('/explorecourse/{id}', [UserController::class, 'exploreByCategory']);
    Route::get('/detailcourse/{id}', [UserController::class, 'detailCourse']);

    // MY COURSES
    Route::get('/mycourse', [UserController::class, 'mycourse']);
    Route::get('/materibelajar/{id}', [UserController::class, 'materibelajar']);

    // CONTACT-US
    Route::get('/contactus', [UserController::class, 'contactus']);

    // My-ACCOUNT
    Route::get('/myaccount', [UserController::class, 'myaccount']);

    // WISHLIST
    Route::get('/wishlist', [UserController::class, 'wishlist']);

    // ENROLL COURSE
    Route::get('/enroll/{id}', [UserController::class, 'enroll']);
    Route::post('/enroll/{id}', [UserController::class, 'enroll']);
});

// BACK
// Role:ADMIN
Route::group(['middleware' => 'admin'], function () {
    // TAB DASHBOARD
    Route::get('/admin', [AdminController::class, 'index']);

    // TAB USERS
    Route::resource('user_admin', UserAdminController::class);
    Route::resource('user_student', StudentAdminController::class);
    Route::resource('user_instructor', InstructorAdminController::class);
    Route::post('/setactive/{id}', [StudentAdminController::class, 'setactive']);
    Route::post('/setinactive/{id}', [StudentAdminController::class, 'setinactive']);

    // TAB COURSES
    Route::resource('course', CourseAdminController::class);
    Route::resource('category', CategoryAdminController::class);
    Route::post('/addlesson/{id}', [CourseAdminController::class, 'addLesson']);
    Route::get('/detailcourseadmin/{id}', [CourseAdminController::class, 'detailCourseAdmin']);

    // TAB PAYMENTS
    Route::resource('payment', PaymentAdminController::class);
    Route::get('/acceptedpayment', [PaymentAdminController::class, 'acceptedPayment']);
    Route::post('/verifikasi/{id}', [PaymentAdminController::class, 'verifikasi']);
});


