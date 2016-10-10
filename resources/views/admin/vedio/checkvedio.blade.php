@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
  <!-- Media Player -->
    <div class="block-area">
        <h3 class="block-title">您的位置->视频管理->视频详情</h3>

        <!-- Video -->
        <div class="row">
            <div class="col-md-6 m-b-20">
                <p>Multi-Codec with no JavaScript fallback player - Cross Browser</p>
                <video width="100%" height="100%" id="multiCodec" poster="img/media-player/media-player-poster.jpg" controls="controls" preload="none"> <!-- id could be any according to you -->
                    <!-- MP4 source must come first for iOS -->
                    <source type="video/mp4" src="media/echohereweare.mp4" />
                    <!-- WebM for Firefox 4 and Opera -->
                    <source type="video/webm" src="media/echohereweare.webm" />
                    <!-- OGG for Firefox 3 -->
                    <source type="video/ogg" src="media/echohereweare.ogv" />
                    <!-- Fallback flash player for no-HTML5 browsers with JavaScript turned off -->
                    <object width="100%" height="100%" type="application/x-shockwave-flash" data="media/flashmediaelement.swf">
                            <param name="movie" value="media/flashmediaelement.swf" />
                            <param name="flashvars" value="controls=true&amp;poster=img/media-player/media-player-poster.jpg&amp;file=media/echohereweare.mp4" />
                            <!-- Image fall back for non-HTML5 browser with JavaScript turned off and no Flash player installed -->
                            <img src="img/media-player/media-player-poster.jpg" width="100%" height="100%" alt="Media" title="No video playback capabilities" />
                    </object>
                </video>
            </div>
        </div>
    </div>
     <!-- Tab -->
    <div class="block-area" id="tabs">
        <p>视频基本信息</p>
        <div class="tab-container tile">
            <ul class="nav tab nav-tabs">
                <li class="active"><a href="#home">作者信息</a></li>
                <li><a href="#profile">视频简介</a></li>
                <li><a href="#messages23">视频评论</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <p>Duis eleifend sapien nec nisl semper, vitae accumsan arcu feugiat. Suspendisse potenti. Aenean vestibulum massa ut congue accumsan. Donec sapien nulla, sollicitudin eu odio fringilla, vulputate ornare quam. Morbi congue in sem non congue. Vivamus diam velit, lacinia eu lorem ac, pellentesque lobortis arcu. Morbi congue dolor sed arcu imperdiet posuere.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel enim non dui fermentum sollicitudin. In id metus dolor. Suspendisse dapibus, metus vitae posuere gravida, odio orci dictum purus, vitae lobortis elit lacus id sem. Vestibulum ut rhoncus dui. Sed congue vestibulum fermentum. Nulla imperdiet quam et ipsum lobortis laoreet. Phasellus in lectus ligula. Suspendisse potenti. Aliquam massa nulla, congue ut quam sed, scelerisque laoreet massa. Ut ultrices aliquet suscipit.</p>
                </div>
                <div class="tab-pane" id="profile">
                    <p>Quisque hendrerit lorem lectus, id vestibulum nibh facilisis lobortis. Vestibulum interdum massa rhoncus lorem vehicula faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin convallis venenatis pulvinar. In hac habitasse platea dictumst. Aliquam quis ipsum commodo, venenatis sapien at, ullamcorper neque. Integer vitae lacus volutpat, molestie elit eget, sollicitudin erat. Aliquam ac nisl ligula. Etiam vulputate sodales elit, et interdum mauris semper eu. Nam rhoncus nibh quis quam ullamcorper volutpat. Nam sed ultricies libero, a commodo lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque sed tincidunt turpis. Vivamus blandit, libero sit amet laoreet convallis, enim nisl tristique dolor, et fringilla arcu ipsum eu quam.</p>
                </div>
                <div class="tab-pane" id="messages23">
                    <p>Duis eleifend sapien nec nisl semper, vitae accumsan arcu feugiat. Suspendisse potenti. Aenean vestibulum massa ut congue accumsan. Donec sapien nulla, sollicitudin eu odio fringilla, vulputate ornare quam. Morbi congue in sem non congue. Vivamus diam velit, lacinia eu lorem ac, pellentesque lobortis arcu. Morbi congue dolor sed arcu imperdiet posuere.</p>

                    <p>Duis eleifend sapien nec nisl semper, vitae accumsan arcu feugiat. Suspendisse potenti. Aenean vestibulum massa ut congue accumsan. Donec sapien nulla, sollicitudin eu odio fringilla, vulputate ornare quam. Morbi congue in sem non congue. Vivamus diam velit, lacinia eu lorem ac, pellentesque lobortis arcu. Morbi congue dolor sed arcu imperdiet posuere.</p><p>Duis eleifend sapien nec nisl semper, vitae accumsan arcu feugiat. Suspendisse potenti. Aenean vestibulum massa ut congue accumsan. Donec sapien nulla, sollicitudin eu odio fringilla, vulputate ornare quam. Morbi congue in sem non congue. Vivamus diam velit, lacinia eu lorem ac, pellentesque lobortis arcu. Morbi congue dolor sed arcu imperdiet posuere.</p><p>Duis eleifend sapien nec nisl semper, vitae accumsan arcu feugiat. Suspendisse potenti. Aenean vestibulum massa ut congue accumsan. Donec sapien nulla, sollicitudin eu odio fringilla, vulputate ornare quam. Morbi congue in sem non congue. Vivamus diam velit, lacinia eu lorem ac, pellentesque lobortis arcu. Morbi congue dolor sed arcu imperdiet posuere.</p><p>Duis eleifend sapien nec nisl semper, vitae accumsan arcu feugiat. Suspendisse potenti. Aenean vestibulum massa ut congue accumsan. Donec sapien nulla, sollicitudin eu odio fringilla, vulputate ornare quam. Morbi congue in sem non congue. Vivamus diam velit, lacinia eu lorem ac, pellentesque lobortis arcu. Morbi congue dolor sed arcu imperdiet posuere.</p>
                </div>
            </div>
        </div>
    </div>
@endsection