@extends('homepage.layouts.app')
@section('title','User Sign Up')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">User Register</h2>
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
          <div class="m-auto p-4 bg-white" style="max-width: 700px; border-radius: 10px; box-shedow: 0 1px 8px 0 rgb(201 201 201 / 50%); borer: solid 1px #e6e6e6;">
            <form class="row mt-4 mb-5 align-items-center" action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                <div class="text-danger">{{  $errors->first('name') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                <div class="text-danger">{{  $errors->first('email') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Mobile Number</label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" value="{{ old('mobile') }}">
                <div class="text-danger">{{  $errors->first('mobile') }}</div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ old('address') }}">
                <div class="text-danger">{{  $errors->first('address') }}</div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
                <div class="text-danger">{{  $errors->first('password') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                <div class="text-danger">{{  $errors->first('password_confirmation') }}</div>
            </div>


                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                      </div>

                      <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                        <li class="me-1"><a href="{{route('login')}}" class="text-dark">Have an Accoutn ? Click here to Login</a></li>
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



{{-- <form class="custom-form" action="{{ route('register') }}" name="contactform" id="" method="POST">
    @csrf
    <fieldset>
        <div class="row">
            <div class="col-sm-12">
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                <div class="text-warning">{{  $errors->first('name') }}</div>
            </div>
            <div class="col-sm-12">
                <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                <div class="text-warning">{{  $errors->first('email') }}</div>
            </div>
            <div class="col-sm-12">
                <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" value="{{ old('mobile') }}">
                <div class="text-warning">{{  $errors->first('phone') }}</div>
            </div>
            <div class="col-sm-12">
                <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}">
                <div class="text-warning">{{  $errors->first('password') }}</div>
            </div>
            <div class="col-sm-12">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                <div class="text-warning">{{  $errors->first('password_confirmation') }}</div>
            </div>
            <div class="col-sm-12">
                <input type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}">
                <div class="text-warning">{{  $errors->first('address') }}</div>
            </div>


        <div class="clearfix"></div>
        <button type="submit" class="btn float-btn flat-btn color-bg" id="submit_cnt">Register <i class="fal fa-long-arrow-right"></i></button>
    </fieldset>
</form> --}}
