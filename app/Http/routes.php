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

//网站前台登录和注册
// @auth huangzhen
Route::get('/register','demo\RegisterController@register');// 进入注册页面
Route::post('/doregister','demo\RegisterController@doregister');// 前台注册执行

Route::get('/login','demo\RegisterController@login');//进入登录页面
Route::post('/dologin','demo\RegisterController@dologin');// 前台登录执行
Route::get("/demo/captcha/{tmp}","demo\RegisterController@captcha");//验证码

Route::post('/search','demo\MySearchController@index');//搜索


//个人中心
//@auth huangzhen











//网站主题页面
//@auth mayajun
Route::get('/',"modelController@index");  //网站首页
// Route::get("vedio/{}");//视频分类页
// Route::get("");//视频播放页











//后台登录
//@auth huangzhen
// Route::get('/admin','admin\LoginController@login');// 后台后台登录页面
Route::get("admin",function(){
    return view("admin.login");
});       // 后台后台登录页面
Route::any('/admin/dologin','admin\LoginController@dologin');// 后台执行登录

//后台界面 需要登录才能访问的内容
Route::group(["prefix"=>"admin","middleware"=>"myauth"],function(){

    //网站后台首页
    //@auth huangzhen
    // Route::get("/","admin\IndexController@index");  //网站后台首页
    Route::get("logout","admin\LoginController@logout");//执行退出

    //分区管理和分区增加
    //@auth niejunwei
    Route::get("plate","admin\plate\PlateController@index");//分区管理页面
    Route::get("addplate","admin\plate\PlateController@create"); //跳转后台分区添加页面
    Route::delete("del/{id}","admin\plate\PlateController@destroy");//删除分区
    Route::post("aplate","admin\plate\PlateController@store"); //分区添加方法
    Route::post("sear","admin\plate\PlateController@find"); //分区页面的内容搜索

    Route::get("edit/{id}","admin\plate\PlateController@edit");//跳转到分区修改表单


    Route::get("sub/{id}","admin\plate\SubController@create");//跳转子模块添加表单
    Route::post("addsub/{id}","admin\plate\SubController@store");//执行添加写入
    Route::delete("delsub/{id}","admin\plate\SubController@destroy");//删除分区
    Route::get("editsub/{id}","admin\plate\SubController@edit");//跳转到分类修改表单
    Route::post("updatesub/{id}","admin\plate\SubController@update");//执行修改

    //视频管理
    //@auth niejunwei
    Route::get("shipin/{id?}","admin\shipin\ShipinController@index"); //跳转后台视频管理页面
    Route::get("checkvedio","admin\shipin\ShipinController@index2");//跳转后台视频查看页面
    Route::get("garbage","admin\shipin\ShipinController@index3"); //跳转视频回收站页面


    //评论管理
    //@auth niejunwei




    //网站配置
    //@auth niejunwei
    Route::get("configuration","admin\sysmanager\SysmanagerController@index");//网站配置
    Route::put("configuration/{id?}","admin\sysmanager\SysmanagerController@update");//网站配置修改



    Route::get("friendlylink","admin\sysmanager\SysmanagerController@index2");//友情链接
    Route::post("friendlylink","admin\sysmanager\SysmanagerController@index2");//友情链接
    Route::delete("sysmanager/{id}","admin\sysmanager\SysmanagerController@destroy")//删除友情链接

    //用户管理
    //@auth mayajun
    Route::get("user","admin\usermanager\UserController@index"); //用户列表
    Route::get("user","admin\usermanager\UserController@index2");//管理员增加

});
