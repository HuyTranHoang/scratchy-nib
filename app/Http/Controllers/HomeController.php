<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index()
    {
        return view('users.index');
    }

    public function gallery()
    {
        return view('users.gallery');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function about()
    {
        return view('users.about');
    }

    public function authenticate()
    {
        return view('users.authenticate');
    }

    public function sendEmail(EmailPostRequest $request)
    {
        $validated = $request->validated();
        Mail::send('emails.contact',compact('validated'), function ($email) use($validated) {
            $email->subject($validated['subject']);
            $email->to('huy.th878@aptechlearning.edu.vn',$validated['name']);
        });

        return redirect()->back();
    }

}
