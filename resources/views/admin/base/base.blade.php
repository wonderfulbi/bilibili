<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title> @yield("title")</title>

        <!-- CSS -->
        <link href="{{ asset('admins/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/form.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/calendar.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('admins/css/generics.css') }}" rel="stylesheet">
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
            <a href="" id="menu-toggle"></a>
            <a class="logo pull-left" href="index.html">B站后台管理列表</a>

            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                        <a data-drawer="messages" class="drawer-toggle" href="">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span>Updates</span>
                        </a>
                    </div>



                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>

                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>

        <div class="clearfix"></div>

        <section id="main" class="p-relative" role="main">

            <!-- Sidebar -->
            <aside id="sidebar">

                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            <img class="profile-pic animated" src="{{ asset('admins/img/profile-pic.jpg') }}" alt="">
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="">个人中心</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">邮件</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="">设置</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="{{ URL('admin/logout') }}">退出</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0">聂俊威</h4>
                        @后台管理员
                    </div>

                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>


                </div>

                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <a class="sa-side-home" href="{{ URL('admin') }}">
                            <span class="menu-item">后台主页</span>
                        </a>
                    </li>
                   <!--  <li>
                        <a class="sa-side-typography" href="typography.html">
                            <span class="menu-item">Typography</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-widget" href="content-widgets.html">
                            <span class="menu-item">Widgets</span>
                        </a>
                    </li> -->
                    <li class="dropdown">
                        <a class="sa-side-table">
                            <span class="menu-item">分区管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="{{ URL('admin/plate') }}">分区列表</a></li>
                            <li><a href="{{ URL('admin/addplate') }}">添加分区</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-form">
                            <span class="menu-item">系统管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="{{ URL('admin/configuration') }}">网站配置</a></li>
                            <li><a href="{{ URL('admin/friendlylink') }}">友情链接</a></li>
                            <li><a href="form-components.html">常规管理</a></li>
                            <li><a href="form-examples.html">公告管理</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-ui" href="">
                            <span class="menu-item">视频管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="{{ URL('admin/shipin') }}">视频列表</a></li>
                            <li><a href="{{ URL('admin/garbage') }}">回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sa-side-chart" href="charts.html">
                            <span class="menu-item">Charts</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-folder" href="file-manager.html">
                            <span class="menu-item">File Manager</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-calendar" href="calendar.html">
                            <span class="menu-item">Calendar</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-page" href="">
                            <span class="menu-item">Pages</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="profile-page.html">Profile Page</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                </ul>

            </aside>

            <!-- Content -->
            <section id="content" class="container">


                 @yield("content")

            </section>

            <!-- Older IE Message -->
            <!--[if lt IE 9]>
                <div class="ie-block">
                    <h1 class="Ops">Ooops!</h1>
                    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                    <ul class="browsers">
                        <li>
                            <a href="https://www.google.com/intl/en/chrome/browser/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Google Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Mozilla Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com/computer/windows">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://safari.en.softonic.com/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                                <img src="img/browsers/ie.png" alt="">
                                <div>Internet Explorer(New)</div>
                            </a>
                        </li>
                    </ul>
                    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
                </div>
            <![endif]-->
        </section>


       <!-- system modal start -->
      <div id="ycf-alert" class="modal">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h5 class="modal-title"><i class="fa fa-exclamation-circle"></i> [Title]</h5>
            </div>
            <div class="modal-body small">
              <p>[Message]</p>
            </div>
            <div class="modal-footer" >
              <button type="button" class="btn btn-primary ok" data-dismiss="modal">[BtnOk]</button>
              <button type="button" class="btn btn-default cancel" data-dismiss="modal">[BtnCancel]</button>
            </div>
          </div>
        </div>
      </div>
      <!-- system modal end -->

        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="{{ asset('admins/js/jquery.min.js') }}"></script> <!-- jQuery Library -->
        <script src="{{ asset('admins/js/jquery-ui.min.js') }}"></script> <!-- jQuery UI -->
        <script src="{{ asset('admins/js/jquery.easing.1.3.js') }}"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

        <!-- Bootstrap -->
        <script src="{{ asset('admins/js/bootstrap.min.js') }}"></script>

        <!-- Charts -->
        <script src="{{ asset('admins/js/charts/jquery.flot.js') }}"></script> <!-- Flot Main -->
        <script src="{{ asset('admins/js/charts/jquery.flot.time.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset('admins/js/charts/jquery.flot.animator.min.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset('admins/js/charts/jquery.flot.resize.min.js') }}"></script> <!-- Flot sub - for repaint when resizing the screen -->

        <script src="{{ asset('admins/js/sparkline.min.js') }}"></script> <!-- Sparkline - Tiny charts -->
        <script src="{{ asset('admins/js/easypiechart.js') }}"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="{{ asset('admins/js/charts.js') }}"></script> <!-- All the above chart related functions -->

        <!-- Map -->
        <script src="{{ asset('admins/js/maps/jvectormap.min.js') }}"></script> <!-- jVectorMap main library -->
        <script src="{{ asset('admins/js/maps/usa.js') }}"></script> <!-- USA Map for jVectorMap -->

        <!--  Form Related -->
        <script src="{{ asset('admins/js/icheck.js') }}"></script> <!-- Custom Checkbox + Radio -->

        <!-- UX -->
        <script src="{{ asset('admins/js/scroll.min.js') }}"></script> <!-- Custom Scrollbar -->

        <!-- Other -->
        <script src="{{ asset('admins/js/calendar.min.js') }}"></script> <!-- Calendar -->
        <script src="{{ asset('admins/js/feeds.min.js') }}"></script> <!-- News Feeds -->


        <!-- All JS functions -->
        <script src="{{ asset('admins/js/functions.js') }}"></script>


       <!-- modal实现弹出框和确认框效果 -->
        <script src="{{ asset('admins/bootstrap/js/ws-modal-alert-confirm.js') }}"></script>


        @section("myscript")

        @show


         @if(session("err"))
          <script type="text/javascript">
            Modal.alert({msg: "{{session('err')}}",title: ' 信息提示',btnok: '确定',btncl:'取消'});
        </script>
        @endif

    </body>
</html>
