<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Admin;
use App\Notifications\InboxMessage;

class ContactController extends Controller
{
    public function show()
    {
        $success='';
        return view('contact', compact('success', $success));
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {
        $admin->notify(new InboxMessage($message));
        $success='Thanks for the message!! we will ignore it';
        return view('/contact', compact('success', $success));
    }
}