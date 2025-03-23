<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Add this line
use App\Mail\ContactFormMail; // Add this line

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Add this line
use App\Mail\ContactFormMail; // Add this line

class ContatController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('abdelchpro@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
