<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\WebminUser;
use App\Models\Setting;

use Validator;
use DB;
class AuthController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();

        return view("backend.auth.index",$data);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:webmin_user,admin_name',
            'password' => 'required'
        ]);

        $validate_account = WebminUser::where([
            'admin_name'=>$request->username,
            'admin_password'=>md5($request->password)
        ]);

        if($validate_account->count() == 0){
            return redirect()->route('login')->with('status', 'Username atau Password anda tidak sesuai!');
        }else{
            if($validate_account->first()->status != 'active'){
                return redirect()->route('login')->with('status', 'Akun anda terkena suspend oleh administrator, silahkan hubungi administrator');
            }else{
                $request->session()->put('id',$validate_account->first()->admin_id);
                $request->session()->put('name',$validate_account->first()->admin_name);
                return redirect()->route('dashboard')->with('success', 'Berhasil Login!');
            }
        }

    }



    


    public function logout(Request $request)
    {
        $request->session()->forget('id');
        $request->session()->forget('name');


        return redirect()->route('login');
    }
}
