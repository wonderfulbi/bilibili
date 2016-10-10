<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',"modelController@index");


Route::get("/admin",function(){
    return view("admin.index.index");
});

Route::get("/admin/plate",function(){
    return view("admin.plate.plate");
});

Route::get("/admin/addplate",function(){
    return view("admin.plate.addplate");
});

Route::get("/admin/vedio",function(){
    return view("admin.vedio.vedio");
});

Route::get("/admin/checkvedio",function(){
    return view("admin.vedio.checkvedio");
});