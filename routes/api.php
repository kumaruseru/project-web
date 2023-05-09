<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BagController;

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

// Define a single route for both adding and removing products from the bag
Route::post('/bag/{action}', [BagController::class, 'addOrRemoveProduct'])
    ->where('action', 'add|remove');

// Remove the old routes
// Route::delete('/removeFromBag/{productId}', 'Api\BagController@removeProduct');
// Route::post('/bag/add', [BagController::class, 'addProduct']);
// Route::delete('/bag/remove', [BagController::class, 'removeProduct']);
