<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contact(Request $req){
        return view('contactUs');
    }

    public function sendEmail(Request $req){
        $title = $req->input('subject');
        $content = $req->input('content');
        $sender = $req->input('email');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from();

            $message->to(env(MAIL_USERNAME));

        });

        return response()->json(['message' => 'Request completed']);
    }
}
