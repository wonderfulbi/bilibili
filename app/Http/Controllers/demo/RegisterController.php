<?php

namespace App\Http\Controllers\demo;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;//使用验证码的类

class RegisterController extends Controller
{
    //注册表单
    public function register()
    {
        return view('register');
    }


    //登录表单
    public function login()
    {
        return view('login');
    }
    //执行注册
    // public function register(Requests $request)
    // {
    //     //获取表单值
    //     $name = $request->input('uname');
    //     $password = $request->input('password');


    // }

    // 执行登录
    public function dologin(Request $request)
    {
            // dd($request);
            $mycode = session()->get("code");
            dd($mycode);
            if($mycode!=$request->input('code')){
                return back()->with("msg","验证码错误");//后退
                // session()->flash("msg","验证码错误");//写入错误信息
                // return redirect("admin/login");//重定向

            }

        // dd($request);
        $name = $request->input('uname');
        $password = $request->input('password');
        $ob = \DB::table('wb_user')->where('userName',$name)->first();
        if($ob){
            if($ob->passWord==$password){
                session()->set("adminuser",$ob);

                return redirect("/");
            }
            return back()->with("msg","用户名或密码错误");
        }
        return back()->with("msg","用户名或密码错误");
    }

    //验证码
    public function captcha($tmp)
    {
                //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        //
        session()->set('code',$phrase);
        //生成图片
        // header("Cache-Control: no-cache, must-revalidate");
        // header('Content-Type: image/jpeg');
        // $builder->output();
        // exit;

        return response($builder->output())->header('Content-Type','image/jpeg');
    }

    public function logout()
    {
        //忘记session
        session()->forget("adminuser");
        //重定向
        return redirect("/login");
    }
}
