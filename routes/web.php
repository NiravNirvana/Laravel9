<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/page1', function () {
    $name="Page1 is loaded";
    
    return view('page1',["key"=>$name]);
});


Route::get('/page2', function () {
    $name="Page2 is loaded with compact";
   
    return view('page2',compact('name'));
});
