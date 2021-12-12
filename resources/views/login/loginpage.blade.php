@extends('layouts.head')
@section('container')
    <div class="container"><br><br>
        <div class="row">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                <center><h1 class="dark bold">Sign In to PraditaCoder</h1></center>

                <form action="/login" method="post"><br><br>
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="Username">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div><br><br>

                    <center><input type="submit" class="btn btn-outline-dark" style="width: 150px;" name="login" value="Log In">
                    <br><br>
                    <p>Didn't have an account?<a href="/signup"> Sign Up</a></p></center>
                    <br><br><br><br><br><br><br><br><br><br>
                </form>
            
        </div>
    </div>
 
@endsection