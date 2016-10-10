@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
   <!-- Table Hover -->
    <div class="block-area" id="tableHover">
        <h3 class="block-title">您的位置->管理栏目->板块列表</h3>
        <div class="table-responsive overflow">
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>顺序</th>
                        <th>分类树</th>
                        <th>缩略图</th>
                        <th>栏目名</th>
                        <th>栏目管理</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jhon </td>
                        <td>xx</td>
                        <td>鬼畜</td>
                        <td>
                            <a href="">添加子版块</a>|
                            <a href="">修改</a>|
                            <a href="">删除</a>|
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection