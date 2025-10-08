<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BannerHome;
use App\Models\Setting;

use Validator;
use DB;
class BannerHomeController extends Controller
{
    public function index()
    {
        $data['data'] = BannerHome::get();
        $data['settings'] = Setting::first();


        return view("backend.banner-home.index",$data);
    }

    public function create(Request $request)
    {
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }
        
        if($request->id == 0){
            $sort = BannerHome::where('sort',$request->sort)->count();
        }else{
            $sort = BannerHome::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('banner_home')->insert([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'content_url' => $request['content_url'],
                    'date_create' => date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('banner_home')->where('id',$request->id)->update([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'content_url' => $request['content_url'],

                    'date_update' => date('Y-m-d H:i:s')
                ]);
            }
            return response()->json(['status'=>'Data Berhasil disimpan']);
        }

        
    }

    public function delete($id)
    {
        $delete = BannerHome::findOrFail($id);
        $delete->delete();
        return redirect()->route('banner-home.index')->withSuccess('Banner Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = BannerHome::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = BannerHome::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('banner_home')->where('id',$id)->update([
            'status'=>$request->sts,
            'date_update'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }
}
