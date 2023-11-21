<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('rest.main');
// Route::get('/dash',[HomeController::class,'dashboard']);
Route::get('/logged',[HomeController::class,'logged'])->name('logged.in');

Route::post('/reservation',[ReservationController::class, "store"])->name("tbl.reserve");
Route::get('/reservation',[ReservationController::class, "index"])->name("table_reserved");
Route::get('/reservation{id}',[ReservationController::class, "Done"])->name("Done.Reservation");
Route::get('/reservationcompleted',[ReservationController::class, "completed"])->name("reservation.completed");
// Route::get('/welcome',function()
// {
//     return view('welcome');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { 
        return view('dashboard');
    })->name('dashboard');
});


// composer require laravel/jetstream 
// php artisan jetstream:install livewire
// npm install 
// npm run dev 
// npm i vite
// make changes in user migration (add usertype column in migtration)
// php artisan migrate




