@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="post">
            
                    @csrf
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror rounded-top" name="name" id="name" placeholder="name" value="{{ old('name') }}" required>
                    <label for="name">name</label>
                </div>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" value="{{ old('username') }}" required>
                    <label for="username">username</label>
                </div>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <label for="email">Email address</label>
                </div>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>

    
@endsection