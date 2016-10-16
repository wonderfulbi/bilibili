<?php

namespace App\Http\Controllers\admin\plate;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         //跳转分区子模块添加
        $list = \DB::table("wb_vtype")->where("id",$id)->lists("name");
        // dd($list);
        return view("admin.plate.subsection",["id"=>$id,"list"=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        // dd($id);
        // return "ok";
        // dd($request);
        $name = $request->input("subname");
        // dd($name);
        $aff = \DB::insert("insert into wb_tlist(tid,name) values(?,?)",[$id,$name]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //跳转到分类修改表单
        $type = \DB::table("wb_tlist")->where("id",$id)->first(); //获取要编辑的分区信息
        // dd($type);
        return view("admin.plate.editsub",["vo"=>$type]);
    }

    /**
     * Update the specified resource in storage.
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
        $id = \DB::table("wb_tlist")->where("id",$id)->update($data);
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
        if(\DB::table("wb_video")->where("lid",$id)->count()>0){
            return back()->with("err","禁止删除!");
        }
        //如果所在分区没有视频，则执行删除语句
        \DB::table("wb_tlist")->where("id",$id)->delete();
        //删除后跳转到分区管理页面
        return redirect('admin/plate');

    }
}
