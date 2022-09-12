<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request) {
        $request->validate([
            'email'     => 'email|required',
            'subject'     => 'string|required',
            'content'     => 'string|required',
        ]);
        Mail::send('email',['content' => $request->content], function($mails) use($request){
            $mails->to($request->email);
            $mails->subject($request->subject);
        });
        return "<h3>Email Send Successfully</h3>";
    }
}
