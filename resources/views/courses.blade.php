@extends('layouts.head')
@section('container')
    <!-- COURSES -->
	<div class="container">
		<!-- <hr><br> -->
		<div class="row">
			<div class="col-sm-12"><br><br>
				<center>
					<h1 style="font-weight: bold;">Programming Courses</h1>
					<p>Easy way to use tech and programming</p><br><br>
				</center>
			</div>
		</div>

		<div class="row">

			@foreach($courses as $course)
				<div class="col-sm-3">
					<div class="card" style="height: 350px;border-radius: 15px">
						<img src="img/web.jpg" width="100%" height="50%" style="border-top-left-radius: 15px;border-top-right-radius: 15px;">
						<h5 style="padding: 15px 15px 0px 15px;">{{ $course->course_name }}</h5>
						<p style="padding: 15px;">{{ $course->course_intro }}</p>
						<!-- Button trigger modal -->
						@auth
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#courseneroll{{$course['id_courses']}}">Details
							</button>
						@else
							<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#learnmore{{$course['id_courses']}}">Learn more</button>
						@endauth
					</div>
				</div>
				
			<!-- COURSE DETAILS MODAL -->
			@auth
				<div class="modal fade" id="courseneroll{{$course['id_courses']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalLabel">Enroll Course</h5>
				        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      		</div>
				      
				      		<div class="modal-body">
				      			<form action="/dashboard/enroll" method="post">
									@csrf
									<p>{{ $course->course_intro }}</p>
									<p>{{ $course->course_detail }}</p><br>

									<div class="mb-3"> <!-- ID Courses -->
										<label for="exampleFormControlInput1" class="form-label">Course ID</label>
										<input type="text" class="form-control" id="id_courses" name="id_courses" value="{{ $course->id_courses }}" readonly>
									</div>

									<div class="mb-3"> <!-- Course Name -->
										<label for="exampleFormControlInput1" class="form-label">Course Name</label>
										<input type="text" class="form-control" id="course_name" name="course_name" value="{{ $course->course_name }}" readonly>
									</div>

									<div class="mb-3"> <!-- ID User -->
										<label for="exampleFormControlInput1" class="form-label">USER ID</label>
										<input type="text" class="form-control" id="id" name="id" value="{{auth()->user()->id}}" readonly>
									</div>

									
							</div>
				      	
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									
									<input type="submit" class="btn btn-primary" value="Enroll">
								</form>
				      			</div>
				    	</div>
				  	</div>
				</div>
			@endauth
			
			<!-- LEARN MORE MODAL -->
				<div class="modal fade" id="learnmore{{$course['id_courses']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalLabel">{{ $course->course_name }}</h5>
				        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      		</div>
				      
				      	<div class="modal-body">
					  		{{$course['course_intro']}}</p><br>
				      		{{$course['course_detail']}}</p><br>
							<h6>To enroll this course, you have to Sign In first</h6>			      
				      	</div>
				   
				      	<div class="modal-footer">
				        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        </form>
				    	</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div><br><br><br>
@endsection