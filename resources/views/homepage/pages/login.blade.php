@extends('homepage.layouts.app')
@section('title','Login')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ol>
            <h2 class="inner-banner-title">Login</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Login -->
    <section class="space-ptb login">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-sm-10">
            <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form class="row mt-4 align-items-center">
                  <div class="mb-3 col-sm-12">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <label class="form-label">Password:</label>
                    <input type="Password" class="form-control" placeholder="">
                  </div>
                  <div class="col-sm-6">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3 justify-content-sm-end">
                      <li class="me-1"><a class="text-dark" href="#">Don't have an account? Click here</a></li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form class="row mt-4 mb-5 align-items-center">
                  <div class="mb-3 col-sm-12">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <label class="form-label">Email Address:</label>
                    <input type="email" class="form-control" placeholder="">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <label class="form-label">Password:</label>
                    <input type="Password" class="form-control" placeholder="">
                  </div>
                  <div class="mb-3 col-sm-12">
                    <label class="form-label">Confirm Password:</label>
                    <input type="Password" class="form-control" placeholder="">
                  </div>
                  <div class="col-sm-6">
                    <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                      <li class="me-1"><a href="#">Already Registered User? Click here to login</a></li>
                    </ul>
                  </div>
                </form>
                <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
                  <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
                  <form class="row">
                    <div class="col-sm-6">
                      <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                    </div>
                    <div class="col-sm-6">
                      <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                    </div>
                    <div class="col-sm-6">
                      <a class="btn instagram-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-instagram"></i>Login with Instagram</span></a>
                    </div>
                    <div class="col-sm-6">
                      <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Login -->

    <!--=================================
    Action-box -->
    <section class="space-pb">
      <div class="container">
        <div class="callout">
          <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7 col-md-9">
              <div class="callout-title">
                <h3>Are you looking for baby sitter just call us!</h3>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
              <img class="img-fluid" src="images/action-box-arrow.png" alt="">
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
              <div class="callout-botton">
                <a href="tel:7042791249" class="btn btn-md btn-primary"><i class="fas fa-headset"></i>+(704) 279-1249</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Action-box -->


@endsection()
