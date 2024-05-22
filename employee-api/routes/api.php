<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Departments\DepartmentsController;
use App\Http\Controllers\User\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'getUser']);
    Route::group(['prefix' => 'users'], function () {
        Route::get('/list', [UsersController::class, 'getAllWithPaginate']);
        Route::put('/{id}', [UsersController::class, 'update']);
        Route::get('/{id}', [UsersController::class, 'show']);
    });
    Route::group(['prefix' => 'department'], function () {
        Route::get('', [DepartmentsController::class, 'index']);
        Route::put('/{id}', [DepartmentsController::class, 'update']);
        Route::post('', [DepartmentsController::class, 'store']);
        Route::delete('/{id}', [DepartmentsController::class, 'destroy']);
    });
});
