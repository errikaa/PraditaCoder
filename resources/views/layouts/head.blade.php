<!DOCTYPE html>
<head>
    <title>Pradita Coder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('css/index.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
    <!--NAVBAR-->	
	<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="padding: 10px;background-color: #38475b;">
	
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;font-size: 24px;color: #f7bd66">PraditaCoder.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item bold">
                        <a class="nav-link text-white" aria-current="true" href="/">Home</a>
                </li>
                <li class="nav-item bold">
                        <a class="nav-link text-white" href="/courses">Courses</a>
                </li>
                <li class="nav-item bold">
                        <a class="nav-link text-white"  href="/tips">Tips & Trick</a>
                </li>
                <li class="nav-item bold">
                        <a class="nav-link text-white" href="/events">Events</a>
                </li>		        
                <li class="nav-item bold">
                        <a class="nav-link text-white" href="/joinus">Join Us</a>
                </li>    
            </ul>

                @auth
                    <button class="btn nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" style="text-decoration: none;font-weight: bold;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{auth()->user()->username}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="far fa-user-circle"></i> &nbspProfile</a></li>
                            <li><a class="dropdown-item" href="/dashboard/enroll"><i class="fas fa-stream"></i> &nbspEnrolled Courses</a></li>    
                        </ul>
                    </button>
                
                <!-- <button class="btn" style="border: none;"><a style="text-decoration: none;font-weight: bold;" class="text-white" href="/dashboard">{{auth()->user()->username}} Dashboard</a></button>
                <button class="btn" style="border: none;"><a style="text-decoration: none;font-weight: bold;" class="text-white" href="/dashboard/enroll">Enrolled Courses</a></button> -->

                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-warning" type="submit" style="border: none;border-radius: 10px"><i class="fas fa-sign-out-alt"></i> <a style="text-decoration: none;" class="text-black" onclick="return confirm('Are you sure to sign out?')">Sign Out</a></button>
                </form>
                @else
                    <button class="btn btn-warning" style="border: none;border-radius: 10px"><i class="fas fa-sign-in-alt"></i> <a style="text-decoration: none;" class="text-black" href="/login">Sign In</a></button>
                @endauth
            </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('container')
    </div>

    <div style="background-color: #38475b;">
		<br><br>
		<div class="container white">
			<div class="row">
				<div class="col-sm-4">
					<h5>Pradita University</h5>
					<p><i class="fas fa-map-marker-alt"></i> Scientia Business Park, Jl. Gading Serpong Boulevard No.1, Curug Sangereng, Kelapa Dua, Tangerang, Banten 15810</p>
				</div>

				<div class="col-sm-4">
					<h5>Links</h5>
					<p>
						<a class="text-white" href="https://elearning.pradita.ac.id/">E-learning Pradita</a><br>
						<a class="text-white" href="https://siakad.pradita.ac.id/">SIAKAD Pradita</a>
					</p>
					
				</div>

				<div class="col-sm-4">
					<h5>Contact Us</h5>
					<form method="post" action="/">
                        @csrf
						<input type="email" class="form-control" name="email" placeholder="email"><br>
						<textarea name="message" class="form-control" rows="4" placeholder="type a message"></textarea><br>
						<input type="submit" name="btncontact" class="btn btn-outline-light" style="float: right;width: 150px;" value="Send">

					</form>
				</div>

			</div>
		</div>
		<br><br><br>
	</div>
</body>
</html>