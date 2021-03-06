<?php

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
Route::get('/users', function () {
    return App\User::all();
});
Route::post('submit', function () {
     App\User::create([
       'name'=> $_POST['name'],
         'email' => $_POST['email'],
         'password' => $_POST['pass']
     ]);
     return view('saved');
});