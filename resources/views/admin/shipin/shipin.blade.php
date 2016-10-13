@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
<!-- Table Hover -->
    <div class="block-area" id="tableHover">
        <h3 class="block-title">您的位置->视频管理->视频列表</h3>
        <div class="table-responsive overflow">
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>序号</th>
                        <th>所在分区</th>
                        <th>视频作者</th>
                        <th>视频名称</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($list as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $tlist[0] }}</td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->title }}</td>
                        <td>
                            <a href="{{ URL('admin/garbage') }}">加入回收站 </a>
                        </td>
                        <td>
                            <a href="{{ URL('admin/checkvedio') }}">查看</a>|
                            <a href="">修改</a>|
                            <a href="">直接删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection