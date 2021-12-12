@extends('layouts.head')
@section('container')
    <!-- INTRO -->
	@if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
    @endif
	<div class="intro1" style="background-image: url(img/circuit.png);background-repeat: no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6" style="padding-top: 20vh;">
					<h1 style="color: #38475b;font-size: 54px;font-weight: bold;">Learn Code With Pradita University</h1>
					<p>Enroll programming courses, discover everyday code tips <br> and tech life hack with us</p>
				</div>
				<div class="col-sm-6">
					<img src="img/intro1.png" width="100%">
				</div>
			</div>
		</div>
	</div><br><br>

<!-- COURSES -->
	<div class="container">
		<!-- <hr><br> -->
		<div class="row">
			<div class="col-sm-12">
				<center><h1 style="font-weight: bold;">Discover top courses</h1>
					<p>Learn from zero and get the certificates</p><br><br></center>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">	
				<div class="bgwhite borderrad box" style="padding: 20px" onclick="location.href='/courses';">
					<img src="img/android.png" width="100%" style="border-radius: 15px;"><br><br>
					<h3>Build your own android app</h3>
					<p>Learn how to design and build a simple a android app with Java and Kotlin in Android Studio</p>
					<br>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="row padding10 bgwhite borderrad box" style="margin-bottom: 14px;" onclick="location.href='/courses';">
					<div class="col-sm-8 padding10">
						<h4>Create simple game with Unity</h4>
						<p>You can create a funny simple mobile game just with Unity without coding</p>
					</div>
					<div class="col-sm-4 padding10">
						<img src="img/unity.jpg" width="100%" style="border-radius: 15px;">
					</div>
				</div>
				
				<div class="row padding10 bgwhite borderrad box" style="margin-bottom: 14px;" onclick="location.href='/courses';">
					<div class="col-sm-8 padding10">
						<h4>Get know basic programming</h4>
						<p>Learn how to execute basic logic and algorithm with C++ and undestanding code workflow</p>
					</div>
					<div class="col-sm-4 padding10">
						<img src="img/cpp.jpg" width="100%" style="border-radius: 15px;">
					</div>
				</div>
				
				<div class="row padding10 bgwhite borderrad box" onclick="location.href='/courses';">
					<div class="col-sm-8 padding10">
						<h4>Learn how to design a web</h4>
						<p>Web design it's not too hard to learn, enroll the course to learn design and develop a web</p>
					</div>
					<div class="col-sm-4 padding10">
						<img src="img/web.jpg" width="100%" style="border-radius: 15px;"><br><br>
					</div>
				</div>

			</div>
		</div>
	</div><br><br><br>


    @include('layouts.tipstemp');

    @include('layouts.eventstemp');

<!-- JOIN US -->
	<br><br><br>
	<div class="container">
		<!-- <hr><br> -->
		<div class="row">
			<div class="col-sm-12">
				<center>
					<h1 style="font-weight: bold;">We Also Hiring Tutors</h1>
					<p>Sign up yourself to become our tutor and <br> get guidance from our experts</p>
				</center>
			</div>
			<div class="col-sm-12">
				<center><img src="img/hiring.png" width="60%"></center>
			</div>
		</div>
	</div>
	<br><br>

@endsection