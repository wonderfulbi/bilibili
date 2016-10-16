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
        return view("admin.plate.plate",["list"=>$list,"num"=>$num]);
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
        $num=1;
        return view("admin.plate.plate",["list"=>$list,"num"=>$num]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        dd($id);
    }
}
