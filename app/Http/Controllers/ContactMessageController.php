<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    public function create() {
        return view('pages.contact');
    }

    public function store(Request $request) {
        Mail::send('email.contact-message', [
            'Message' => $request->message,
            'FirstName' => $request->first_name,
            'LastName' => $request->last_name,
            'Email' => $request->email,
            'Sex' => $request->sex,
            'Subject' => $request->subject
        ], function ($mail) use($request){
            $mail->from(config('mail.username'),'Contact Message | ABDeveloper');

            $mail->to('ashish.bhoi12@gmail.com', 'ABDevelopers')->subject($request->subject);
        });

        return redirect()->back()->with('success','Thank You For Your Message' );

    }
}
