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
        return view('contact');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {
        $admin->notify(new InboxMessage($message));
        return redirect()->back();
    }
}
