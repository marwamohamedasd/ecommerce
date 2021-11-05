<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

  //note that prefix is admin file route
//                                                       /*guard*/
Route::group(['namespace'=> 'Dashboard', 'middleware' => 'auth:admin' ] ,function() {


    Route::get('/',[\App\Http\Controllers\Dashboard\DashboardController::class,'index'])->name('admin.dashboard');


});



Route::group(['namespace'=> 'Dashboard', 'middleware' => 'guest:admin'] ,function() {

Route::get('login',[\App\Http\Controllers\Dashboard\loginController::class,'login'])->name('admin.login');
Route::post('login',[\App\Http\Controllers\Dashboard\loginController::class,'postlogin'])->name('admin.post.login');

});




/*
 *
 *
 *هنا روحنا ضفنا  prefix admin في service provider  علشان يطبق علي الكل
 *
Route::group(['namespace'=> 'Dashboard'] ,function() {


Route::get('users',function (){



    return 'inadmin';
});

});*/
