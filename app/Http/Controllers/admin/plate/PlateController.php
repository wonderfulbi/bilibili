<?php

namespace App\Http\Controllers\admin\plate;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //遍历出所有分区
        $num=1;
        $list = \DB::table("wb_vtype")->paginate(3);
        // $vlist= \DB::table("wb_video")->where()->get();
        $tlist= \DB::table("wb_tlist")->get();
        // dd($tlist);
        return view("admin.plate.plate",["list"=>$list,"num"=>$num,"tlist"=>$tlist]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
       //分区管理页面的搜索,模糊搜索分区
        $sear = $request->input("search1");
        $list = \DB::table("wb_vtype")->where("name","like","%{$sear}%")->paginate(3);
         $tlist= \DB::table("wb_tlist")->get();
        $num=1;
        return view("admin.plate.plate",["list"=>$list,"num"=>$num,"tlist"=>$tlist]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.plate.addplate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // dd($request->input("name"));
        $name = $request->input("name");
        $aff = \DB::insert("insert into wb_vtype(name) values(?)",[$name]);
        if($aff>0){
            return redirect("admin/plate");
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 加载修改表单
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $type = \DB::table("wb_vtype")->where("id",$id)->first(); //获取要编辑的分区信息
        // dd($type);
        return view("admin.plate.edit",["vo"=>$type]);
    }

    /**
     * 执行修改表单
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取传递来的值
        $data = $request->only("name");
        // dd($request);
        $id = \DB::table("wb_vtype")->where("id",$id)->update($data);
        // if($id){
        //     return "修改成功！";
        // }else{
        //     return "修改失败！";
        // }
        return redirect("admin/plate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除分区
        //判断分区下是否有视频，有视频则不能删除
        if(\DB::table("wb_video")->where("tid",$id)->count()>0){
            return back()->with("err","禁止删除!");
        }
        //如果所在分区没有视频，则执行删除语句
        \DB::table("wb_vtype")->where("id",$id)->delete();
        //删除后跳转到分区管理页面
        return redirect('admin/plate');
    }
}
