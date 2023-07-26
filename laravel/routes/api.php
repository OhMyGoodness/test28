<?php

use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\AutoController;
use App\Http\Controllers\api\v1\AutoMarkController;
use App\Http\Controllers\api\v1\AutoModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function (){
    Route::get('auto/marks/list', [AutoMarkController::class, 'list'])->name('v1.get.auto.marks.all');
    Route::get('auto/models/list', [AutoModelController::class, 'list'])->name('v1.get.auto.models.all');
    Route::get('auto/list', [AutoController::class, 'list'])->name('v1.get.autos');

    Route::get('auth/login', [AuthController::class, 'login'])->name('v1.auth.login');

    Route::resource('auto', AutoController::class, ['except' => ['index', 'create', 'show', 'edit']]);
});

Route::group(['prefix' => 'v2', 'middleware' => ['auth:sanctum']], function (){
    Route::get('auto/list', [AutoController::class, 'list'])->name('v2.get.autos');
});
