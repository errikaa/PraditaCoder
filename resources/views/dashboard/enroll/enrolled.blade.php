@extends('layouts.head')
@section('container')
    <div class="container" style="padding: 40px;">
            <div class="row">
                <div class="col-sm-12"><h3>Enrolled Course</h3></div><br><br>
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('deleted'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('deleted') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                    @foreach($enroll_courses as $enroll_course)
                        <div class="col-sm-3">	
                            <div class="card" style="height: 310px;border-radius: 15px">	
                                <img src="/img/web.jpg" width="100%" height="50%" style="border-top-left-radius: 15px;border-top-right-radius: 15px;">
                                <h5 style="padding: 15px 15px 0px 15px;">{{ $enroll_course->course_name }}</h5><br><br><br>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#usercourse{{$enroll_course->id_enroll}}">Details</button>
                
                            <!-- USER COURSE MODAL -->
                    
                                <div class="modal fade" id="usercourse{{$enroll_course->id_enroll}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enroll Course</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                    
                                            <div class="modal-body">
                                                <form action="/dashboard/enroll/{{$enroll_course->id_enroll}}" method="post">
                                                @method('delete')
                                                @csrf
                                                    <div class="mb-3">
                                                        <label for="id_enroll" class="form-label">Enroll ID</label>
                                                        <input type="text" class="form-control"
                                                        name="id_enroll" value="{{ $enroll_course->id_enroll}}">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="course_name" class="form-label">Course Name</label>
                                                        <input type="text" class="form-control" id="course_name" name="course_name" value="{{ $enroll_course->course_name }}" >
                                                    </div>
                                            </div>
                                
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                
                                                    <!-- <input type="submit" class="btn btn-danger" value="Unenroll"> -->
                                                    <button type="submit" class="btn btn-danger" name="unenroll" onclick="return confirm('Are you sure to unenroll this course?')">Unenroll</button>
                                                </form>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>	
                            </div>	
                        </div>	
                    @endforeach
                </div><br><br><br>
            </div>
        </div>
@endsection