<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>后台登录</title>

        <!-- CSS -->
        <link href="admins/css/bootstrap.min.css" rel="stylesheet">
        <link href="admins/css/form.css" rel="stylesheet">
        <link href="admins/css/style.css" rel="stylesheet">
        <link href="admins/css/animate.css" rel="stylesheet">
        <link href="admins/css/generics.css" rel="stylesheet">
    </head>
    <body id="skin-blur-violate">
        <section id="login">
            <header>
                <h1>后台登录</h1>
            </header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

              @if(session('msg'))
                 <p class="login-box-msg" style="color:red;">{{ session('msg') }}</p>
              @else
                 <p class="login-box-msg">Sign in to start your session</p>
              @endif
            <div class="clearfix"></div>

            <!-- Login -->
            <form class="box tile animated active" id="box-login" action="{{ URL('admin/dologin') }}" method="post">
                <h2 class="m-t-0 m-b-15">进入后台</h2>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" class="login-control m-b-10" placeholder="用户名" name='username'>
                <input type="password" class="login-control" placeholder="密码" name='password'>
                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox">
                        记住密码
                    </label>
                </div>
                <!-- <button class="btn btn-sm m-r-5">登录</button> -->
                <input type="submit" value="登录" class="btn btn-sm m-r-5">
                <small>
                    <a class="box-switcher" data-switch="box-register" href="">忘记密码?</a>

                </small>
            </form>

            <!-- Register -->
            <form class="box animated tile" id="box-register">
                <h2 class="m-t-0 m-b-15">Register</h2>
                <input type="text" class="login-control m-b-10" placeholder="Full Name">
                <input type="text" class="login-control m-b-10" placeholder="Username">
                <input type="email" class="login-control m-b-10" placeholder="Email Address">
                <input type="password" class="login-control m-b-10" placeholder="Password">
                <input type="password" class="login-control m-b-20" placeholder="Confirm Password">

                <button class="btn btn-sm m-r-5">Register</button>

                <small><a class="box-switcher" data-switch="box-login" href="">Already have an Account?</a></small>
            </form>

            <!-- Forgot Password -->
            <form class="box animated tile" id="box-reset">
                <h2 class="m-t-0 m-b-15">Reset Password</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
                <input type="email" class="login-control m-b-20" placeholder="Email Address">

                <button class="btn btn-sm m-r-5">Reset Password</button>

                <small><a class="box-switcher" data-switch="box-login" href="">Already have an Account?</a></small>
            </form>
        </section>

        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="admins/js/jquery.min.js"></script> <!-- jQuery Library -->

        <!-- Bootstrap -->
        <script src="admins/js/bootstrap.min.js"></script>

        <!--  Form Related -->
        <script src="admins/js/icheck.js"></script> <!-- Custom Checkbox + Radio -->

        <!-- All JS functions -->
        <script src="admins/js/functions.js"></script>
    </body>
</html>
