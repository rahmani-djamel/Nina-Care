<?php

use App\Http\Controllers\UserController;
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
Route::namespace('App\Http\Controllers')->group(function() {

    Route::prefix('user')->as('user.')->group(function() {

        Route::get('/', [UserController::class, 'index'])->name('index'); // /user/ route for show all users

        Route::get('/filter', [UserController::class, 'filter'])->name('filter'); // /user/filter  route for filtering
    
    
        Route::get('/{userid}', [UserController::class, 'show'])->name('show'); // /user/1  route for get user orders 

    });







});



