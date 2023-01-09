@extends('homepage.layouts.app')
@section('title','Blogs')
@section('content')

<!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Blog</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          @foreach ($blogs as $item)
            <div class="col-lg-4 col-md-6 mb-0 mb-lg-3">
              <div class="blog-post">
                <div class="blog-post-image">
                  <img class="img-fluid" src="{{ asset($item->image)}}" alt="Blog">
                </div>
                <div class="blog-post-content">
                  <div class="blog-post-date">{{$item->created_at->format('M d, y')}}</div>
                  <h6 class="blog-post-title"><a href="{{route('blog.details',$item->slug)}}">{{$item->title}}</a></h6>
                </div>
              </div>
            </div>
          @endforeach


         <div class="col-12 mt-5 text-center">
          {{ $blogs->links() }}
         </div>
        </div>
        {{-- <div class="row">
              <div class="col-12 text-center mt-2 mt-md-4 mt-lg-5">
                <ul class="pagination justify-content-center mb-0">
                  <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                  <li class="page-item active" aria-current="page"><span class="page-link active">1 </span> <span class="sr-only">(current)</span></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">25</a></li>
                  <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                </ul>
              </div>
          </div> --}}
      </div>
    </section>
    <!--=================================
    Blog -->


@endsection


