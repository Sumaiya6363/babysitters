@extends('homepage.layouts.app')
@section('title','Cart')

@push('css')
    <style>
        .content img{
            width: 100px;
        }
        .quentity-product button{
            border: 1px solid #cccccc;
        }
        .quentity-product span{
            padding: 0 10px;
        }
        .content .fa-times{
            background: #cccccc;
            line-height: 20px;
            width:  20px;
            line-break: 20px;
            font-size: 14px;
            text-align: center;
            border-radius: 50%;
            color: #000000;
        }
        .cart-totals table{
            width: 100%;
        }
        .cart-totals table tr td {
            padding: 10px 0;
        }
        .cart-btn-main{
            width: 100%;
            padding: 8px;
            border: none;
            background: yellow;
            color: #000000;
            margin-top: 10px;
            border-radius: 5px;
            font-weight: 600;
            display:  block;
            text-align: center;
        }
        .cart-totals h3{
            border-bottom: 1px solid #cccccc;
            padding-bottom: 10px;
        }
    </style>
@endpush

@section('content')

<section class="header-inner bg-dark text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 ">
              <h2 class="inner-banner-title">My Cart Shop</h2>
        </div>
      </div>
    </div>
  </section>
<div class="content mt-5 py-5">
            @php
                $path = request()->path();    
            @endphp
          

                    <!--  section  -->
                    <section class="hidden-section">
                        {{-- <form action="{{ route('user.order.store') }}" method="POST">
                            @csrf --}}
                         <div class="container">
                            <!-- CHECKOUT TABLE -->
                            <div class="row">
                                <div class="col-md-8 carttable">

                                    <!-- /COUPON -->
                                </div>
                                <div class="col-md-4">
                                    <!-- CART TOTALS  -->
                                    <div class="cart-totals dark-bg fl-wrap">



                                    </div>
                                    @if ($path == 'cart')
                                        <a href="{{route('shipping.page')}}" class="cart-totals_btn color-bg cart-btn-main">Proceed to Checkout</a>
                                    @endif
                                    @if ($path == 'shipping')
                                    <button type="submit"  href="{{route('shipping.page')}}" class="cart-totals_btn color-bg cart-btn-main">Proceed to Checkout</button>
                                    @endif
                                    <!-- /CART TOTALS  -->
                                </div>
                            </div>
                            <!-- /CHECKOUT TABLE -->
                        </div>
                         </form>
                        <div class="section-bg">
                            <div class="bg" data-bg="{{ asset('home') }}/images/bg/dec/section-bg.png" style="background-image: url({{ asset('home') }}/images/bg/dec/section-bg.png);"></div>
                        </div>
                    </section>
                    <!--  section end  -->
                    <div class="brush-dec2 brush-dec_bottom"></div>
                </div>

@endsection
