@extends('layouts.simple')

@section('content')

<!-- Page Content -->
<div class="bg-image" style="background-image: url({{ asset('media/photos/photo22@2x.jpg') }});">
    <div class="row g-0 bg-primary-op">
      <!-- Main Section -->
      <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
        <div class="p-3 w-100">
          <!-- Header -->
          <div class="mb-3 text-center">
            <a class="link-fx fw-bold fs-1" href="#">
              <span class="text-dark">Dash</span><span class="text-primary">mix</span>
            </a>
            <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
          </div>
          <!-- END Header -->

          <!-- Sign In Form -->
          <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
          <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
          <div class="row g-0 justify-content-center">
            <div class="col-sm-8 col-xl-6">
              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="py-3">
                  <div class="mb-4">
                    <input 
                        type="email" 
                        class="form-control form-control-lg form-control-alt" 
                        id="email" 
                        name="email" 
                        placeholder="Username"
                        value="{{ old('email') }}"
                    >
                  </div>
                  <div class="mb-4">
                    <input 
                        type="password" 
                        class="form-control form-control-lg form-control-alt" 
                        id="password" 
                        name="password" 
                        placeholder="Password"
                        value="{{ old('password') }}"
                    >
                  </div>
                  @error('name')
                    <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                        <div class="flex-grow-1 me-3">
                        <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                        </div>
                        <div class="flex-shrink-0">
                        <i class="fa fa-fw fa-times-circle"></i>
                        </div>
                    </div>                      
                  @enderror

                </div>
                <div class="mb-4">
                  <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                    <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                  </button>
                  <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                    <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="#">
                      <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Forgot password
                    </a>
                    <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('register') }}">
                      <i class="fa fa-plus opacity-50 me-1"></i> New Account
                    </a>
                  </p>
                </div>
              </form>
            </div>
          </div>
          <!-- END Sign In Form -->
        </div>
      </div>
      <!-- END Main Section -->

      <!-- Meta Info Section -->
      <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
        <div class="p-3">
          <p class="display-4 fw-bold text-white mb-3">
            Welcome to the future
          </p>
          <p class="fs-lg fw-semibold text-white-75 mb-0">
            Copyright &copy; <span data-toggle="year-copy"></span>
          </p>
        </div>
      </div>
      <!-- END Meta Info Section -->
    </div>
  </div>
  <!-- END Page Content -->

@endsection