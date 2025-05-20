<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutFeatureController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;


Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');





Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');




// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permission Routes
    Route::get('permission/index',[PermissionController::class,'index'])->name('permission.index');
    Route::get('permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('permission/edit/{permission}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('permission/update/{permission}',[PermissionController::class,'update'])->name('permission.update');
    Route::get('permission/delete/{permission}',[PermissionController::class,'delete'])->name('permission.delete');

    // Role Routes
    Route::get('role/index',[RoleController::class,'index'])->name('role.index');
    Route::get('role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('role/store',[RoleController::class,'store'])->name('role.store');
    Route::get('role/edit/{role}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('role/update/{role}',[RoleController::class,'update'])->name('role.update');
    Route::get('role/delete/{role}',[RoleController::class,'delete'])->name('role.delete');

    // User Routes
    Route::get('user/index',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{user}',[UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{user}',[UserController::class,'update'])->name('user.update');
    Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/user/permissions/{user}', [UserController::class, 'assignPermissionForm'])->name('user.permission.form');
    Route::post('/user/permissions/{user}', [UserController::class, 'assignPermissionToUser'])->name('user.assign-permission');



    // Banner Routes
    Route::get('banner/index',[BannerController::class,'index'])->name('banner.index');
    Route::get('banner/create',[BannerController::class,'create'])->name('banner.create');
    Route::post('banner/store',[BannerController::class,'store'])->name('banner.store');
    Route::get('banner/edit/{banner}',[BannerController::class,'edit'])->name('banner.edit');
    Route::post('banner/update/{banner}',[BannerController::class,'update'])->name('banner.update');
    Route::get('banner/delete/{banner}',[BannerController::class,'delete'])->name('banner.delete');


    // About Routes 
    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{about}',[AboutController::class,'edit'])->name('about.edit');
    Route::post('about/update/{about}',[AboutController::class,'update'])->name('about.update');
    Route::get('about/delete/{about}',[AboutController::class,'delete'])->name('about.delete');


    // About Features Routes    
    Route::get('about/features/index',[AboutFeatureController::class,'index'])->name('about.features.index');
    Route::get('about/features/create',[AboutFeatureController::class,'create'])->name('about.features.create');
    Route::post('about/features/store',[AboutFeatureController::class,'store'])->name('about.features.store');
    Route::get('about/features/edit/{aboutFeature}',[AboutFeatureController::class,'edit'])->name('about.features.edit');
    Route::post('about/features/update/{aboutFeature}',[AboutFeatureController::class,'update'])->name('about.features.update');
    Route::get('about/features/delete/{aboutFeature}',[AboutFeatureController::class,'delete'])->name('about.features.delete');
    // About Features Routes
});

require __DIR__.'/auth.php';
