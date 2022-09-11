<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

// Visitor section
Route::get('/', [ PageController::class, 'homepage' ]);
Route::get('/gallery', [ PageController::class, 'gallery' ]);
Route::group([
    'prefix' => 'shooting-range',
    //'middleware' => 'auth',
], function () {
    Route::get('/Nova_Lehota', [ AdminController::class, 'Lehota' ]);
    Route::get('/Beckov', [ AdminController::class, 'Beckov' ]);

});

// Auth section
Route::get('login', [ AuthController::class, 'showLoginForm' ])->name('login');
Route::post('login', [ AuthController::class, 'loginUser' ])->name('loginUser');
Route::get('logout', [ AuthController::class, 'logout' ])->name('logout');

// Admin section
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {
    Route::get('/', [ AdminController::class, 'dashboard' ])->name('admin.dashboard');
    Route::get('/manage/', [ AdminController::class, 'manage' ]);
    Route::get('/manage/topic', [ AdminController::class, 'topic' ]);
    Route::get('/manage/gallery', [ AdminController::class, 'gallery' ]);
    Route::get('/manage/event', [ AdminController::class, 'event' ]);

    
    // GET: /admin/gallery/create ->zobrazi coreate form
    // POST: /admin/gallery -> vytvori novu galeriu
    // GET /admin/gallery/123 -> zobrazi edit form pre galeriu 123
    // PATCH/POST /admin/gallery/123 -> updatne data

});
