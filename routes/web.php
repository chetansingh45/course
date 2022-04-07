<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;

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

Route::get('/login', function () { return view('admin.login'); })->middleware('guest')->name('login');

Route::post('/login',[AuthController::class, 'login'])->name('login.attempt');

Route::group(['middleware' => 'auth','prefix' => 'admin'],function(){
    Route::get('/',function () {
        return view('admin.dashboard');
    })->name('dashboard');


    ///Courses
    Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
    Route::post('/course/store',[CourseController::class,'store'])->name('course.store');
    Route::get('/course',[CourseController::class,'index'])->name('course.list');
    Route::get('/course/delete/{id}',[CourseController::class,'destroy'])->name('course.delete');
    Route::get('/course/view/{id}',[CourseController::class,'viewCourse'])->name('course.view');

    ///Category
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category',[CategoryController::class,'index'])->name('category.list');
    Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');


    /// Video

    Route::post('/video/store',[VideoController::class,'store'])->name('video.store');
    ///Users
    Route::get('/users',[UserController::class,'index'])->name('users.list');

});
