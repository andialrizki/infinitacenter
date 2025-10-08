<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Setting;

use Validator;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();

        return view("backend.dashboard.index",$data);
    }
}
