<?php

use App\Http\Controllers\FactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( '/user', function ( Request $request ) {
    return $request->user();
} )->middleware( 'auth:sanctum' );

Route::get( 'facts', [ FactController::class, 'index' ] );
Route::get('facts/random', [ FactController::class, 'random' ] );
Route::get('facts/{id}', [ FactController::class, 'show' ] );
