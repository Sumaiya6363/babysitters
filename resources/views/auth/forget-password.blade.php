@extends('homepage.layouts.app')
@section('title','Login')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Forget Password</h2>
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
            <!-- Session Status -->
           <span class="text-success">{{session('status')}}</span>

          <div class="m-auto p-4 bg-white" style="max-width: 400px; border-radius: 10px; box-shedow: 0 1px 8px 0 rgb(201 201 201 / 50%); borer: solid 1px #e6e6e6;">
            <form class="row mt-4 mb-5 align-items-center" action="{{route('forget.password.post')}}" method="post" enctype="multipart/form-data">
              @csrf
              
                <div class="mb-3 col-12">
                  <label class="form-label">Email Address : <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" value="{{old('email')}}">
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>


                <div class="col-12">
                  <div class="row">
                    <div class="col-12">
                      <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Process</button>
                      </div>
                    </div>
                    <div class="col-12 pt-3">
                      <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                        <li class="me-1"><a href="{{ route('user.login') }}" class="text-dark">Have an Accoutn ? Click here to Sign In</a></li>
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

