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
// 顯示顯示所有魚類資料
Route::get('fishes',[FishesController::class,'index'])->name('fishes.index');
// 顯示單一魚類資料
Route::get('fishes/{id}', [FishesController::class, 'show'])->where('id', '[0-9]+')->name('fishes.show');
// 修改單一魚類表單
Route::get('players/{id}/edit', [FishesController::class, 'edit'])->where('id', '[0-9]+')->name('fishes.edit');

// 顯示顯示所有海域資料
Route::get('seas',[SeasController::class,'index'])->name('seas.index');
// 顯示單一海域資料
Route::get('seas/{id}', [SeasController::class, 'show'])->where('id', '[0-9]+')->name('seas.show');
// 修改單一海域表單
Route::get('seas/{id}/edit', [SeasController::class, 'edit'])->where('id', '[0-9]+')->name('seas.edit');

