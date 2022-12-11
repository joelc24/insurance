@extends('layouts.simple')


@section('content')
    
 <!-- Page Content -->
 <div class="bg-image" style="background-image: url({{ asset('/media/photos/photo12@2x.jpg') }});">
    <div class="row g-0 justify-content-center bg-black-75">
      <!-- Main Section -->
      <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
        <div class="p-3 w-100">
          <!-- Header -->
          <div class="mb-3 text-center">
            <a class="link-fx fw-bold fs-1" href="index.html">
              <span class="text-dark">Dash</span><span class="text-primary">mix</span>
            </a>
            <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
          </div>
          <!-- END Header -->

          <!-- Sign Up Form -->
          <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
          <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
          <div class="row g-0 justify-content-center">
            <div class="col-sm-8 col-xl-6">
              <form action="{{ route('register') }}" method="POST">
                <div class="py-3">
                  <div class="mb-4">
                    <input type="text" class="form-control form-control-lg form-control-alt" id="name" name="name" placeholder="Username">
                  </div>
                  <div class="mb-4">
                    <input type="email" class="form-control form-control-lg form-control-alt" id="email" name="email" placeholder="Email">
                  </div>
                  <div class="mb-4">
                    <input type="password" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="Password Confirm">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms">
                      <label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                    </div>
                  </div>
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

                <div class="mb-4">
                  <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                    <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
                  </button>
                  <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                    <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('login') }}">
                      <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                    </a>
                    <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                      <i class="fa fa-book opacity-50 me-1"></i> Read Terms
                    </a>
                  </p>
                </div>
              </form>
            </div>
          </div>
          <!-- END Sign Up Form -->
        </div>
      </div>
      <!-- END Main Section -->
    </div>

  </div>
  <!-- END Page Content -->

@endsection