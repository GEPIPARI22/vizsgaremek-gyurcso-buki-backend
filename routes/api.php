<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\DokumentumController;
use App\Http\Controllers\ErtekelesController;
use App\Http\Controllers\IskolaController;
use App\Http\Controllers\MunkakorController;
use App\Http\Controllers\OktatoController;

use App\Http\Controllers\OraertekelesController;
use App\Http\Controllers\OralatogatasController;
use App\Http\Controllers\SzempontController;
use App\Http\Controllers\SzempontsorController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public routes
Route::post('/login',[AuthController::class, 'login']);
Route::post('/register',[AuthController::class, 'register']);

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::resource('/dokumentum', DokumentumController::class);
    Route::resource('/iskola', IskolaController::class);
    Route::resource('/munkakor', MunkakorController::class);
    Route::resource('/oktato', OktatoController::class);
    
    Route::resource('/oraertekeles', OraertekelesController::class);
    Route::resource('/oralatogatas', OralatogatasController::class);
    Route::resource('/szempont', SzempontController::class);
    Route::get('/szempont/szempontsor/{id}',[SzempontController::class, 'index2']);
    Route::resource('/szempontsor', SzempontsorController::class);
    Route::resource('/ertekeles', ErtekelesController::class);

    Route::get('/users',[AuthController::class, 'users']);
    Route::get('/users/{id}',[AuthController::class, 'show']);
    Route::patch('/users/{user}',[AuthController::class, 'update']);
    Route::delete('/users/{user}',[AuthController::class, 'delete']);
    Route::post('/logout',[AuthController::class, 'logout']);
});