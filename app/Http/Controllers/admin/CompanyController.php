<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\Setting;

use Validator;
use DB;
class CompanyController extends Controller
{
    public function index()
    {
        $data['data'] = Company::get();
        $data['settings'] = Setting::first();

        return view("backend.company.index",$data);
    }

    public function create(Request $request)
    {   
        $data['images'] = null;
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }

        if($request->id == 0){
            $sort = Company::where('sort',$request->sort)->count();
        }else{
            $sort = Company::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('company')->insert([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'desc' => $request->description,
                    'image' => $data['images'],
                    'create' => date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('company')->where('id',$request->id)->update([
                    'sort' => $request->sort,
                    'status' => $request->status,
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
        $delete = Company::findOrFail($id);
        $delete->delete();
        return redirect()->route('company.index')->withSuccess('Data Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = Company::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = Company::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('company')->where('id',$id)->update([
            'status'=>$request->sts,
            'create'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
    }


    public function edit($id)
    {   
        $data = Company::where('id',$id)->get();
        return response()->json(['success'=>'Status Berhasil diubah','data'=>$data]);
    }
}
