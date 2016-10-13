<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    //执行登录
    public function dologin(Request $request)
    {
        // dd($request);
        $name = $request->input('username');
        $password = $request->input('password');
        $ob = \DB::table('wb_user')->where('userName',$name)->first();
        if($ob){
            if($ob->passWord==$password && $ob->auth!=0){
                session()->set("adminuser",$ob);

                return view("admin/index/index");
            }
            return back()->with("msg","用户名或密码错误");
        }
        return back()->with("msg","用户名或密码错误");
    }

    public function logout()
    {
        //忘记session
        session()->forget("adminuser");
        //重定向
        return redirect("admin");
    }

}
