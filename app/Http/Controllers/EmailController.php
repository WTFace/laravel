<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    private $sender=[];
    public function contact(Request $req){
        return view('contactUs');
    }

    public function sendEmail(Request $req){
        $this->sender['subject'] = $req->input('subject');
        $this->sender['content'] = $req->input('content');
        $this->sender['email'] = $req->input('email');

        Mail::raw($this->sender['content'], function($msg){
            $msg->subject($this->sender['subject'])
                ->to(env('MAIL_USERNAME'))
                ->from($this->sender['email']);
        });

        return redirect()-> route('contact');

    }
}
