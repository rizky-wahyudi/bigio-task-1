<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
|   Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
|   User Route 		
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'main'])->name('user-main');


/*
|--------------------------------------------------------------------------
|   Admin Route 		
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'main'])->name('admin-main');
        Route::get('/commodity/request', [AdminController::class, 'requestCommodity'])->name('admin-commodity-request');
        Route::post('/commodity/request', [AdminController::class, 'doRequestCommodity'])->name('admin-do-commodity-request');
        Route::get('/commodity/list', [AdminController::class, 'listCommodity'])->name('admin-list-commodity');
    });

    Route::get('/login',[AdminController::class, 'login'])->name('admin-login');
    Route::post('/login',[AdminController::class, 'doLogin'])->name('admin-do-login');
    Route::get('/logout',[AdminController::class, 'doLogout'])->name('admin-do-logout');

});


/*
|--------------------------------------------------------------------------
|   Surveyor Route 		
|--------------------------------------------------------------------------
*/
Route::prefix('surveyor')->group(function () {

    Route::group(['middleware' => 'surveyor'], function () {
        Route::get('/', [SurveyorController::class, 'main'])->name('surveyor-main');
        Route::get('/commodity/input', [SurveyorController::class, 'inputCommodity'])->name('surveyor-input-commodity');
        Route::post('/commodity/input', [SurveyorController::class, 'doInputCommodity'])->name('surveyor-do-input-commodity');
        Route::get('/commodity/list', [SurveyorController::class, 'listCommodity'])->name('surveyor-list-commodity');
    });

    Route::get('/login',[SurveyorController::class, 'login'])->name('surveyor-login');
    Route::post('/login',[SurveyorController::class, 'doLogin'])->name('surveyor-do-login');
    Route::get('/logout',[SurveyorController::class, 'doLogout'])->name('surveyor-do-logout');
});