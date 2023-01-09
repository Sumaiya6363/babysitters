@extends('homepage.layouts.app')
@section('title','About Us')
@section('content')



     <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">About us</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Browse properties -->
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-sm-12">
            <div class="section-title">
              <h2 class="title">Professional senior and baby care, whenever you need it</h2>
              <h6>We This is perhaps the single biggest obstacle that all of us must overcome successful.</h6>
              <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
            </div>
            <a class="about-video popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0">
              <div class="video">
                <img class="img-fluid" src="{{ asset('home/images')  }}/service/01.jpg" alt="">
                <span><i class="flaticon-play-button"></i></span>
              </div>
              <span>See our video</span>
            </a>
          </div>
          <div class="col-lg-7 mt-lg-0 mt-5 position-relative">
            <div class="counter-section">
              <div class="row position-relative">
                <div class="col-lg-6 col-sm-6">
                  <div class="counter">
                      <div class="counter-icon">
                        <i class="flaticon-planet-earth"></i>
                      </div>
                      <div class="counter-content">
                        <span class="timer" data-to="650" data-speed="1000">650</span>
                        <label class="form-label">Worldwide Branches</label>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="counter">
                      <div class="counter-icon">
                        <i class="flaticon-miscellaneous"></i>
                      </div>
                      <div class="counter-content">
                        <span class="timer" data-to="100" data-speed="1000">100</span>
                        <label class="form-label">Verified sitters</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row position-relative">
                <div class="col-lg-6 col-sm-6">
                  <div class="counter mb-sm-0 mb-4">
                      <div class="counter-icon">
                      <i class="flaticon-conversation"></i>
                    </div>
                      <div class="counter-content">
                        <span class="timer" data-to="30" data-speed="1000">30</span>
                        <label class="form-label">Local Partners</label>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <div class="counter mb-0">
                      <div class="counter-icon">
                      <i class="flaticon-care"></i>
                    </div>
                      <div class="counter-content">
                        <span class="timer" data-to="1500" data-speed="1000">1500</span>
                        <label class="form-label">Happy client</label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Browse properties -->

    <!--=================================
    feature-box -->
    <section class="space-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info-box text-center bg-dark mb-4 mb-md-0">
              <div class="feature-info-icon text-white">
                <i class="flaticon-target"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title text-white">Our Mission</h4>
                <p class="m-0 text-white">Remind yourself you have nowhere to go you have already been at the bottom.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-box text-center bg-primary mb-4 mb-md-0">
              <div class="feature-info-icon">
                <i class="flaticon-eye"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title text-dark">Our Vision</h4>
                <p class="m-0">Give yourself the power Remind yourself the only thing stopping you is yourself.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info-box text-center">
              <div class="feature-info-icon">
                <i class="flaticon-business-and-finance"></i>
              </div>
              <div class="feature-info-content">
                <h4 class="feature-info-title text-dark">Our Company</h4>
                <p class="m-0">What drives me? The thing that drives me most is the desire to find my extend them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    feature-box -->

    <!--=================================
    Team -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12">
            <div class="section-title text-center">
              <h2 class="title">A professional & friendly care provider</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="team">
              <div class="team-image">
                <img class="img-fluid" src="{{ asset('home/images')  }}/team/team-01.jpg" alt="">
              </div>
              <div class="team-detail">
                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div>
                <h4 class="team-title"><a href="team-single.html">Anne Smith</a></h4>
                <span class="team-label">Babysitter</span>
                <div class="team-content">
                  The bottom line is that we must shed the bad and replace with good beliefs.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team">
              <div class="team-image">
                <img class="img-fluid" src="{{ asset('home/images')  }}/team/team-02.jpg" alt="">
              </div>
              <div class="team-detail">
                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div>
                <h4 class="team-title"><a href="team-single.html">John Doe</a></h4>
                <span class="team-label">Child Care Services</span>
                <div class="team-content">
                  This is the beginning of creating the life that you want to live.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team mb-0">
              <div class="team-image">
                <img class="img-fluid" src="{{ asset('home/images')  }}/team/team-03.jpg" alt="">
              </div>
              <div class="team-detail">
                <div class="team-social">
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div>
                <h4 class="team-title"><a href="team-single.html">Mellissa Doe</a></h4>
                <span class="team-label">Child Development</span>
                <div class="team-content">
                  You will drift aimlessly until you arrive back at the original dock.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Team -->

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

    <!--=================================
    Testimonial -->
    <section>
      <div class="container">
        <div class="row m-0 justify-content-center">
          <div class="col-md-12">
            <div class="owl-carousel testimonial-center owl-nav-bottom-center" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoheight="true">
              <div class="item">
                <div class="testimonial">
                  <div class="avatar avatar-lg">
                    <img class="img-fluid " src="{{ asset('home/images')  }}/avatar/04.jpg" alt="">
                  </div>
                  <div class="testimonial-info">
                    <div class="testimonial-quote">
                      <i class="flaticon-left-quote"></i>
                    </div>
                    <div class="testimonial-content">
                      Excellent Customer support! These guys reply within minutes sometimes and really help you with when you need them. The theme itself is very extended as well. Happy with my purchase!
                    </div>
                    <div class="testimonial-name">
                      <h6>Felica Queen</h6>
                      <span class="text-muted">- CEO</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial">
                  <div class="avatar avatar-lg">
                    <img class="img-fluid " src="{{ asset('home/images')  }}/avatar/05.jpg" alt="">
                  </div>
                  <div class="testimonial-info">
                    <div class="testimonial-quote">
                      <i class="flaticon-left-quote"></i>
                    </div>
                    <div class="testimonial-content">
                      I had a few things I needed help with on this theme... Their customer service was amazing and helped me out many times. One of the complete themes with different requirements.
                    </div>
                    <div class="testimonial-name">
                      <h6>Sara Lisbon</h6>
                      <span class="text-muted">- CTO</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial">
                  <div class="avatar avatar-lg">
                    <img class="img-fluid " src="{{ asset('home/images')  }}/avatar/06.jpg" alt="">
                  </div>
                  <div class="testimonial-info">
                    <div class="testimonial-quote">
                      <i class="flaticon-left-quote"></i>
                    </div>
                    <div class="testimonial-content">
                      One of the most complete themes here. Thanks a lot for such great features, pages, shortcodes and home variations. And the best of all, great introductions prices.
                    </div>
                    <div class="testimonial-name">
                      <h6>Alice Williams</h6>
                      <span class="text-muted">- Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Testimonial -->

    <!--=================================
    Clients -->
    <section class="clients-section-02 space-sm-ptb">
      <div class="container">
        <div class="row our-clients align-items-center">
          <div class="col-lg-3 col-md-4 col-sm-5">
            <h4>As Featured In...</h4>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="owl-carousel testimonial-center owl-nav-bottom-center" data-nav-arrow="false" data-items="4" data-md-items="2" data-sm-items="2" data-xs-items="2" data-xx-items="1" data-space="40" data-autoheight="true">
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/01.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/02.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/03.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/04.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/05.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/06.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/07.svg" alt="">
              </div>
              <div class="item">
                <img class="img-fluid center-block mx-auto" src="{{ asset('home/images')  }}/client/05.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Clients -->


@endsection
