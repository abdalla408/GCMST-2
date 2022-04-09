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
Route::group(['middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]] ,
    function(){ //...
        Route::get('/', function () {
            return view('index');
});


});
Route::get('test',function (){
    return view('Erorr.index');
});
Route::get('test2',function (){
    return view('test.index');
});
Route::get('admin', function (){
    return view('admin.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
