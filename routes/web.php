<?php

use Illuminate\Support\Facades\Route;
//basic controller(custom controller)
use App\Http\Controllers\customcontroller;
//single action controller
use App\Http\Controllers\singleAction;
//form controller
use App\Http\Controllers\form;
//user controller
use App\Http\Controllers\user;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/about/{name}/{id}', function(string $name, int $id){
//      return view('about')->with(compact('name','id'));
// });
//null id pass krny k lye
// Route::get('/about/{name}/{id?}', function(string $name, $id = null){
//      return view('about')->with(compact('name','id'));
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

//new controller routing define 
// Route:: get('/index',[customcontroller:: class,'index']);
// Route:: get('/about',[customcontroller:: class,'about']);
// Route:: get('/contact',[customcontroller:: class,'contact']);

//new contoller routing define(group method)

// Route::controller(customcontroller::class)->group(function(){
//     Route::get('/','index');
//     Route::get('/about','about');
//     Route::get('/contact','contact');
//    });
//new contoller routing define(group method)with name asign
//basic controller(customcontroller)
Route::controller(customcontroller::class)->group(function(){
         Route::get('/','index')->name('welcome');
         Route::get('/about','about')->name('about');
         Route::get('/contact','contact')->name('contact');
       });

    //single action controller routing define
    //    Route::get('/contact', singleAction::class)->name('contact');

    Route::get('/register',[form::class, 'register']);
    Route::post('/register',[form::class, 'register_data']);
    Route::get('/user-view',[form::class, 'user_view']);
    Route::get('/user-delete/{id}',[form::class, 'user_delete'])->name('user-delete');
    Route::get('/edit/{id}',[form::class, 'user_edit'])->name('user-edit');