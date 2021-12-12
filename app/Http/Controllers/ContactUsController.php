<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function contact(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'message' => 'required|max:255'
        ]);
        ContactUs::create($validatedData);
        $request->session()->flash('success','Your message has been sent, Thank You');
        return view('/index');
    }
}
