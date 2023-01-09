@extends('homepage.layouts.app')
@section('title','Login')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Login</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Login -->
    <section class="space-ptb login p-3" style="background: #F0F0F7;">
      <div class="container">
        <div class="row">
          <div class="m-auto p-4 bg-white" style="max-width: 400px; border-radius: 10px; box-shedow: 0 1px 8px 0 rgb(201 201 201 / 50%); borer: solid 1px #e6e6e6;">
            <form class="row mt-4 mb-5 align-items-center" action="{{route('login')}}" method="post" enctype="multipart/form-data">
              @csrf



                <div class="mb-3 col-12">
                  <label class="form-label">Email Address : <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" value="{{old('email')}}">
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>

                <div class="mb-3 col-12">
                  <label class="form-label">Password: <span class="text-danger">*</span></label>
                  <input type="Password" class="form-control" name="password">
                  <span class="text-danger">{{$errors->first('password')}}</span>
                    <div style="text-align: right" class="mt-2">
                      <a href="{{ route('forget.password') }}" class="text-dark">Forget Password</a>
                    </div>
        
                </div>


                <div class="col-12">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Sign In</button>
                      </div>
                    </div>
                    <div class="col-12 pt-3">
                      <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                        <li class="me-1"><a href="{{ route('user.register') }}" class="text-dark">Don't Have an Accoutn ? Click here to Sign Up</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Login -->



@endsection()



{{-- <form class="form-body" method="POST" action="{{ route('login') }}">
  @csrf

  <div class="row g-3">
    <div class="col-12">
      <label for="inputEmailAddress" class="form-label">Email Address</label>
      <div class="ms-auto position-relative">
        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address">
        <div class="text-danger">{{ $errors->first('email') }}</div>
      </div>
    </div>
    <div class="col-12">
      <label for="inputChoosePassword" class="form-label">Enter Password</label>
      <div class="ms-auto position-relative">
        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
        <input type="password"  name="password" value="{{ old('password') }}" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
        <div class="text-danger">{{ $errors->first('password') }}</div>
      </div>
    </div>
    <div class="col-6">
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
      </div>
    </div>
    <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
    </div>
    <div class="col-12">
      <div class="d-grid">
        <button type="submit" class="btn btn-primary radius-30">Sign In</button>
      </div>
    </div>

  </div>
</form> --}}
