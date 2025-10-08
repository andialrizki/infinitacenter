<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Video;
use App\Models\Setting;

use Validator;
use DB;
class VideoController extends Controller
{
    public function index()
    {
        $data['data'] = Video::get();
        $data['settings'] = Setting::first();

        return view("backend.video.index",$data);
    }

    public function create(Request $request)
    {   
        if($request->id == 0){
            $sort = Video::where('sort',$request->sort)->count();
        }else{
            $sort = Video::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('video')->insert([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'youtube_id' => $request->youtube_id,
                    'date_create' => date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('video')->where('id',$request->id)->update([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'youtube_id' => $request->youtube_id,
                    'date_update' => date('Y-m-d H:i:s')
                ]);
            }
            return response()->json(['status'=>'Data Berhasil disimpan']);
        }

        
    }

    public function delete($id)
    {
        $delete = Video::findOrFail($id);
        $delete->delete();
        return redirect()->route('video.index')->withSuccess('Data Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = Video::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = Video::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('video')->where('id',$id)->update([
            'status'=>$request->sts,
            'date_update'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }
}
