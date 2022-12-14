<?php

use App\Http\Controllers\Api\V1\ClientsController;
use App\Http\Controllers\Api\V1\EventsController;
use App\Http\Controllers\TicketController;
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

/* Grouping all the routes together. */
Route::prefix('v1/clients')->group(function () {
    //Clients routers
    Route::get('', [ClientsController::class, 'index']);
    Route::get('/{id}', [ClientsController::class, 'show']);
    Route::post('', [ClientsController::class, 'store']);
    Route::put('/{id}', [ClientsController::class, 'update']);
    Route::delete('/{id}', [ClientsController::class, 'destroy']);
});

/* Grouping all the routes together. */
Route::prefix('v1/events')->group(function () {
    //Event routers
    Route::get('', [EventsController::class, 'index']);
    Route::get('/{id}', [EventsController::class, 'show']);
    Route::post('', [EventsController::class, 'store']);
    Route::put('/{id}', [EventsController::class, 'update']);
    Route::delete('/{id}', [EventsController::class, 'destroy']);
});


/* A way to group routes together. */
Route::prefix('v1/tickets')->group(function () {
    //Tickets routers
    Route::post('', [TicketController::class, 'store']);
});

