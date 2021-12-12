<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\join_us;

class join_usController extends Controller
{
    public function join(Request $request){
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'birthdate' => 'required',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'occupation' => 'required',
            'message' => 'required|max:255'
        ]);
        join_us::create($validatedData);
        $request->session()->flash('success','Your registration has been sent, Thank You');
        return view('/joinus');
    }
}
