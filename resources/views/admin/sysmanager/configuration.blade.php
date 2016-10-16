@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
   <h3>网站基础管理</h3>
   <br>
   <br>
    <section class="panel">
        <section class="panel">
            <header class="panel-heading custom-tab ">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#home" data-toggle="tab">网站配置</a>
                    </li>
                    <li class="">
                        <a href="#about" data-toggle="tab">友情链接</a>
                    </li>
                    <li class="">
                        <a href="#profile" data-toggle="tab">公告管理</a>
                    </li>
                    <li class="">
                        <a href="#contact" data-toggle="tab">常规管理</a>
                    </li>
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        @foreach($list as $info)
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="configuration/{{ $info->id }}" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">网站标题</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="title" id="inputTitle" placeholder="" value="{{ $info->title }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">网站关键字</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="key" id="inputKey" placeholder="" value="{{ $info->key }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">网站描述</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="descript" id="inputDescript" placeholder="" value="{{ $info->descript }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">网站版权</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="copyRight" id="inputCopy" placeholder="" value="{{ $info->copyright }}">
                                    </div>
                                </div>



                                 <div class="form-group">
                                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">网站开关</label>
                                    <div class="col-lg-10">

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                @if($info->switch==1)
                                                    checked="checked"
                                                @endif
                                                >
                                               开启
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"
                                                 @if($info->switch==0)
                                                    checked="checked"
                                                @endif
                                                >
                                                关闭
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile2" class="col-lg-2 col-sm-2 control-label">网站logo</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="图片加载失败" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 请选择图片</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> 切换</span>
                                                   <input type="file" class="default" name="weblogo"/>
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 清除</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-primary">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endforeach
                    </div>
                    <div class="tab-pane" id="about">
                        <div class="clearfix">
                            <div class="btn-group">
                                <button id="editable-sample_new" class="btn btn-primary">
                                    <b>添加新链接</b>&nbsp;<i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <br><br>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>网站名</th>
                            <th>LOGO</th>
                            <th>URL地址</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slist as $sv)
                        <tr class="">
                            <td>{{ $sv->id }}</td>
                            <td>{{ $sv->webName }}</td>
                            <td><img src="{{ URL('admins/img/logo') }}/{{ $sv->logo }}" alt="" height=30px></td>
                            <td class="center">{{ $sv->url }}</td>
                            <td><button class="btn btn-xs btn-danger" onclick="doDel({{ $sv->id }})">删除</button>
                               <button class="btn btn-xs btn-primary" onclick="window.location='{{URL('/admin/sysmanager')}}/{{ $sv->id }}/edit'">编辑</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>

                    </div>
                    <div class="tab-pane" id="profile">

                        <p>Profile  pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                    </div>
                    <div class="tab-pane" id="contact">Contact</div>
                </div>
            </div>
        </section>
    </section>
@endsection

@section("myscript")
    <script src="{{ asset('admins/js/fileupload.min.js') }}"></script> <!-- File Upload -->

    <!-- 删除链接 -->
    <form action="/sysmanager/" method="post" name="myform" style="display:none;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="_method" value="delete"/>

    </form>
    <script type="text/javascript">
        function doDel(id){
            Modal.confirm({msg: "是否删除此链接？"}).on(function(e){
                if(e){
                   var form = document.myform;
                    form.action = "{{URL('/admin/sysmanager')}}/"+id;
                    form.submit();
                }
              });
        }
    </script>
@endsection