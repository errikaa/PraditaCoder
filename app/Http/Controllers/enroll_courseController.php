<?php

namespace App\Http\Controllers;

use App\Models\enroll_course;
use App\Models\User;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class enroll_courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.enroll.enrolled',[
            'enroll_courses' => enroll_course::where('id', auth()->user()->id)->get(),
            'id_enroll' => enroll_course::where('id_enroll')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_courses' => 'required',
            'course_name' => 'required',
            'id' => 'required'

        ]);
        
        //$validatedData['id'] = auth()->user()->id;
        enroll_course::create($validatedData);
        $request->session()->flash('success','Successfully Enroll the Course!');
        return redirect('/dashboard/enroll');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enroll_course  $enroll_course
     * @return \Illuminate\Http\Response
     */
    public function show(enroll_course $enroll_course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enroll_course  $enroll_course
     * @return \Illuminate\Http\Response
     */
    public function edit(enroll_course $enroll_course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enroll_course  $enroll_course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enroll_course $enroll_course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enroll_course  $enroll_course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_enroll)
    {
        $deleted = enroll_course::where('id_enroll', $id_enroll)->delete();
        return redirect('/dashboard/enroll')->with('deleted', 'Successfully Unenroll the Course!');
    }
}
