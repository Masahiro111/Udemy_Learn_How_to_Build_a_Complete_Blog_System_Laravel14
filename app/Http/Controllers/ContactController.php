<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Contact::create(
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'subject' => 'nullable|min:5|max:50',
                'message' => 'required|min:5|max:500',
            ])
        );

        return redirect()->route('contact.create')->with('success', 'Your message has been sent');
    }
}
