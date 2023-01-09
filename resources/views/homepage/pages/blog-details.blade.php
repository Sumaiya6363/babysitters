@extends('homepage.layouts.app')
@section('title','Blogs')
@section('content')

<section class="header-inner bg-dark text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 ">
          <h2 class="inner-banner-title">{{$blog->title}}</h2>
        </div>
      </div>
    </div>
  </section>


  <section class="space-ptb">
    <div class="container">
      <div class="row">

        <!-- Blog Sidebar -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="blog-sidebar">
            <!-- Search -->
            {{-- <div class="widget">
              <div class="widget-title">
                <h4>Search Something</h4>
              </div>
              <div class="search">
                  <i class="fas fa-search"></i>
                  <input type="text" class="form-control" placeholder="Search here...">
              </div>
            </div> --}}
            <!-- Search -->

            <!-- Categories -->
            <div class="widget">
              <div class="widget-title">
                <h4>Categories</h4>
              </div>
              <div class="widget-categories">
                <ul class="list-unstyled list-style mb-0">
                @foreach ($categories as $item)
                <li><a href="javascript:void(0)">{{$item->name}}</a></li>
                @endforeach
                </ul>
              </div>
            </div>
            <!-- Categories -->

            <!-- Recent Post -->
            <div class="widget">
              <div class="widget-title">
                <h4>Recent Post</h4>
              </div>
              <div>
                @foreach ($recent_post as $item)
                <div class="d-flex mb-3 align-items-center">
                    <div class="avatar avatar-md">
                      <img class="img-fluid" src="{{asset($item->image)}}" alt="Blog">
                    </div>
                    <div class="ms-3 recent-posts">
                      <a class="d-block date" href="#">{{$item->created_at->format('M d, y')}}</a>
                      <a class="mt-1" href="{{route('blog.details',$item->slug)}}"><b>{{$item->title}}</b></a>
                    </div>
                  </div>
                @endforeach

                {{-- <div class="d-flex mb-3 align-items-center">
                  <div class="avatar avatar-md">
                    <img class="img-fluid" src="images/blog/recent-post-02.jpg" alt="">
                  </div>
                  <div class="ms-3 recent-posts">
                    <a class="d-block date" href="#">May 23, 2020</a>
                    <a class="mt-1" href="#"><b>How to Find a Babysitter for New Year’s Eve</b></a>
                  </div>
                </div>
                <div class="d-flex mb-3 align-items-center">
                  <div class="avatar avatar-md">
                    <img class="img-fluid" src="images/blog/recent-post-03.jpg" alt="">
                  </div>
                  <div class="ms-3 recent-posts">
                    <a class="d-block date" href="#">january 01, 2020</a>
                    <a class="mt-1" href="#"><b>Top 10 best Babysitting Website in the UK</b></a>
                  </div>
                </div> --}}
              </div>
            </div>
            <!-- Recent Post -->

            {{-- <div class="widget">
              <div class="widget-title">
                <h5>Tags</h5>
              </div>
              <div class="tagcloud">
                <ul class="list-unstyled">
                  <li><a href="#">Dog food</a></li>
                  <li><a href="#">Baby &amp; toddler toys</a></li>
                  <li><a href="#">Electronics for kids</a></li>
                  <li><a href="#">Dog leashes</a></li>
                </ul>
              </div>
            </div> --}}

            <!-- Follow on -->
             <div class="widget">
              <div class="widget-title">
                <h4>Follow on</h4>
              </div>
              <div class="social">
                <ul class="list-unstyled">
                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-dribbble"></i> </a></li>
                </ul>
              </div>
            </div>
            <!-- Follow on -->

          </div>
        </div>
        <!-- Blog Sidebar -->

        <!-- Blog Detail -->
        <div class="col-lg-8">
          <div class="blog-detail">
            <div class="blog-post">
              <div class="blog-post-image">
                <img class="img-fluid" src="images/blog/blog-02.jpg" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-date">{{$blog->created_at->format('M d, y')}}</div>
                <h6 class="blog-post-title">{{$blog->title}}</h6>
              </div>
            </div>
            <div class="blog-post-description text-center">
              {!! $blog->description !!}
            </div>


            <hr>
            <!-- Social -->
            <div class="blog-post-social">
              <span>Share this post :</span>
              <ul class="list-unstyled">
                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
              </ul>
            </div>
            <!-- Social -->

             <!-- Navigation -->
            <div class="blog-post-navigation">
              <nav class="navigation post-navigation">
                <div class="nav-link">
                  <div class="nav-previous">
                    <a href="#">
                      <i class="flaticon-left-arrow"></i>
                      <span class="pagi-text">Previous Post</span>
                      <span class="nav-title">Making a decision to do...</span>
                    </a>
                  </div>
                  <div class="nav-next">
                     <a href="#">
                      <i class="flaticon-next"></i>
                      <span class="pagi-text">Next Post</span>
                      <span class="nav-title">For those of you who are...</span>
                    </a>
                  </div>
                </div>
              </nav>
            </div>
            <!-- Navigation -->


        </div>
        <!-- Blog Detail -->

      </div>
    </div>
  </section>

@endsection


