@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
   <!-- Table Hover -->
    <div class="block-area" id="tableHover">
        <h3 class="block-title">您的位置->管理栏目->修改分区</h3>
         <!-- Basic with panel-->
        <div class="block-area" id="basic">
            <h3 class="block-title">修改分区</h3>
            <div class="tile p-15">

                <form role="form" action="{{ asset('admin/update/') }}/{{ $vo->id }}"  method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">分区名称</label>
                        <input type="text" class="form-control input-sm" id="exampleInputEmail1"  name="name" value="{{ $vo->name }}">
                    </div>
                    <button type="submit" class="btn btn-sm m-t-10">确认修改</button>
                    <button type="reset" class="btn btn-sm m-t-10">重置</button>
                </form>
            </div>
        </div>
    </div>
@endsection