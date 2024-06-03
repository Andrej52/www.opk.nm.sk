<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


// Visitor section
Route::get('/', [ PageController::class, 'homepage' ]);
Route::get('/home', [ PageController::class, 'homepage' ]);
Route::get('/strelectvo', [ PageController::class, 'shooting' ]);
Route::get('/kynology', [ PageController::class, 'kynology' ]);
Route::get('/contact', [ PageController::class, 'contact' ]);
Route::get('/courses', [ PageController::class, 'courses' ]);
Route::get('/oko', [ PageController::class, 'oko_spz' ]);
Route::get('/OPK_crew', [ PageController::class, 'opk_crew' ]);
Route::get('/statute', [ PageController::class, 'statutes' ]);
Route::get('/hunt_statutes', [ PageController::class, 'hunt_statutes' ]);
Route::get('/Lehota', [ PageController::class, 'shooting_range_Lehota' ]);
Route::get('/Beckov', [ PageController::class, 'shooting_range_Beckov' ]);
Route::group([
    'prefix' => '/gallery',
],function (){
    Route::get('/', [ GalleryController::class, 'gallery' ]);
    Route::get('/content/{id}', [ GalleryController::class, 'gallery_content' ]);
});

// Auth section
Route::get('login', [ AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [ AuthController::class, 'loginUser' ])->name('loginUser');
Route::get('logout', [ AuthController::class, 'logout' ])->name('logout');

// Admin section
Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth',
], function () {
    Route::get('/', [ AdminController::class, 'dashboard' ])->name('admin.dashboard');
    Route::get('/management/', [ AdminController::class, 'manage' ]);
    Route::get('/manage/{type}/{action}/{id?}', [ ManageController::class, 'showform' ]);
});
//Route::post('/admin/manage/{action}/',[ManageController::class,'add']);