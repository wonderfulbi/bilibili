<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="anthor" content="Hallmader">
    <meta name="description" content="bilibili是国内知名的视频弹幕网站，这里有最及时的动漫新番，最棒的ACG氛围，最有创意的Up主。大家可以在这里找到许多欢乐。">
    <meta name="keywords" content="B站,弹幕,字幕,AMV,MAD,MTV,ANIME,动漫,动漫音乐,游戏,游戏解说,ACG,galgame,动画,番组,新番,初音,洛天依,vocaloid">
    <title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
    <!-- <link rel="shortcut icon" href="http://static.hdslb.com/images/favicon.ico"> -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="stylesheets/screen.css">
</head>

<body>
    <!--顶部信息-->
    <header class="navbar">
        <div class="navbar-top-mask">
            <div class="mask-blur"></div>
            <div class="mask-wrap"></div>
        </div>
        <div class="inner">
            <nav class="navbar-top">
                <ul class="navbar-top-list">
                    <li>
                        <a href="javascript:;">主站</a>
                    </li>

                    <li>
                        <a href="javascript:;">论坛</a>
                    </li>

                    <li>
                        <a href="javascript:;">商城</a>
                    </li>

                </ul>
                <div class="inner-right">
                    <ul>
                        <li class="login">
                            <a href="javascript:;">登录<span>|</span>注册</a>
                        </li>
                        <li class="contribute">
                            <a href="javascript:;">投稿</a>
                            <ul class="contribute-panel" id="contribute-panel">
                                <li>
                                    <span class="contribute-icon1"></span>
                                    <a href="javascript:;">视频投稿</a>
                                </li>
                                <li>
                                    <span class="contribute-icon2"></span>
                                    <a href="javascript:;">投稿管理</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="search">
                <form action="/search" method="post">
                    <input type="text" name="search" placeholder="尻夫♂的爱">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="submit" id="submit" value="">
                </form>
                <div class="ranking">
                    <a href="javascript:;">排行榜</a>
                </div>
            </div>

            <div class="header-title-hoverbox">
                <a href="/" class="logo" style="background-image: url(&quot;http://i0.hdslb.com/bfs/archive/3e3d17f3a30f49ae1716a595fed12b621e19ab41.png&quot;);"></a>
            </div>
            <a class="header-title">拜年祭预告抢先看！</a>
            <nav class="kind-list">
                <ul class="navlist-box">
                    <li class="home">
                        <a href="/">首页</a>
                    </li>
                    <li class="list-panel">
                        <i>203</i>
                        <a href="javascript:;">广告</a>
                    </li>
                    @foreach($typeList as $type)
                        <li class="list-panel">
                            <i>203</i>
                            <a href="{{ $type->link }}">{{ $type->name }}</a>
                            <ul class="childlist-box">
                            @foreach($tList as $tlist)
                                @if($tlist->tid == $type->id)
                                <li>
                                    <a href="{{ $tlist->link }}">{{ $tlist->name }}
                                        <em></em>
                                    </a>
                                </li>

                                @endif
                            @endforeach
                            </ul>
                        </li>
                    @endforeach

                    <!-- <li class="list-panel">
                        <span></span>

                    </li> -->
                    <!-- <li class="list-panel">
                        <span></span>

                    </li> -->
                    <li class="list-panel nav-gif" title="miku">
                    </li>
                    <li class="list-panel nav-iphone">
                        <div class="mobile-box">
                            <img src="http://static.hdslb.com/images/base/app-qrcode.png" alt="">
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--主内容部分-->
    <section class="main">
        <!--定宽度居中显示————针对不同屏幕由@media自适应-->
        <div class="main-inner">
            <!--第一部分————首页推荐-->
            <div class="part1">
                <div class="carousel">
                    <ul class="carousel-list">
                        @foreach($lunbo as $lunList)
                            <li>
                                <a href="{{ $lunList->link }}">
                                    <img src="{{ $lunList->image }}" alt="{{ $lunList->alt }}" title="{{ $lunList->title }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <nav class="carousel-ctrl">
                        <ul>

                            @for($a = 1;$a<= count($lunbo);$a++)
                                @if($a == 1)
                                    <li class="active">
                                        <a href=""></a>
                                    </li>
                                @else
                                    <li>
                                        <a href=""></a>
                                    </li>
                                @endif
                            @endfor

                        </ul>
                        <span class="carousel-title"></span>
                    </nav>
                </div>
                <!-- 热门视频遍历 条件：播放量-->
                <div class="indextop-video">
                    <ul class="indextop-video-listpanel">
                        @foreach($hotList as $v)
                        <li class="indextop-video-list">
                            <a href="{{ $v->link }}">
                                <div class="mask"></div>
                                <div class="video-img"><img src="{{ $v->image }}" alt="test"></div>
                                <div class="info">
                                    <h2>【{{ $v->name }}】{{ $v->title }}</h2>
                                    <p>up主：{{ $v->name }}</p>
                                    <p>播放：{{ $v->count }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--广告-->
            <script type="text/javascript" src="js/adlunbo.js"></script>
            <a name="ad"></a>
            <div class="inner-section part-animate">
                <div class="box-left" style="width:100%"">
                    <header class="part-animate-top">
                        <h2><i><img src="images/plateimg/b_ad.png" alt=""></i>广告</h2>

                        <div class="btn-right">
                            <div class="btn-more">
                                <a href="javascript:;">更多</a>
                            </div>
                        </div>
                    </header>
                </div>
                <div style="width:100%;text-align:left">
                    <DIV id="demo" style="OVERFLOW: hidden; WIDTH: 1160px; COLOR: #ffffff; HEIGHT: 140px; margin:0 auto;" onmousemove="MoveDiv(event);" onmouseout="MoveOutDiv();">
                        <div id="demo1" style="width:200%;">
                            <TABLE cellSpacing=0 cellPadding=0>
                                <TBODY>
                                    <TR vAlign=top>
                                        <TD vAlign=top noWrap>
                                            <DIV align=right>
                                                @for($adNum = 0;$adNum<=7;$adNum++)
                                                    @if($adNum <= (count($adList)-1))
                                                        <img src="images/{{ $adList[$adNum]->adImage }}" style="width:286px;height:140px;border-radius:5px"  alt="">
                                                        <!-- <img src="images/adimg/c6f7339ea957882229dc4d3ac8a8cec3.jpg" style="width:286px;height:140px;border-radius:5px"  alt=""> -->
                                                    @else
                                                        <img src="images/1320936267667-3668.gif" style="width:286px;height:140px;border-radius:5px"  alt="">
                                                    @endif
                                                @endfor
                                                @for($adNum = 0;$adNum<=7;$adNum++)
                                                    @if($adNum <= (count($adList)-1))
                                                        <img src="images/{{ $adList[$adNum]->adImage }}" style="width:286px;height:140px;border-radius:5px"  alt="">
                                                    @else
                                                        <img src="images/443573_20141221175143645200_1.jpg" style="width:286px;height:140px;border-radius:5px"  alt="">
                                                    @endif
                                                @endfor
                                            </DIV>
                                        </TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </div>
                        <div id="demo2" style="width:200%;"></div>
                    </DIV>
                </div>
            </div>
            <script type="text/javascript">
             document.getElementById("demo2").innerHTML = document.getElementById("demo1").innerHTML;
             MyMar=setInterval(Marquee,speed);
            </script>
            <!-- 分区遍历 -->
            <span style="display:none;">{{$tnum=0}}</span>
            @foreach($typeList as $type)
                <a name="{{ $type->id }}">
                <div class="inner-section part{{ $tnum+1 }} part-animate" >
                    <div class="box-left">
                        <header class="part-animate-top">
                            <h2><i><img src="images/plateimg/{{ $type->typeImage }}" alt=""></i><a href="{{ $type->link }}">{{ $type->name }}</a></h2>

                            <div class="btn-right">
                                <div class="btn-reset">
                                    <a href="javascript:;"></a>
                                    <span><strong>2967</strong>条新动态</span>
                                </div>
                                <div class="btn-more">
                                    <a href="{{ $type->link }}">更多</a>
                                </div>
                            </div>
                        </header>
                        <div class="video-list">
                            <ul>

                            <!-- 遍历分区内视频 -->
                            @foreach($list[$tnum] as $v)

                                    <li>

                                        <div class="image-box">
                                            <a class="image-box" href="{{ $v->link }}">
                                            <img src="{{ $v->image }}" alt="">
                                            </a>
                                            <div class="video-time">60:00</div>
                                        </div>
                                        <a class="image-title" href="{{ $v->link }}">
                                            <p class="title">
                                                {{ $v->title }}
                                            </p>
                                            <p class="click-num">
                                                <span class="play">
                                                    {{ $v->count }}万
                                                </span>
                                                <span class="barrage">
                                                    {{ $v->commentSum }}万
                                                </span>
                                            </p>
                                        </a>
                                    </li>


                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- 遍历排行 -->
                    <aside>
                        <header class="part-animate-aside">
                            <ul>
                                <h2>排行</h2>
                            <li class="live-active live-change">
                                <a>三日</a>
                            </li>
                            <li class="live-change">
                                <a>一周</a>
                            </li>

                            </ul>
                        </header>
                        <div class="carousel-animate-box">
                            <span style="display:none;">{{$num=0}}</span>
                            <div class="rank-box">
                                <ul>
                                    @foreach($listP[$tnum] as $p)
                                            <li>
                                                <div class="rank">{{ $num+=1 }}</div>

                                                <a href="{{ $p->link }}" class="rank-top">
                                                @if($num==1)
                                                    <img src="{{ $p->image }}" alt="">
                                                @endif
                                                </a>
                                                <a href="{{ $p->link }}" class="rank-top-info">
                                                    <p class="rank-id">
                                                        <span class="rank-name">
                                                          【{{ $p->name }}】 {{ $p->title }}
                                                        </span>
                                                        <span class="rank-num">{{ $p->count }}</span>
                                                    </p>
                                                </a>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="rank-box">
                                <span style="display:none;">{{$num=0}}</span>
                                <ul>
                                    @foreach($listP[$tnum] as $p)
                                            <li>
                                                <div class="rank">{{ $num+=1 }}</div>

                                                <a href="{{ $p->link }}" class="rank-top">
                                                @if($num==1)
                                                    <img src="{{ $p->image }}" alt="">
                                                @endif
                                                </a>
                                                <a href="{{ $p->link }}" class="rank-top-info">
                                                    <p class="rank-id">
                                                        <span class="rank-name">
                                                          【{{ $p->name }}】q {{ $p->title }}
                                                        </span>
                                                        <span class="rank-num">{{ $p->count }}</span>
                                                    </p>
                                                </a>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="checkmore">
                            <span>查看更多</span>
                        </div>
                    </aside>
                </div>
                <!-- 如果是番剧分区 就遍历番剧具体内容 -->
                @if($type->name == "番剧")
                    <!--第五部分-2————番剧更新列表-->
                    <div class="part-animate-list">
                        <div class="list-left">
                            <header>
                                <ul>
                                    @for($i = 0;$i<=6;$i++)
                                        <li class="list-controller" id="day{{ $i }}">
                                            <div class="weekDay-active">
                                                <i class="icon"></i>
                                                <span>周{{ $arr[$i] }}</span>
                                            </div>
                                            <span class="weekDay">{{ $arr[$i] }}</span>
                                        </li>
                                    @endfor

                                </ul>
                                <a href="javascript:;" class="list-btn">
                                    <span>新番放送表</span>
                                </a>
                            </header>
                            @for($j = 1;$j<=7;$j++)
                                <div class="list-box-{{ $j }} list-box">
                                    <ul>
                                        @foreach($vList as $vlist)
                                        <!-- 周内播放的肯定是番剧 -->
                                            @if($vlist->week == $j)
                                                <li>
                                                    <div class="img-box">
                                                        <a href="{{ $vlist->link }}">
                                                        <img src="{{ $vlist->image }}" alt="">
                                                        </a>
                                                    </div>
                                                    <span class="title"><a href="{{ $vlist->link }}">{{ $vlist->title }}</a></span>
                                                    <span class="episodes">更新至<i>4话</i></span>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            @endfor
                        </div>
                        <aside>
                        <!-- 固定推荐三部已完结番剧 -->
                            <div class="carousel-box">
                                <ul class="carousel-panel">
                                    @foreach($vList as $vlist)
                                        @if($vlist->tid == $type->id && $vlist->top == 1 && $vlist->week == 0)
                                        <li class="carousel-img">
                                            <a href="{{ $vlist->link }}">
                                                <img src="/images/{{ $vlist->image }}" alt="">
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach

                                </ul>


                                <div class="carousel-box-ctrl">

                                    <ul>
                                        <span style="display:none;">{{$num=1}}</span>
                                        @foreach($vList as $vlist)
                                            @if($vlist->tid == $type->id && $vlist->week == 0 && $vlist->top == 1)
                                                @if($num == 1)
                                                   <li data-name="{{ $vlist->title }}" data-index="0" class="active">
                                        </li>
                                                @else
                                                    <li data-name="{{ $vlist->title }}" data-index="{{ $num-1 }}">
                                        </li>
                                                @endif
                                                    <span style="display:none;">{{$num++}}</span>
                                            @endif
                                        @endforeach
                                        <span style="display:none;">{{$num=0}}</span>

                                    </ul>

                                    <span class="animate-name">
                                        {{ $vList[0]->title }}
                                    </span>
                                </div>
                            </div>
                            <div class="finish-list">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <!-- 随即推荐四部已完结番剧 -->
                            <div class="other-finish">
                                <ul>
                                    <!--数组为空的时候遍历了一次，所以次数为4-1次-->
                                    @for($i=1;count($repeat)<=3;$i++)
                                        <span style="display:none">
                                            {{ $sum = rand(0,count($overList[$tnum])-1) }}
                                        </span>
                                        @if(!in_array($sum,$repeat))
                                            <li>
                                                <div class="preview">
                                                    <img src="/images/{{ $overList[$tnum][$sum]->image }}" alt="">
                                                    <p>全25话</p>
                                                </div>
                                                <a href="javascript:;">{{ $overList[$tnum][$sum]->title }}</a>
                                                <div style="display:none">{{ $repeat[] = $sum }}</div>
                                            </li>
                                        @endif
                                    @endfor
                                </ul>
                            </div>
                        </aside>
                    </div>
                 @endif

                <span style="display:none;">{{$tnum++}}</span>
                </a>
            @endforeach

            <div class="sidebar">
                <div class="sidebar-box">
                    <ul class="sidebar-list">
                        <a class="liebiao" href="#ad" draggable="true"><li draggable="true">广告</li></a>
                    @foreach($typeList as $type)

                        <a class="liebiao" href="#{{ $type->id }}" draggable="true"><li draggable="true" id="list{{ $tnum+1 }}">{{ $type->name }}</li></a>

                    @endforeach
                        <li class="sort">排序</li>
                    </ul>
                    <div class="sidebar-line"></div>
                    <div class="sidebar-arrow">
                    </div>
                    <div class="sidebar-gif">
                        <img src="http://i1.hdslb.com/u_user/nav_float/download.png" alt="">
                    </div>
                </div>
                <div class="dragtip"></div>
            </div>
        </div>
        <!--侧边栏内容-->
        <!--主内容至此全部结束-->
    </section>
    <!--页脚信息-->
    <footer>
        <div class="inner">
            <div class="footer-list-left">
                <h2>Bilibili</h2>
                <ul>
                    <li><a href="javascript:;">关于我们</a></li>
                    <li><a href="javascript:;">友情链接</a></li>
                    <li><a href="javascript:;">联系我们</a></li>
                    <li><a href="javascript:;">加入我们</a></li>
                </ul>
                <a href="http://bilibili2233.taobao.com/">
                    <img src="http://static.hdslb.com/images/base/b-taobao.png" alt="">
                </a>
            </div>
            <div class="footer-list-middle">
                <h2>帮助</h2>
                <ul>
                    <li><a href="javascript:;">帮助中心</a></li>
                    <li><a href="javascript:;">补档认领处</a></li>
                    <li><a href="javascript:;">侵权申诉</a></li>
                    <li><a href="javascript:;">建议/BUG汇报</a></li>
                </ul>
            </div>
            <div class="footer-list-right">
                <h2>传送门</h2>
                <ul>
                    <li><a href="javascript:;">高级弹幕</a></li>
                    <li><a href="javascript:;">名人堂</a></li>
                    <li><a href="javascript:;">活动专题页</a></li>
                    <li><a href="javascript:;">资讯</a></li>
                    <li><a href="javascript:;">壁纸站</a></li>
                    <li><a href="javascript:;">分院帽计划</a></li>
                    <li><a href="javascript:;">活动中心</a></li>
                </ul>
                <div class="icon-mobile">
                    <p><i><img src="http://static.hdslb.com/images/base/app-qrcode.png" alt=""></i></p>
                    <a href="javascript:;">手机端下载</a>
                </div>
                <div class="icon-weibo">
                    <p><i><img src="http://static.hdslb.com/images/base/weibo-qrcode.png" alt=""></i></p>
                    <a href="javascript:;">新浪微博</a>
                </div>
                <div class="icon-weixin">
                    <p><i><img src="http://static.hdslb.com/ad-images/wx.jpg" alt=""></i></p>
                    <a href="javascript:;">官方微信</a>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright-img">
                </div>
                <ul>
                    <li>广播电视节目制作经营许可证：（沪）字第1248号 </li>
                    <li>网络文化经营许可证：沪网文[2013]0480-056号</li>
                    <li>信息网络传播视听节目许可证：0910417</li>
                    <li><a href="javascript">上海互联网举报中心</a></li>
                </ul>
                <ul>
                    <li>互联网ICP备案：沪ICP备13002172号-3</li>
                    <li>沪ICP证：沪B2-20100043</li>
                    <li>违法不良信息举报邮箱：help@bilibili.com</li>
                    <li>违法不良信息举报电话：4000233233 转 3</li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="main-mask">
    </div>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="html5shiv.js"></script>
        <script type="text/javascript" src="respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.dragsort-0.5.2.min.js"></script>

    <script type="text/javascript">
        $(".sidebar-list").dragsort();
    </script>
</body>

</html>
