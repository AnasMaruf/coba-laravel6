@extends('layouts.main')
@section('container')
<body class="text-center">
<div class="row justify-content-center ">
<div class="col-lg-4 mt-4">
<main class="form-signin">
  <form action="/login" method="POST" >
    @csrf
    <h1 class="h3 mb-3 fw-normal">Register Form</h1>
    <div class="form-floating">
      <input type="text" class="form-control @error('Fullname') is-invalid @enderror" id="Fullname" name="Fullname">
      <label for="Fullname">Fullname</label>
      @error('Fullname')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username">
      <label for="username">Username</label>
      @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
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
    <div class="form-floating">
      <input type="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror" id="confirmPassword" name="confirmPassword">
      <label for="confirmPassword">Confirm Password</label>
      @error('confirmPassword')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    <small class="d-block text-center mt-3">Already registered? <a href="/login" class="text-decoration-none">Login!</a></small>
  </form>
</main>
</div>
</div>
</body>
@endsection