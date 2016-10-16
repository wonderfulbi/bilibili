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
                        <th>栏目名</th>
                        <th>栏目管理</th>
                        <th>子版块</th>
                         <th>打开详细</th>
                    </tr>
                </thead>
                <tbody>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                    <h4 class="panel-title">
                    @foreach($list as $v)
                    <tr>
                        <td>{{ $num++ }}</td>
                        <td><a href="/admin/shipin/{{ $v->id }}">{{ $v->name }}</a></td>
                        <td>
                             <button class="btn btn-xs btn-primary" onclick="window.location='{{URL('/admin/edit')}}/{{ $v->id }}'">修改</button>|
                             <button class="btn btn-xs btn-danger" onclick="doDel({{ $v->id }})">删除</button>

                        </td>
                        <td>
                            <a href="/admin/sub/{{ $v->id }}">添加子版块</a>
                        </td>
                        <td>
                            <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{ $v->id }}" aria-expanded="true" aria-controls="collapseOne">+</a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="6">
                         <div id="{{ $v->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" height="60px">
                        @foreach($tlist as $tv)
                        @if(($tv->tid) == ($v->id))
                         <div class="col-lg-4">
                            <section class="panel">
                                <div class="panel-body">分类名字:{{ $tv->name }}</div>
                            </section>
                        </div>
                        <div class="col-lg-6">
                            <section class="panel">
                                <div class="panel-body">
                                    <button class="btn btn-xs btn-primary" onclick="window.location='{{URL('/admin/editsub')}}/{{ $tv->id }}'">修改</button>|
                                     <button class="btn btn-xs btn-danger" onclick="doDel1({{ $tv->id }})">删除</button>
                                </div>
                            </section>
                        </div>
                         @endif
                         @endforeach
                        </div>
                        </td>
                    </tr>
                    </h4>
                    </div>
                    @endforeach
                </div>
                </tbody>
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

     function doDel1(id){
        Modal.confirm({msg: "是否删除信息？"}).on(function(e){
            if(e){
               var form = document.myform;
                form.action = "{{URL('/admin/delsub')}}/"+id;
                form.submit();
            }
          });
    }
</script>

<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>


@endsection