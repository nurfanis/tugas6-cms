@extends('layouts.master')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-4">

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

    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center mt-3">Please Login</h1>

      <form action="{{ route('do.login') }}" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="floatingInput">Email address</label>
          @error('email')
          <div class="div invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <small class="d-block text-center mt-3">Belum Registrasi?? <a href="/register">Registrasi sekarang yuuk!</a></small>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
      </form>

    </main>

  </div>
</div>


@endsection