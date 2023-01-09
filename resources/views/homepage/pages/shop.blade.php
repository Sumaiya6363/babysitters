@extends('homepage.layouts.app')
@section('title','Shops')
@section('content')
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
                <h2 class="inner-banner-title">Shop</h2>
          </div>
        </div>
      </div>
    </section>


    <section class="space-ptb">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 mt-5 mt-lg-0" data-select2-id="18">
            <h5 class="mb-4">Product filters</h5>
            <div class="row" data-select2-id="17">
              <div class="col-lg-10">
                <input type="search" id="shop-filter-search" class="search-field mb-3" placeholder="Search products…" value="" name="s">
              </div>
              <div class="col-lg-2">
                <input type="submit" id="" class="btn btn-primary" placeholder="Search products…" value="Search" name="search">
              </div>

            </div>

            <div class="row">
              @foreach ($products as $item)
              <div class="col-md-3 col-lg-3 mb-4">
                <div class="product">
                   <div class="product-image">
                      <img class="img-fluid mx-auto" src="{{asset('images/')}}/{{$item->image}}" alt="">
                      <div class="product-overlay">
                        <div class="add-to-cart">
                          <a href="{{route('shops.details',$item->slug)}}">View Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="product-description">
                      <div class="product-title">
                         <a href="{{route('shops.details',$item->slug)}}">{{$item->name}}</a>
                      </div>
                      
                      <div class="product-price">
                        @if ($item->price_active == 1 )
                         <ins>
                            {{$item->price}}৳
                         </ins>
                        @endif
                        @if ($item->price_active == 2)
                        <del>{{$item->price}}৳</del> <ins>{{$item->discount_price}}৳</ins>
                        @endif
                        
                        
                      </div>
                  </div>
               </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


