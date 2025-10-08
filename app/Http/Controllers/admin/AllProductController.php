<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\AllProduct;
use App\Models\ProductCategory;

use App\Models\Setting;

use Validator;
use DB;
class AllProductController extends Controller
{
    public function index()
    {
        $data['data'] = AllProduct::get();
        $data['settings'] = Setting::first();
        $data['category'] = ProductCategory::get();
        $data['all_product'] = DB::table('product_all')->rightJoin('product_category', 'product_all.category', '=', 'product_category.id')->get();
        // var_dump($data['all_product']);
        return view("backend.all-product.index",$data);
    }

    public function create(Request $request)
    {
        if($request->images != '') {
            $data['images']= str_replace(url('/'), "",$request->images);
        }
        
        if($request->id == 0){
            $sort = AllProduct::where('sort',$request->sort)->count();
        }else{
            $sort = AllProduct::where('sort',$request->sort)->where('id','!=',$request->id)->count();
        }
        
        if($sort != 0){
            return response()->json(['status'=>'Sort sudah dipakai']);
        }else{
            if($request->id == 0){
                DB::table('product_all')->insert([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                   
                    'category' =>  $request->category,
                    'desc_id' => $request->descriptionID,
                    'desc_en' => $request->descriptionENG,
                    'image' => $data['images'],
                    'create' => date('Y-m-d H:i:s'),
                    'update'=> date('Y-m-d H:i:s')
                ]);
            }else{
                DB::table('product_all')->where('id',$request->id)->update([
                    'sort' => $request->sort,
                    'status' => $request->status,
                    'title' => $request->title,
                    'category' =>  $request->category,
                    'desc_id' => $request->descriptionID,
                    'desc_en' => $request->descriptionENG,
                    'image' => $data['images'],
                    'update' => date('Y-m-d H:i:s')
                ]);
            }
            return response()->json(['status'=>'Data Berhasil disimpan']);
        }

        
    }

    public function delete($id)
    {
        $delete = AllProduct::findOrFail($id);
        $delete->delete();
        return redirect()->route('all-product.index')->withSuccess('Data Berhasil dihapus!');
    }

    public function multi_delete(Request $req)
    {
        $delete = AllProduct::whereIn('id', $req->id)->get();
        foreach ($delete as $deletes) {
            $data = AllProduct::findOrFail($deletes['id'])->delete();
        }
    }

    public function editstatus($id,Request $request)
    {   
        DB::table('product_all')->where('id',$id)->update([
            'status'=>$request->sts,
            'update'=>date('Y-m-d H:i:s')
        ]);
        return response()->json(['success'=>'Status Berhasil diubah']);
        
    }

    public function edit($id)
    {   
        $data = AllProduct::where('id',$id)->get();
        return response()->json(['success'=>'Status Berhasil di ambil','data'=>$data]);
    }
}
