@extends('layouts.head')
@section('container')
    <!-- USER DETAIL -->
	<div style="background-image: url(img/pattern.png);">
		<div class="container" style="padding: 50px;">
			<div class="row">
				@if(session()->has('updated'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('updated') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				<div class="col-sm-12">
					<center>
						<img src="img/user.png" width="50%" style="border-radius: 50%;width: 200px;height: 200px;padding: 30px">
						<h2>{{auth()->user()->fullname}}</h2>
						<p>
						{{auth()->user()->email}}<br>
						{{auth()->user()->nim}}<br>
						</p>
						<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal{{auth()->user()->id}}">Details
						</button>
					</center>
				</div>
			</div>
		</div>
	</div><br><br><br>

	<!-- USER BIO DETAIL MODAL -->
				
	<div class="modal fade" id="exampleModal{{auth()->user()->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				 <div class="modal-dialog">
					<div class="modal-content">
					    <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Your Data</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					    </div>
					      
					    <div class="modal-body">
					    <form action="/dashboard/user/{{auth()->user()->id}}" method="post">
							@method('put')
							@csrf
					      	<div class="mb-3">
								<label for="id" class="form-label">USER ID</label>
								<input type="text" class="form-control" id="id" name="id" value="{{auth()->user()->id}}" readonly>
								</div>
								<!-- Username -->
								<div class="mb-3">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username" value="{{auth()->user()->username}}">
								</div>
					      
					      		<!-- Fullname -->
						        <div class="mb-3">
									<label for="fullname" class="form-label">Fullname</label>
									<input type="text" class="form-control" id="fullname" name="fullname" value="{{auth()->user()->fullname}}">
								</div>
					     
					    		<!-- NIM -->
						        <div class="mb-3">
									<label for="nim" class="form-label">NIM</label>
									<input type="text" class="form-control" id="nim" name="nim" value="{{auth()->user()->nim}}">			
								</div>
					      
					      		<!-- Email -->
						        <div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}">				
								</div>

								 <div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<input type="password" class="form-control" id="password" name="password" value="{{auth()->user()->password}}" readonly>				
								</div>
					      </div>
					   
					      <div class="modal-footer">
						  	
					        
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

					        <button type="submit" class="btn btn-success" value="edit" name="edit">Save Changes</button>
							
							<!-- @method('delete')
					      	<button type="submit" class="btn btn-danger" value="destroy" name="destroy">Delete Account</button> -->
					        </form>
					      </div>
					    </div>
					  </div>
					</div>
		</div>
	</div>

@endsection