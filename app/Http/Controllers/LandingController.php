<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate(['email' => 'required|string|email|max:255']);
        $email = $request->email;

        Mail::to('alexisjoseva95@gmail.com')->send(new SendEmail($email));
        return back()->with('success', 'Email enviado correctamente');
    }
}
