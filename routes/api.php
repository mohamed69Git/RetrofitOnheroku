<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AchatTicketController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\EntreRestoController;
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

Route::resource('posts', PostController::class);


Route::get('/hello', function () {
    return response()->json("bienvenue dans notre premier champs de controle");
});

Route::post('/register', [UserController::class, 'register']);

// Route::middleware(['middleware' => ['second']], function () {
//     Route::get('/hello', [UserController::class, 'login']);
// });

Route::post('/login', [UserController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/acheter', [AchatTicketController::class, 'acheter']);
    Route::get('/compte/{id}', [CompteController::class, 'getCompte']);
    Route::post('/envoyer', [CompteController::class, 'envoyer']);
    Route::post('/apply', [EntreRestoController::class, 'apply']);
    Route::get('/findUser/{email}', [UserController::class, 'findUser']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/hello', [UserController::class, 'sayHello']);
});
Route::get('/studentRestoVisitCount/{id}', [EntreRestoController::class, 'studentRestoVisitCount']);
