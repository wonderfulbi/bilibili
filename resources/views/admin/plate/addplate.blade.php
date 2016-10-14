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
            <form role="form" action="aplate"  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">分区名称</label>
                    <input type="text" class="form-control input-sm" id="exampleInputEmail1" placeholder="请输入您预创建分区名" name="name">
                </div>
                <button type="submit" class="btn btn-sm m-t-10">确认提交</button>
                <button type="reset" class="btn btn-sm m-t-10">重置</button>
            </form>
        </div>
    </div>
@endsection

