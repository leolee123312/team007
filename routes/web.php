<?php
use Illuminate\Support\Facades\Route;
use App\Services\ToolsService;
use App\Models\Purchase;
use App\Http\Controllers\testEventandLinsterController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FishesController;
use App\Http\Controllers\SeasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',function(ToolsService $tools ){
   
    return $tools->say();
});




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






// Route::post('/fi', 'testEventandLinsterController@store');
// Route::get('/testEventandLinster', 'testEventandLinsterController@create')->name('Event');


// Route::get('/testEventandLinster',[App\Http\Controllers\testEventandLinsterController::class, 'show'])->name('show');
// Route::post('/testEventandLinster',[App\Http\Controllers\testEventandLinsterController::class, 'showSave'])->name('show.Save');
// Route::get('/page',[App\Http\Controllers\testEventandLinsterController::class, 'page'])->name('page');
// //
// Route::get('/index',[App\Http\Controllers\testEventandLinsterController::class,'index']);
// Route::Post('/subscribe',[App\Http\Controllers\testEventandLinsterController::class,'subscribe']);

// //
// Route::get('/device',[App\Http\Controllers\DeviceController::class,'_invoke']);

// //      
Route::get('/Fish',[App\Http\Controllers\FishesController::class,'index']);
Route::get('/Seas',[App\Http\Controllers\SeasController::class,'index']);

