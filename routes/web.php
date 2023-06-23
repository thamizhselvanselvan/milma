<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
 
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[testController::class,'home'])->name('home');


Route::get('/admin',[testController::class,'admin'])->name('admin');
Route::post('/store',[testController::class,'store'])->name('store');
Route::get('/delete/{id}',  [testController::class, 'delete'])->name('delete');
Route::get('/test',  [testController::class, 'test'])->name('test');