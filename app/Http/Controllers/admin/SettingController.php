<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Setting;
use Validator;
use DB;
class SettingController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();
        // var_dump($data);
        return view("backend.setting.index",$data);
    }

    public function create(Request $request)
    {
        if($request->id != null)
        {
            $data['logo']= str_replace(url('/'), "",$request->logo);
            $data['favicon']= str_replace(url('/'), "",$request->favicon);
            $Settings =  Setting::find($request->id);
            $Settings->title = $request->title;
            $Settings->telephone = $request->telephone;
            $Settings->fax = $request->fax;
            $Settings->email = $request->email;
            $Settings->email_2 = $request->email_2;
            $Settings->mobile_phone = $request->mobile_phone;
            $Settings->latitude = $request->latitude;
            $Settings->longitude = $request->longitude;
            $Settings->address = $request->address;
            $Settings->address_2 = $request->address_2;
            $Settings->caption = $request->caption;
            $Settings->meta_description = $request->meta_description;
            $Settings->meta_keyword = $request->meta_keyword;
            $Settings->footer_text = $request->footer_text;
            $Settings->contactus = $request->contactus;
            $Settings->website = $request->website;
            $Settings->facebook = $request->facebook;
            $Settings->twitter = $request->twitter;
            $Settings->youtube = $request->youtube;
            $Settings->whatsapp = $request->whatsapp;
            $Settings->pinterest = $request->pinterest;
            $Settings->instagram = $request->instagram;
            $Settings->skype = $request->skype;
            $Settings->caption_skype = $request->caption_skype;
            $Settings->paypal_id = $request->paypal_id;
            $Settings->currency = $request->currency;

            if(!empty(trim($request->logo)))
                $Settings->logo = $data['logo'];
            
            if(!empty(trim($request->favicon)))
                $Settings->favicon = $data['favicon'];
            
            $Settings->save();
            // var_dump('updata'->$Settings);
            return response()->json(['status'=>'Data Berhasil diubah']);
        }else{
            $data['logo']= str_replace(url('/'), "",$request->logo);
            $data['favicon']= str_replace(url('/'), "",$request->favicon);
            $Settings = new Setting();
            $Settings->title = $request->title;
            $Settings->telephone = $request->telephone;
            $Settings->fax = $request->fax;
            $Settings->email = $request->email;
            $Settings->email_2 = $request->email_2;
            $Settings->mobile_phone = $request->mobile_phone;
            $Settings->latitude = $request->latitude;
            $Settings->longitude = $request->longitude;
            $Settings->address = $request->address;
            $Settings->address_2 = $request->address_2;
            $Settings->caption = $request->caption;
            $Settings->meta_description = $request->meta_description;
            $Settings->meta_keyword = $request->meta_keyword;
            $Settings->footer_text = $request->footer_text;
            $Settings->contactus = $request->contactus;
            $Settings->website = $request->website;
            $Settings->facebook = $request->facebook;
            $Settings->twitter = $request->twitter;
            $Settings->youtube = $request->youtube;
            $Settings->whatsapp = $request->whatsapp;
            $Settings->pinterest = $request->pinterest;
            $Settings->instagram = $request->instagram;
            $Settings->skype = $request->skype;
            $Settings->caption_skype = $request->caption_skype;
            $Settings->paypal_id = $request->paypal_id;
            $Settings->currency = $request->currency;
            $Settings->logo = $data['logo'];
            $Settings->favicon = $data['favicon'];
            $Settings->save();
            // var_dump($Settings);
            return response()->json(['status'=>'Data Berhasil disimpan']);

        }
        
        
    }
}
