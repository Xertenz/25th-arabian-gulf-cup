<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\Admin\MatchesContoller;
use App\Http\Controllers\Admin\NewsController;




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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/groups',[HomeController::class,'groups']);
Route::get('/watches',[HomeController::class,'watches']);
Route::get('/news',[HomeController::class,'news']);

Route::middleware(['isAdmin','auth'])->group(function(){
    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/admin/groups',[GroupsController::class,'index']);
    Route::get('/add-groups',[GroupsController::class,'add']);
    Route::post('/insert-groups',[GroupsController::class,'insert']);
    Route::get('/delete-group/{id}',[GroupsController::class,'delete']);
    Route::get('/edit-group/{id}',[GroupsController::class,'edit']);
    Route::post('/update-group/{id}',[GroupsController::class,'update']);


    Route::get('/admin/matches',[MatchesContoller::class,'index']);
    Route::get('/add-match',[MatchesContoller::class,'add']);
    Route::post('/insert-match',[MatchesContoller::class,'insert']);
    Route::get('/match-delete/{id}',[MatchesContoller::class,'delete']);
    Route::get('/match-edit/{id}',[MatchesContoller::class,'edit']);
    Route::post('/update-match/{id}',[MatchesContoller::class,'update']);
    Route::get('/admin/news',[NewsController::class,'index']);
    Route::get('/add-news',[NewsController::class,'add']);
    Route::post('/insert-news',[NewsController::class,'insert']);
    Route::get('delete-news/{id}',[NewsController::class,'delete']);
    Route::get('edit-news/{id}',[NewsController::class,'edit']);
    Route::post('/update-news/{id}',[NewsController::class,'update']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
