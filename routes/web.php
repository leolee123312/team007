<?php
use Illuminate\Support\Facades\Route;
use App\Services\ToolsService;
use App\Http\Controllers\testEventandLinsterController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FishesController;
use App\Http\Controllers\SeasController;


Route::get('/', function () {
    return redirect('fishes');
});

Route::get('fishes',[FishesController::class,'index'])->name('fishes.index');
Route::get('seas',[SeasController::class,'index'])->name('seas.index');

