@extends('layouts.head')
@section('container')
<!-- JOIN US -->
	<div class="container"><br><br>
		<div class="row">
			@if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			<div class="col-sm-12">
				<center>
					<h1 class="bold dark">Be a part of PraditaCoder</h1>
					<p>Apply yourself here</p>
				</center>
			</div>
			<div class="col-sm-12" style="padding: 50px;">
				<form action="/joinus" method="post">
					@csrf
					<label><b>Fullname</b></label>
					<input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname"  required><br>
					@error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror

					<label><b>Date of Birth</b></label>
					<input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" id="birthdate" required><br>
					@error('birthdate')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

					<label><b>Gender</b></label><br>
					<input class="form-check-input" type="radio" name="gender" id="gender" value="male">
  					<label class="form-check-label" for="male">Male</label>
  					<input class="form-check-input" type="radio" name="gender" id="gender" value="female">
  					<label class="form-check-label" for="female">Female</label><br><br>

					<label><b>Email</b></label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required><br>
					@error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

					<label><b>Occupation</b></label>
					<select name="occupation" id="occupation" class="form-select">
      					<option selected value="student">Student</option>
      					<option value="lecture">Lecture</option>
      					<option value="staff">Staff</option>
      				</select><br>

					<label><b>Why you want to be part of PraditaCoder</b></label>
					<textarea class="form-control @error('message') is-invalid @enderror" rows="4" name="message" id="message" required></textarea><br>
					@error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

					<input type="submit" class="btn btn-primary" style="float: right;width: 150px;" name="btnsend" id="btnsend" value="Send">
				</form>
			</div>
		</div>
	</div>
@endsection