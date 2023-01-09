@extends('homepage.layouts.app')
@section('title','Services')
@section('content')
       <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="inner-banner-title">Sitter</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->


    <!--=================================
    Service -->
    <section class="space-pb pt-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12 ">
            <div class="section-title text-center">
              <h2 class="title">Explore different types of sitters who provide the services for your requirements.</h2>
            </div>
          </div>
        </div>
        <div class="row">
            @foreach ($sitters as $item)
          <div class="col-md-4">
            <div class="service-style-01 mb-5">
                <img class="img-fluid w-100" src="{{asset($item->sitter ? $item->sitter->image : '')}}" alt="">
                {{-- <a href="{{route('sitter.request',['id'=>$item->id])}}" class="service-title">{{$item->name}} <br> Charge : {{$item->sitter ? $item->sitter->user_salary : ''}} tk</a> --}}
                <a href="{{route('sitter.details',['id'=>$item->id])}}" class="service-title">{{$item->name}} <br> Charge : {{$item->sitter ? $item->sitter->approved_salary : ''}} tk</a>

            </div>
          </div>
          @endforeach
          {{-- <div class="col-md-4">
            <div class="service-style-01 mb-5">
                <img class="img-fluid" src="{{ asset('home/images')  }}/service/06.jpg" alt="">
                <a href="service-detail.html" class="service-title">Mother's helpers</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-style-01 mb-5">
                <img class="img-fluid" src="{{ asset('home/images')  }}/service/07.jpg" alt="">
                <a href="service-detail.html" class="service-title">Baby sitting</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-style-01 mb-md-0 mb-5">
                <img class="img-fluid" src="{{ asset('home/images')  }}/service/11.jpg" alt="">
               <a href="service-detail.html" class="service-title">Child care</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-style-01 mb-md-0 mb-5">
                <img class="img-fluid" src="{{ asset('home/images')  }}/service/12.jpg" alt="">
                <a href="service-detail.html" class="service-title">Home help</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-style-01 mb-0">
              <img class="img-fluid" src="{{ asset('home/images')  }}/service/13.jpg" alt="">
              <a href="service-detail.html" class="service-title">Personal care</a>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
    <!--=================================
    Service -->

    <!--=================================
    Step -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12 ">
            <div class="section-title text-center">
              <h2 class="title">Easy process to reach us!</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="feature-step-list">
                <li>
                  <div class="feature-step text-center">
                    <div class="feature-step-divider">
                      <div class="feature-step-icon">
                        <span class="feature-step-number">1</span>
                        <i class="flaticon-file"></i>
                      </div>
                    </div>
                    <div class="feature-info-content">
                      <h4 class="feature-info-title">Register online</h4>
                      <p class="mb-0">Remind yourself you have nowhere to go except up as you have already been at the bottom.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="feature-step text-center">
                    <div class="feature-step-divider">
                      <div class="feature-step-icon">
                        <span class="feature-step-number">2</span>
                        <i class="flaticon-conversation"></i>
                      </div>
                    </div>
                    <div class="feature-info-content">
                      <h4 class="feature-info-title">We will call</h4>
                      <p class="mb-0">What drives me? The thing that drives me most is the desire to find my limits–and extend them.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="feature-step text-center">
                    <div class="feature-step-divider">
                      <div class="feature-step-icon">
                        <span class="feature-step-number">3</span>
                        <i class="flaticon-hiring"></i>
                      </div>
                    </div>
                    <div class="feature-info-content">
                      <h4 class="feature-info-title">Enjoy your freedom</h4>
                      <p class="mb-0">For those of you who are serious about having more, doing more, giving more and being more,</p>
                    </div>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Step -->

@endsection
