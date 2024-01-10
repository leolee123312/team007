<?php
use Illuminate\Support\Facades\Route;
use App\Services\ToolsService;
use App\Http\Controllers\testEventandLinsterController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FishesController;
use App\Http\Controllers\SeasController;

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return redirect('fishes');
    });
    // 顯示顯示所有魚類資料
    Route::get('fishes',[FishesController::class,'index'])->name('fishes.index');
    Route::post('fishes',[FishesController::class,'submitForm'])->name('fishes.submitForm');

    // 顯示單一魚類資料
    Route::get('fishes/{id}', [FishesController::class, 'show'])->where('id', '[0-9]+')->name('fishes.show');
    // 修改單一魚類表單
    Route::get('fishes/{id}/edit', [FishesController::class, 'edit'])->where('id', '[0-9]+')->name('fishes.edit');
    // 刪除單一魚類資料
    Route::delete('fishes/delete/{id}', [FishesController::class, 'destroy'])->where('id', '[0-9]+')->name('fishes.destroy');
    // 新增魚類表單
    Route::get('fishes/create', [FishesController::class, 'create'])->name('fishes.create');
    // 儲存魚類資料
    Route::post('fishes/store', [FishesController::class, 'store'])->where('id', '[0-9]+')->name('fishes.store');
    // 修改特定魚類資料
    Route::patch('fishes/update/{id}', [FishesController::class, 'update'])->where('id', '[0-9]+')->name('fishes.update');
    // 魚類日期查詢
    Route::get('fishes/select', [FishesController::class, 'select'])->name('fishes.select');





    // 顯示顯示所有海域資料
    Route::get('seas',[SeasController::class,'index'])->name('seas.index');
    // 顯示單一海域資料
    Route::get('seas/{id}', [SeasController::class, 'show'])->where('id', '[0-9]+')->name('seas.show');
    // 修改單一海域表單
    Route::get('seas/{id}/edit', [SeasController::class, 'edit'])->where('id', '[0-9]+')->name('seas.edit');
    // 刪除單一海域資料
    Route::delete('seas/delete/{id}', [SeasController::class, 'destroy'])->where('id', '[0-9]+')->name('seas.destroy');
    // 新增海域表單
    Route::get('seas/create', [SeasController::class, 'create'])->name('seas.create');
    // 儲存海域資料
    Route::post('seas/store', [SeasController::class, 'store'])->where('id', '[0-9]+')->name('seas.store');
    // 修改海域資料
    Route::patch('seas/update/{id}', [SeasController::class, 'update'])->where('id', '[0-9]+')->name('seas.update');
    // 海域地區查詢
    Route::get('seas/select', [SeasController::class, 'select'])->name('seas.select');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
