<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Enrollment\EnrollmentController;
use App\Http\Controllers\Permission\PermissionController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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


Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'login');
});

Route::middleware('auth')->group( function() {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('category', CategoryController::class);
    Route::resource('course', CourseController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('enrollment', EnrollmentController::class);
    Route::get('logout', [AuthController::class, 'logout']);
});



