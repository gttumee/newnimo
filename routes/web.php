<?php

use App\Http\Controllers\Commoncotroller;
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

Route::get('/index',[Commoncotroller::class,'index'])->name('index');
Route::get('/contact',[Commoncotroller::class,'contact'])->name('contact');
Route::get('/work',[Commoncotroller::class,'work'])->name('work');
Route::get('/workRequest',[Commoncotroller::class,'workRequest'])->name('workRequest');
Route::get('/job',[Commoncotroller::class,'job'])->name('job');
Route::get('/about',[Commoncotroller::class,'about'])->name('about');
Route::get('/service',[Commoncotroller::class,'service'])->name('service');
Route::get('/jobDetail',[Commoncotroller::class,'jobDetail'])->name('jobDetail');
Route::get('/nimokun',[Commoncotroller::class,'nimokun'])->name('nimokun');



// Route::get('/', function () {
//     return view('mail');
// });