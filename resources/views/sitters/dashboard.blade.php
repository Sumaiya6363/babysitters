@extends('sitters.layouts.app')
@section('title','Sitter Dashboard')
@section('content')


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
       
     <div class="col">
        <div class="card radius-10 bg-pink">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Total Sitter order</p>
                <h4 class="mb-0 text-white">{{$sitterrequests}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                <a href="{{route('sitter.orders')}}"class="text-white"><i class="bi bi-people"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10 bg-primary">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Total Shop order</p>
                <h4 class="mb-0 text-white">{{$shop_orders}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                <a href="{{route('sitter.shop.order')}}"class="text-white"><i class="bi bi-people"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>
@endsection
