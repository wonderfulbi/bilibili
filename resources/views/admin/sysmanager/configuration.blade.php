@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
   <h3>网站配置</h3>
   <br>
   <br>
    <section class="panel">
         @foreach($list as $info)
         <div class="panel-body">
            <form class="form-horizontal" role="form" method="post" action="configuration/{{ $info->id }}">
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
                                   <input type="file" class="default" />
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
    </section>
@endsection

@section("myscript")
    <script src="{{ asset('admins/js/fileupload.min.js') }}"></script> <!-- File Upload -->
@endsection