@extends("admin.base.base")

@section('title')
    B站网站管理后台
@endsection

@section('content')
   <!-- Table Hover -->
    <div class="block-area" id="tableHover">
        <h3 class="block-title">您的位置->管理栏目->板块列表</h3>

        <div class="table-responsive overflow">
            <form class="form-inline" role="form" method="post" action="sear">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" class="input-sm col-md-3 pull-left message-search" id="exampleInputEmail2" placeholder="输入要搜索的内容" name="search1">
                <button type="submit" class="btn btn-sm">搜   索</button>
            </form>

            <br>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>顺序</th>
                        <th>分类树</th>
                        <th>栏目名</th>
                        <th>栏目管理</th>
                        <th>子版块</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($list as $v)
                    <tr>
                        <td>{{ $num++ }}</td>
                        <td>Jhon </td>
                        <td><a href="/admin/shipin/{{ $v->id }}">{{ $v->name }}</a></td>
                        <td>
                            <button class="btn btn-xs btn-danger" onclick="doDel({{ $v->id }})">删除</button>
                            <button class="btn btn-xs btn-primary" onclick="window.location='{{URL('/admin/edit')}}/{{ $v->id }}'">修改</button>
                        </td>
                        <td> <a href="/admin/sub/{{ $v->id }}">添加子版块</a></td>
                    </tr>




                @endforeach
                </tbody>1
            </table>
            {!! $list->render() !!}
        </div>
    </div>



@endsection

@section("myscript")
<form action="/admin/" method="post" name="myform" style="display:none;">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="_method" value="delete"/>
</form>

<script type="text/javascript">
    function doDel(id){
        Modal.confirm({msg: "是否删除信息？"}).on(function(e){
            if(e){
               var form = document.myform;
                form.action = "{{URL('/admin/del')}}/"+id;
                form.submit();
            }
          });
    }
</script>

@endsection