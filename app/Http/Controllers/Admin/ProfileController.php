<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MailClient;
class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }
    public function mail_account(Request $request,$id = null)
    {

        if ($request->isMethod('POST')) {
            $mail = new MailClient;
            $mail->mail_name = $request->email;
            $mail->save();
            return back();
        }else{
            if($id){
                MailClient::find($id)->delete();
                return back();
            }
            $mail = MailClient::simplePaginate(10);
            return view('admin.mail-account',compact('mail'));
        }

    }
}
