<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\Setting;

use Validator;
use DB;
class NewsController extends Controller
{
    public function index()
    {
        $data['data'] = News::get();
        $data['settings'] = Setting::first();

        return view("backend.news.index",$data);
    }

    public function create(Request $request)
    {   
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }
        if($request->id == 0){
            DB::table('news_all')->insert([
                'status' => $request->status,
                'date' => $request->date,
                'title' => $request->title,
                'desc_id' => $request->description,
                'desc_en' => $request->description_en,
                'image' => $data['images'],
                'date_create' => date('Y-m-d H:i:s')
            ]);
        }else{
            DB::table('news_all')->where('id',$request->id)->update([
                'status' => $request->status,
                'date' => $request->date,
                'title' => $request->title,
                'desc_id' => $request->description,
                'desc_en' => $request->description_en,
                'image' => $data['images'],
                'date_update' => date('Y-m-d H:i:s')
            ]);
        }
        return response()->json(['status'=>'Data Berhasil disimpan']);           

        
    }

    public function delete($id)
    {
        $delete = News::findOrFail($id);
        $delete->delete();
        return redirect()->route('news.index')->withSuccess('Data Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = News::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = News::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('news_all')->where('id',$id)->update([
            'status'=>$request->sts,
            'date_update'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }


    public function edit($id)
    {   
        $data = News::where('id',$id)->get();
        return response()->json(['success'=>'Status Berhasil diubah','data'=>$data]);
    }
}
