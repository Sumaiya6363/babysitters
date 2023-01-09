@extends('homepage.layouts.app')
@section('title','Cart')

@push('css')
    <style>
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
        .contact-form{
            margin-right: 0;
        }
    </style>
@endpush

@section('content')

<section class="header-inner bg-dark text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 ">
              <h2 class="inner-banner-title">Shipping</h2>
        </div>
      </div>
    </div>
  </section>
<div class="content mt-5 py-5">

                    <!--  section  -->
                    <section class="hidden-section">
                        @php
                            $path = request()->path();    
                        @endphp
                        {{-- <form action="{{ route('user.order.store') }}" method="POST">
                            @csrf --}}
                         <div class="container">
                            <!-- CHECKOUT TABLE -->
                            <form class="mt-4" action="{{route('user.order.store')}}" method="post">
                                @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-dark contact-form">
                                        <h4 class="pb-4">Shipping Address</h4>
                                           
                                            <div class="row">
                                              <div class="mb-3 col-12 col-md-6">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name"  placeholder="Your Name" value="{{$shipping->name ?? ''}}">
                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                              </div>
                                              <div class="mb-3 col-12 col-md-6">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{$shipping->email ?? ''}}" placeholder="example@gmail.com" >
                                                <span class="text-danger">{{$errors->first('email')}}</span>
                                              </div>
                                              <div class="mb-3 col-12 col-md-6">
                                                <label for="">Phone Number</label>
                                                <input type="text" class="form-control"  placeholder="017********" name="mobile" value="{{$shipping->mobile ?? ''}}">
                                                <span class="text-danger">{{$errors->first('mobile')}}</span>
                                              </div>
                                              <div class="mb-3 col-12 col-md-6">
                                                <label for="">Phone Nuber (Alternet)</label>
                                                <input type="text" class="form-control"  placeholder="017********" name="mobile_alternet" value="{{$shipping->mobile_alternet ?? ''}}">
                                              </div>
                                                <div class="mb-3 col-12 col-md-6">
                                                <label for="">Zila</label>
                                                <input type="text" class="form-control" name="zila" value="{{$shipping->zila ?? ''}}">
                                                <span class="text-danger">{{$errors->first('zila')}}</span>
                                              </div>
                                              <div class="mb-3 col-12 col-md-6">
                                                <label for="">Thana</label>
                                                <input type="text" class="form-control" name="thana" value="{{$shipping->thana ?? ''}}">
                                                <span class="text-danger">{{$errors->first('thana')}}</span>
                                              </div>
                                              <div class="mb-3 col-12">
                                                <label for="">Address</label>
                                                <input type="text" class="form-control" name="address" value="{{$shipping->address ?? ''}}">
                                                <span class="text-danger">{{$errors->first('address')}}</span>
                                              </div>
                                              <div class="col-12 mb-0">
                                                <label for="">Message</label>
                                                <textarea rows="4" class="form-control" id="sector" placeholder="Message" name="message">{{$shipping->message ?? ''}}</textarea>
                                                <span class="text-danger">{{$errors->first('message')}}</span>
                                              </div>
                                           
                                            </div>
                                         
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- CART TOTALS  -->
                                    <div class="cart-totals dark-bg fl-wrap">

                                    </div>

                                    <div>
                                        <div class="py-2">
                                            <input type="radio" name="cash_or_pay" id="cash" value="cash_on_delivery" checked>
                                        <label for="cash">Cash on Devlivery</label>
                                        </div>
                                        <div class="py-2">
                                            <input type="radio" name="cash_or_pay" value="online_payment" id="online">
                                            <label for="online">Online Payment</label>
                                        </div>
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
                        </form>
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
