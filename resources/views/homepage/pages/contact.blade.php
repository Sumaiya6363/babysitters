@extends('homepage.layouts.app')
@section('title','Contact')
@section('content')

     <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Contact us</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    map -->
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="form-dark contact-form">
              <h4>Need assistance? please complete the contact form</h4>
                 <form class="mt-4" action="{{route('contact.store')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="mb-3 col-12">
                      <input type="text" class="form-control" name="name" id="Username" placeholder="Name" value="{{old('name')}}">
                      <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>
                    <div class="mb-3 col-12">
                      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email" >
                      <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                    <div class="mb-3 col-12">
                      <input type="text" class="form-control" id="phone" placeholder="Mobile Number" name="mobile" value="{{old('mobile')}}">
                      <span class="text-danger">{{$errors->first('phone')}}</span>
                    </div>
                    <div class="col-12 mb-0">
                      <textarea rows="4" class="form-control" id="sector" placeholder="Message" name="message">{{old('message')}}</textarea>
                      <span class="text-danger">{{$errors->first('message')}}</span>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary" href="#">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
          </div>
          <div class="col-md-8">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d651276.8223302028!2d-112.26948898677708!3d40.713748022764676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8752f530948459a5%3A0x5ea5d81be1facaf0!2sEnvato%20Usa%2C%20Inc!5e0!3m2!1sen!2sin!4v1573620281166!5m2!1sen!2sin" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    map -->

    <!--=================================
    Service -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12 ">
            <div class="section-title text-center">
              <h2 class="title">Let’s get in touch!</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info text-center">
              <div class="feature-info-icon">
                <i class="flaticon-placeholder"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Address</h4>
                <span>{{$websetting->address}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="feature-info text-center">
              <div class="feature-info-icon">
                <i class="flaticon-phone"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Phone</h4>
                <span>{{$websetting->mobile}}</span>
       
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="feature-info text-center">
              <div class="feature-info-icon">
                <i class="flaticon-envelope"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title">Email</h4>
                <span>{{$websetting->email}}</span>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Service -->

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
              <img class="img-fluid" src="{{ asset('home/images')  }}/action-box-arrow.png" alt="">
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
