<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>@yield('title') - Baby Sitter  </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

         <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&amp;display=swap" >

        <!-- CSS Global Compulsory (Do not remove)-->
        <link rel="stylesheet" href="{{ asset('home') }}/css/font-awesome/all.min.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/flaticon/flaticon.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/bootstrap/bootstrap.min.css" />

        <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
        <link rel="stylesheet" href="{{ asset('home') }}/css/select2/select2.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/range-slider/ion.rangeSlider.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/owl-carousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="{{asset('home')}}/css/slick/slick-theme.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/swiper/swiper.min.css" />
        <link rel="stylesheet" href="{{ asset('home') }}/css/animate/animate.min.css"/>

        <!-- Template Style -->
        <link rel="stylesheet" href="{{ asset('home') }}/css/style.css" />
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('home') }}/{{ asset('home/images')  }}/logo.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />

        @stack('css')

    </head>
    <body>

    <!--================================= header -->
    <header class="header default">
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="me-3 d-inline-block">
                  <a href=""><i class="far fa-envelope me-2 fa-flip-horizontal"></i>info@babysitters.com</a>
                </div>
                <div class="me-auto d-inline-block">
                  <a href="tel:1-800-555-1234"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i>+8801779325718</a>
                </div>
                <div class="d-inline-block me-3">
                  <ul class="list-unstyled">
                    @guest
                    <li class="login"><a href="{{route('login')}}">Login</a></li>
                    <li class="login"><a href="{{route('user.register')}}">User Register</a></li>
                    <li><a href="{{route('sitter.register')}}">Sitter Register</a></li>
                    @endguest
                    @auth
                      <li class="login">
                        <form action="{{route('logout')}}" method="post">
                          @csrf
                          <button type="submit" style="background: none; border:none; color: #ffffff;">Logout</button>
                        </form>
                      </li>
                      @if (Auth::user()->is_admin == 'admin')
                      <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                      @elseif(Auth::user()->is_admin == 'user')
                      <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                      @elseif(Auth::user()->is_admin == 'sitter')
                      <li><a href="{{route('sitter.dashboard')}}">Dashboard</a></li>
                      @endif

                    @endauth
                  </ul>
                </div>
                <div class="social d-inline-block">
                  <ul class="list-unstyled">
                    <li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"> <i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"> <i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"> <i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container">
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="{{ route('homepage') }}">
            <img class="img-fluid logo" src="{{asset($websetting->logo)}}"" alt="Main logo">
            <img class="img-fluid logo-sticky" src="{{ asset('home/images')  }}/logo-dark.svg" alt="Logo responsive and sticky">
          </a>
          <div class="navbar-collapse collapse justify-content-center">
            <ul class="nav navbar-nav">
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="{{ route('homepage') }}">Home </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('blogs') }}">Blogs</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('shops') }}">Shops</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('services') }}">Our Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('contact') }}">Contact Us</a>
              </li>

            </ul>
          </div>
          <div class="add-listing">
            <a class="btn btn-primary btn-sm" href="{{route('sitter')}}">Book Sitter</a>
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
     header -->

      @yield('content')

    <!--=================================
    footer-->
    <footer class="footer footer-01 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="footer-contact-info">
              <h5 class="text-primary">Contact Information</h5>
              <p class="text-white">{{$websetting->footer_text}}</p>
              <ul class="list-unstyled mb-0" style="background-image: url({{ asset('home/images')  }}/google-map.png);">
                <li><i class="fa fa-map-signs"></i><span>{{$websetting->address}}</span></li>
                <li><i class="fa fa-microphone"></i><span>{{$websetting->mobile}}</span></li>
                <li><i class="fa fa-headphones"></i><span>{{$websetting->email}}</span></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-4 mt-4 mt-md-0">
            <div class="footer-link">
              <h5 class="text-primary">Useful Links</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="{{ route('homepage') }}">Home </a>
                </li>
                <li >
                  <a  href="{{ route('about') }}">About Us</a>
                </li>
                <li >
                  <a  href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li>
                  <a href="{{ route('shops') }}">Shops</a>
                </li>
                <li>
                  <a href="{{ route('services') }}">Our Services</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>
             
            </div>
          </div>
          {{-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="footer-recent-List">
              <h5 class="text-primary">Recent Post</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <div class="footer-recent-list-item">
                    <img class="img-fluid" src="{{ asset('home/images')  }}/blog/recent-post-01.jpg" alt="">
                    <div class="footer-recent-list-item-info">
                      <span class="date">September 19, 2020</span>
                      <h6 class="text-white"><a class="title font-sm" href="blog-detail.html">Top 10 best Babysitting Website in the UK</a></h6>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="footer-recent-list-item">
                    <img class="img-fluid" src="{{ asset('home/images')  }}/blog/recent-post-02.jpg" alt="">
                    <div class="footer-recent-list-item-info">
                      <span class="date">May 23, 2020</span>
                      <h6 class="text-white"><a class="title font-sm" href="blog-detail.html">How to Find a Babysitter for New Year’s Eve</a></h6>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="footer-recent-list-item">
                    <img class="img-fluid" src="{{ asset('home/images')  }}/blog/recent-post-03.jpg" alt="">
                    <div class="footer-recent-list-item-info">
                      <span class="date">january 01, 2020</span>
                      <h6 class="text-white"><a class="title font-sm" href="blog-detail.html">Fun Things To Do During Your summer vacation</a></h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div> --}}
          <div class="col-12 col-md-4 mt-4 mt-lg-0">
            <h5 class="text-primary">Subscribe Us</h5>
            <div class="footer-subscribe">
              <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
              <form action="{{route('subscribe')}}" method="post">
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email*" name="email">
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <button type="submit" class="btn btn-white">Get Notified</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 text-center text-md-start">
              <a href="{{route('homepage')}}"><img class="img-fluid footer-logo" src="{{ asset($websetting->footer_logo)  }}" alt=""></a>
            </div>
            <div class="col-md-2 text-center my-3 mt-md-0 mb-md-0">
              <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
            </div>
            <div class="col-md-5 text-center copyright text-md-end">
              <p class="mb-0 text-white"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="">Baby Sitters </a> All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================footer-->



         <!-- JS Global Compulsory (Do not remove)-->
        <script src="{{ asset('home') }}/js/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('home') }}/js/popper/popper.min.js"></script>
        <script src="{{ asset('home') }}/js/bootstrap/bootstrap.min.js"></script>

        <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
        <script src="{{ asset('home') }}/js/jquery.appear.js"></script>
        <script src="{{ asset('home') }}/js/counter/jquery.countTo.js"></script>
        <script src="{{ asset('home') }}/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{ asset('home') }}/js/swiper/swiper.min.js"></script>
        <script src="{{ asset('home') }}/js/swiperanimation/SwiperAnimation.min.js"></script>

        <!-- Template Scripts (Do not remove)-->
        <script src="{{ asset('home') }}/js/custom.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.8/sweetalert.min.js" integrity="sha512-fcAEThGLlyTKt+mmcRprds9PxumnuZukst32LxyzgU8ga0jKzlHCHawCo+eynUAgrHpuUe1QGSHe6X6cXYcZAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('home')}}/js/slick/slick.min.js"></script>

         <!-----for Ajax handeling----->
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <!-----for Ajax handeling----->


        <script>


              $(document).ready(function() {
                showcartcount();
                showcarthover();
                showcarttable();
                showcartsummery();
              });

                  // cart script


              function showcartcount()
                {
                    $.ajax({
                        url: `{{ route('food.cart.count.ajax') }}`,
                        success: function(data) {
                            $('.cart_count_number').html(data);
                        }
                    })
                }
              function showcarthover()
                {
                    $.ajax({
                        url: `{{ route('food.cart.hover.ajax') }}`,
                        success: function(data) {
                            $('.novis_cart').html(data);
                        }
                    })
                }


              function showcarttable()
                {
                    $.ajax({
                        url: `{{ route('food.cartable.ajax') }}`,
                        success: function(data) {
                            $('.carttable').html(data);
                        }
                    })
                }
              function showcartsummery()
                {
                    $.ajax({
                        url: `{{ route('food.cartsummery.ajax') }}`,
                        success: function(data) {
                            $('.cart-totals').html(data);
                        }
                    })
                }




                $('.add_to_cart').on('click', function() {
                    var food_id = $(this).data('id');
                    var url = "{{ route('food.add_to_cart') }}";
                    $.ajax({
                        url: url,
                        data: {
                            food_id: food_id,
                        },
                        type: "post",
                        success: function(data){
                                  showcartcount();
                                  showcarthover();
                            if ($.isEmptyObject(data.error)) {
                                toastr.success(data.success, 'add your Cart', {
                                    timeOut: 3000
                                });
                            } else {
                                toastr.error(data.error, {
                                    timeOut: 3000
                                });
                            }
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        },
                    });
                });

                 // remove cart
                $(document).on('click','.removecart',function(e){
                    e.preventDefault();
                    const rowId = $(this).data("id")
                    const url =  "{{ route('food.remove_cart') }}"
                    $.ajax({
                        type: "post",
                        url: url,
                        data: {
                            rowId
                        },
                        success: function(data){
                            console.log(data)
                                showcartcount();
                                showcarthover();
                                showcarttable();
                                showcartsummery();
                        },
                        error: function(data) {
                            console.log('Error:', data);
                        }
                    });
                });







        </script>



        <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
            }
        @endif

        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                }
            })
        });



           // increment cart
        $(document).on('click','.incrementCart',function(e){
           e.preventDefault();
           var rowId = $(this).data('id');
           const url = "{{route('food.incrementCart')}}";
           $.ajax({
                type: "post",
                url: url,
                data: {
                    rowId
                },
                success: function(data){
                    showcartcount();
                    showcarthover();
                    showcarttable();
                    showcartsummery();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });

        // decrement cart
        $(document).on('click',".decrementCart",function(e){
            e.preventDefault();
            var rowId = $(this).data('id');
            const url = "{{route('food.decrementCart')}}";
            $.ajax({
                type: "post",
                url: url,
                data: {
                    rowId
                },
                success: function(data){
                    showcartcount();
                    showcarthover();
                    showcarttable();
                    showcartsummery();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });





    </script>

    <script>
        // the selector will match all input controls of type :checkbox
        // and attach a click event handler
        $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        });

    </script>

    </body>
</html>
