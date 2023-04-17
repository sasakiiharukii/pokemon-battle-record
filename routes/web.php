<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RecordController::class, 'index']);
Route::get('/battle_records/create', [RecordController::class, 'create']);
Route::post('records', [RecordController::class, 'store']);
Route::get('/records/{record}', [RecordController::class, 'show']); 

