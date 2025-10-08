<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Setting;

use Validator;
use DB;
class GalleryController extends Controller
{
    public function index()
    {
        $data['data'] = Gallery::get();
        $data['category'] = GalleryCategory::get();
        $data['settings'] = Setting::first();

        return view("backend.gallery.index",$data);
    }

    public function create(Request $request)
    {   
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }

        if($request->id == 0){
            $sort = Gallery::where('sort',$request->sort)->count();
        }else{
            $sort = Gallery::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('gallery')->insert([
                    'category_id' => $request->category_id,
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc_id' => $request->description,
                    'image' => $data['images'],
                    'create' => date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('gallery')->where('id',$request->id)->update([
                    'category_id' => $request->category_id,
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc_id' => $request->description,
                    'image' => $data['images'],
                    'update' => date('Y-m-d H:i:s')
                ]);
            }
            return response()->json(['status'=>'Data Berhasil disimpan']);
        }

        
    }

    public function delete($id)
    {
        $delete = Gallery::findOrFail($id);
        $delete->delete();
        return redirect()->route('gallery.index')->withSuccess('Data Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = Gallery::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = Gallery::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('gallery')->where('id',$id)->update([
            'status'=>$request->sts,
            'create'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }

    public function edit($id)
    {   
        $data = Gallery::where('id',$id)->get();
        return response()->json(['success'=>'Status Berhasil diubah','data'=>$data]);
    }
}

