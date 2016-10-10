 @extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
    <h3 class="block-title">您的位置->管理栏目->添加分区</h3>

                  <!-- Basic with panel-->
                <div class="block-area" id="basic">
                    <h3 class="block-title">添加分区</h3>
                    <div class="tile p-15">
                        <form role="form" action=""  method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">分区名称</label>
                                <input type="name" class="form-control input-sm" id="exampleInputEmail1" placeholder="请输入您预创建分区名">
                            </div>


                            <p>分类树</p>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-sm btn-alt">
                                    <span class="fileupload-new">请选择图片</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="classification"/>
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close close-pic fileupload-exists" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>

                            <p>缩略图</p>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-sm btn-alt">
                                    <span class="fileupload-new">请选择图片</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="thumbnail"/>
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close close-pic fileupload-exists" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>

                            <button type="submit" class="btn btn-sm m-t-10">确认提交</button>
                            <button type="reset" class="btn btn-sm m-t-10">重置</button>
                        </form>
                    </div>
                </div>
                 <div class="col-md-6 m-b-20">
                            <p>Youtube Video (Preview in server NOT local)</p>
                            <video id="youtube1" width="100%" height="100%">
                                <source src="http://www.youtube.com/watch?v=2CvtOUqd84o" type="video/youtube" >
                            </video>
                        </div>
@endsection
