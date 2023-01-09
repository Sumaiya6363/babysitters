
@extends('homepage.layouts.app')
@section('title','Homepage')
@section('content')
    <!--================================= banner -->
    <section class="slider-01">
      <div id="main-slider" class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide align-items-center d-flex bg-overlay-black-50" style="background-image: url({{ asset('home/images')  }}/slider/home-01/02.jpg); background-size: cover; background-position: center center;">
            <div class="swipeinner container">
              <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-md-9 col-sm-10">
                  <div class="slider-1">
                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                      <h1 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">Welcome to Babysitter Menagement System</h1>
                      <h4 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">Find the perfect Babysitter. Book online through our service.</h4>
                      <a href="#" class="animated4 btn btn-primary mt-2" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">Book Now</a>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide align-items-center d-flex bg-overlay-black-50" style="background-image: url({{ asset('home/images')  }}/slider/home-01/01.jpg); background-size: cover; background-position: center center;">
            <div class="swipeinner container">
              <div class="row justify-content-center text-center">
                <div class="col-xl-9 col-md-9 col-sm-10">
                  <div class="slider-1">
                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                      <h1 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">We're the best in town</h1>
                      <div class="animated h4 text-white px-lg-5" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s">
                        <span class="d-inline-block"><i class="fas fa-check-circle text-primary ms-3 me-2 mb-3"></i>Professionals only</span>
                        <span class="d-inline-block"><i class="fas fa-check-circle text-primary ms-3 me-2 mb-3"></i>No booking fees</span>
                        <span class="d-inline-block"><i class="fas fa-check-circle text-primary ms-3 me-2 mb-3"></i>No-hassle booking</span>
                      </div>
                      <a href="#" class="animated4 btn btn-primary mt-2" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">Discover More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-left-arrow"></i>
      </div>
      <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-next"></i></div>
    </section>
    <!--=================================  banner -->

    <!--=================================  Service -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-md-12 ">
            <div class="text-center mb-4 mb-md-5"><img src="{{ asset('home/images')  }}/service/service-logo.png" alt=""></div>
            <div class="section-title text-center">
              <h2 class="title">Explore different types of sitters who provide the services for your requirements.</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel owl-nav-bottom-center" data-nav-dots="true" data-nav-arrow="false" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1"  data-space="30" data-autoheight="true">
              <div class="item">
                <div class="service-style-01">
                    <img class="img-fluid" src="{{ asset('home/images')  }}/service/05.jpg" alt="">
                  <a href="service-detail.html" class="service-title">
                    High school sitters
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="service-style-01">
                  <img class="img-fluid" src="{{ asset('home/images')  }}/service/06.jpg" alt="">
                  <a href="service-detail.html" class="service-title">Mother's helpers</a>
                </div>
              </div>
              <div class="item">
                <div class="service-style-01">
                    <img class="img-fluid" src="{{ asset('home/images')  }}/service/07.jpg" alt="">
                    <a href="service-detail.html" class="service-title">Trustworthy neighbors</a>
                </div>
              </div>
              <div class="item">
                <div class="service-style-01">
                    <img class="img-fluid" src="{{ asset('home/images')  }}/service/12.jpg" alt="">
                    <a href="service-detail.html" class="service-title">Babies and nannies duo</a>
                </div>
              </div>
              <div class="item">
                <div class="service-style-01">
                  <img class="img-fluid" src="{{ asset('home/images')  }}/service/14.jpg" alt="">
                  <a href="service-detail.html" class="service-title">Personal Care</a>
                </div>
              </div>
              <div class="item">
                <div class="service-style-01">
                  <img class="img-fluid" src="{{ asset('home/images')  }}/service/18.jpg" alt="">
                  <a href="service-detail.html" class="service-title">Wealth management</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================================= Service -->

    <!--=================================  About -->
    <section class="space-pt bg-overlay-left">
      <div class="container">
        <div class="row position-relative">
          <div class="col-lg-6">
            <img class="img-fluid b-radius" src="{{ asset('home/images')  }}/about/about-06.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="section-contant">
            <div class="section-title">
              <h2 class="title">We think your little ones justify the very best care.</h2>
              <h6>Connect with sitter near you and find the one that’s right for your baby.</h6>
              <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
            </div>
            <div class="row mb-3 mb-md-5">
              <div class="col-md-6">
                <div class="list">
                  <ul>
                    <li><i class="far fa-circle"></i> Company And Business Setup</li>
                    <li><i class="far fa-circle"></i> Taxation Advisory</li>
                    <li><i class="far fa-circle"></i> Tax Planning Preparation</li>
                    <li><i class="far fa-circle"></i> Accounting Outsourcing</li>
                    <li><i class="far fa-circle"></i> Investment Management</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="list">
                  <ul>
                    <li><i class="far fa-circle"></i> Payroll Outsourcing</li>
                    <li><i class="far fa-circle"></i> Company Management</li>
                    <li><i class="far fa-circle"></i> Acquisitions Consulting</li>
                    <li><i class="far fa-circle"></i> Wealth Management</li>
                    <li><i class="far fa-circle"></i> Private Placement Consulting</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mt-3">
                <div class="author-signature">
                  <img class="img-fluid" src="{{ asset('home/images')  }}/about/signature.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <h6 class="author-name">Michael Jordan</h6>
                <span class="author-designation">CEO & Founder</span>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
    </section>
    <!--=================================  About -->

    <!--=================================   Action-box -->
    <section class="space-ptb">
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
    <!--================================= Action-box -->

    <!--================================= Step -->
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
            <ul class="feature-step-list mt-3">
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
                      <p class="mb-0">We conduct thorough data collection and analysis of your institution’s current strengths and differentiators</p>
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
                      <p class="mb-0">We will work together with you to develop a plan that is actionable, feasible and tailored to your needs</p>
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
                      <p class="mb-0">Our role in this step is to provide expertise where needed, to augment select initiatives as desired</p>
                    </div>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <!--================================= Step -->



    <!--================================= bg-overlay-right -->
    <section class="space-pt bg-overlay-right">
      <div class="container">
        <div class="row position-relative">
          <div class="col-lg-6 order-lg-2">
            <img class="img-fluid b-radius" src="{{ asset('home/images')  }}/about/about-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="section-contant">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="choose-us-tab" data-bs-toggle="tab" href="#choose-us" role="tab" aria-controls="choose-us" aria-selected="true">Why Choose us?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="question-tab" data-bs-toggle="tab" href="#question" role="tab" aria-controls="question" aria-selected="false">Any Question?</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="choose-us" role="tabpanel" aria-labelledby="choose-us-tab">
                <div class="row">
                  <div class="col-md-12">
                    <div class="feature-info left-icon">
                      <div class="feature-info-icon">
                        <i class="flaticon-null"></i>
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Safe communication</h4>
                        <p>Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="feature-info left-icon">
                      <div class="feature-info-icon">
                        <i class="flaticon-resume"></i>
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Notes on user profiles</h4>
                        <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="feature-info left-icon mb-0">
                      <div class="feature-info-icon">
                        <i class="flaticon-user"></i>
                      </div>
                      <div class="feature-info-content">
                        <h4 class="feature-info-title">Profile favorites</h4>
                        <p>I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="question" role="tabpanel" aria-labelledby="question-tab">
                <div class="row">
                  <div class="col-12">
                    <div class="accordion" id="accordion-faq">
                      <div class="card">
                        <div class="accordion-icon card-header" id="headingOne">
                          <h4 class="mb-0">
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              If success is a process with a number of defined steps?
                            </button>
                          </h4>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-faq">
                          <div class="card-body">
                            Having clarity of purpose and a clear picture of what you desire, is probably the single most important factor in achievement. Why is Clarity so important
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="accordion-icon card-header" id="headingTwo">
                          <h4 class="mb-0">
                            <button class="btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Now go push your own limits and succeed?
                            </button>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-faq">
                          <div class="card-body">
                            Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="accordion-icon card-header" id="headingthree">
                          <h4 class="mb-0">
                            <button class="btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                              What is the first step in any process?
                            </button>
                          </h4>
                        </div>
                        <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-bs-parent="#accordion-faq">
                          <div class="card-body">
                            So, there you have it; the six steps that will help you to the fabled land of achievement and success! You now have the opportunity to push ahead and reach your potential.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================================= bg-overlay-right -->

    <!--================================= Testimonial -->
    <section class="space-pt space-sm-pb">
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
    <!--================================= Testimonial -->

    <!--================================= Team -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div class="section-title text-center">
              <h2 class="title">Team of fully vetted sitter professionals for all your needs</h2>
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
                <span class="team-label">Care Services</span>
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
                <span class="team-label">Child Development</span>
                <div class="team-content">
                  This is the beginning of creating the life that you want to live
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team">
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
                <span class="team-label">Youth Services</span>
                <div class="team-content">
                  You will drift aimlessly until you arrive back at the original dock
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-md-5 mt-0">
          <div class="col-12 text-center">
            <a href="" class="btn btn-primary btn-arrow">View all Sitters <i class="flaticon-next"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!--================================= Team -->



@endsection
