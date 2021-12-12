<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\enroll_course;

class DashboardController extends Controller
{
    public function profile(){
        return view('dashboard.profile');
    }

}

