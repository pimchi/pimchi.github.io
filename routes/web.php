<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('guest.required')->group(function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

Route::middleware('auth')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('', [\App\Http\Controllers\AccountController::class, 'index'])->name('user');

        Route::middleware('user')->group(function () {
            Route::prefix('/application')->group(function () {
                Route::get('', [\App\Http\Controllers\User\ApplicationController::class, 'index'])->name('user.application.index');
                Route::get('/create', [\App\Http\Controllers\User\ApplicationController::class, 'create'])->name('user.application.create');
            });
        });
    });

    Route::middleware('admin')->group(function () {
        Route::prefix('/admin')->group(function () {
            Route::get('', function () {
                return view('admin.index');
            })->name('admin');

            Route::prefix('/application')->group(function () {
                Route::get('', [\App\Http\Controllers\Admin\AdminApplicationController::class, 'index'])->name('admin.application.index');
            });
        });
    });
});
