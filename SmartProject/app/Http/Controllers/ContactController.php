<?php

namespace App\Http\Controllers;

use App\Mail\ContactezNous;
use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function index(Request $request){
        // dd('ok');
        $request->validate([
            'email' => ['required', 'email']
        ]);
        
        Mail::to('amiraldr3@gmail.com')->send(new ContactezNous($request));
        return back()->with('success', 'Email envoyé');
    }
}
