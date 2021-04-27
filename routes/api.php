<?php

use App\Http\Controllers\AcceptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailClothesController;
use App\Http\Controllers\DetailsPieceController;
use App\Http\Controllers\MainclothesController;
use App\Http\Controllers\NotifayController;
use App\Http\Controllers\UserController;
use App\Models\DetailsPiece;

Route::post('Register',[AdminController::class,'Register']);
Route::post('Login',[AdminController::class,'login']);



Route::post('Registeruser',[UserController::class,'Register']);
Route::post('Loginuser',[UserController::class,'login']);








Route::middleware('admin:admin')->group(function(){


    Route::resource('clothes',MainclothesController::class);

    Route::post('upclothes',[MainclothesController::class,'updatee']);




    Route::resource('clothesdetail',DetailClothesController::class);

    Route::post('updetail',[DetailClothesController::class,'updatee']);

    Route::get('getclothes/{id}',[DetailClothesController::class,'indexx']);





    Route::put('updatenum/{id}',[DetailClothesController::class,'upnum']);




    Route::resource('adminok',AcceptController::class);
    Route::get('getuser',[AcceptController::class,'getenyes']);



    Route::resource('delete',DetailsPieceController::class);




    Route::put('updatenoty/{id}',[AcceptController::class,'updatee']);

    Route::resource('adminnoty',NotifayController::class);


    Route::get('getpeice/{id}',[DetailsPieceController::class,'indexx']);

});




Route::middleware('auth:api')->group(function(){


    Route::resource('clothesuser',MainclothesController::class);


    


    Route::get('getclothesuser/{id}',[DetailClothesController::class,'indexx']);

    

    Route::resource('userok',AcceptController::class);



    Route::resource('usernoty',NotifayController::class);
    

    Route::resource('savepiece',DetailsPieceController::class);





    Route::get('getnotyyes',[NotifayController::class,'indexx']);
    Route::get('getnotyopen',[NotifayController::class,'indexxx']);


});













Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
