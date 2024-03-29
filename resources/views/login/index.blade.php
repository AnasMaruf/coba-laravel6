@extends('layouts.main')
@section('container')
<body class="text-center">
<div class="row justify-content-center ">
<div class="col-lg-4 mt-4">
<main class="form-signin">
  <form action="/login" method="POST" >
    @csrf
    <h1 class="h3 fw-normal mt-2">Login Form</h1>
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
    <div class="form-floating mt-3">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
    <small class="d-block text-center mt-3">Not registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
  </form>
</main>
</div>
</div>
</body>
@endsection