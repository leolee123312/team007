<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use Database\Seeders\Device;

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

// Route::get("data",[dummyAPI::class,'getData']);
// 跟web.php route 寫法一樣
// route name is "data"
//訪問一定要是localhoust/api/data

// Route::get("list/{param?}", [DeviceController::class, 'getList']);

// ---------------------
// if we want to make sign up use API with Post Method

Route::get('/add',[DeviceController::class, '_invoke'])->name('api');