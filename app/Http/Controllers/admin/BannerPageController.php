<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BannerPage;
use App\Models\Setting;


use Validator;
use DB;
class BannerPageController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();

        $data['data'] = BannerPage::get();
        return view("backend.banner-page.index",$data);
    }

    public function create(Request $request)
    {
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }
        
        if($request->id == 0){
            $sort = BannerPage::where('sort',$request->sort)->count();
        }else{
            $sort = BannerPage::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('banner_page')->insert([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'date_create' => date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('banner_page')->where('id',$request->id)->update([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'date_update' => date('Y-m-d H:i:s')
                ]);
            }
            return response()->json(['status'=>'Data Berhasil disimpan']);
        }

        
    }

    public function delete($id)
    {
        $delete = BannerPage::findOrFail($id);
        $delete->delete();
        return redirect()->route('banner-page.index')->withSuccess('Banner Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = BannerPage::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = BannerPage::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('banner_page')->where('id',$id)->update([
            'status'=>$request->sts,
            'date_update'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }
}
