<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\gmailMail;
use App\Models\Setting;


class MailController extends Controller
{
    public function index(Request $request){

    // $details = [
    //     'title' => 'Mail from websitepercobaan.com',
    //     'body' => 'This is for testing email using smtp'
    //     ];
    
    //     \Mail::to('emailpenerima@gmail.com')->send(new \App\Mail\MyTestMail($details));
    
    //     dd("Email sudah terkirim.");

    // 
     $details = [
      'email' => $request->email,
      'name' => $request->name,
      'subject' => $request->subject,
      'title' => 'help care',
      'body' => $request->message,

    ];
     $adminEmail = Setting::select('email_2')->first();
     \Mail::to($adminEmail['email_2'])->send(new gmailMail($details));
     return response()->json('OK');
    }
}

