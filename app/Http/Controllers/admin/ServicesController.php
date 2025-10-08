<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Services;
use App\Models\Setting;

use Validator;
use DB;
class ServicesController extends Controller
{
    public function index()
    {
        $data['data'] = Services::get();
        $data['settings'] = Setting::first();

        return view("backend.services.index",$data);
    }

    public function create(Request $request)
    {   
        $data['images'] = null;
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }

        if($request->id == 0){
            $sort = Services::where('sort',$request->sort)->count();
        }else{
            $sort = Services::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('services')->insert([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'icon' => $request->icon,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'create' => date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('services')->where('id',$request->id)->update([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'icon' => $request->icon,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'update' => date('Y-m-d H:i:s')
                ]);
            }
            return response()->json(['status'=>'Data Berhasil disimpan']);
        }

        
    }

    public function delete($id)
    {
        $delete = Services::findOrFail($id);
        $delete->delete();
        return redirect()->route('services.index')->withSuccess('Data Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = Services::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = Services::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('services')->where('id',$id)->update([
            'status'=>$request->sts,
            'create'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }


    public function edit($id)
    {   
        $data = Services::where('id',$id)->get();
        return response()->json(['success'=>'Status Berhasil diubah','data'=>$data]);
    }
}
