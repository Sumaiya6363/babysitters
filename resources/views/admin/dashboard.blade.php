@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
     <div class="col">
        <div class="card radius-10 bg-primary">
            <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="">
                <p class="mb-1 text-white">Total Admin</p>
                <h4 class="mb-0 text-white">{{$admin_count}}</h4>
                </div>
                <div class="ms-auto widget-icon bg-white-1 text-white">
                <a href="{{ route('admin.user.index') }}" class="text-white"><i class="bi bi-people"></i></a>
                </div>
            </div>
            </div>
        </div>
     </div>
     <div class="col">
      <div class="card radius-10 bg-pink">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Total Users</p>
              <h4 class="mb-0 text-white">{{$user_count}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <a href="{{route('general.user.index')}}"class="text-white"><i class="bi bi-people"></i></a>
            </div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 bg-warning">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Requested Sitters</p>
              <h4 class="mb-0 text-white">{{$request_sitter_count}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <a href="{{route('sitter.user.index')}} " class="text-white"><i class="bi bi-people"></i></a>
            </div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
      <div class="card radius-10 bg-warning">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Approved Sitters</p>
              <h4 class="mb-0 text-white">{{$approved_sitter_count}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <a href="{{route('sitter.user.index')}} " class="text-white"><i class="bi bi-people"></i></a>
            </div>
          </div>
        </div>
      </div>
     </div>
      <div class="col">
      <div class="card radius-10 bg-warning">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Sitter Order Request</p>
              <h4 class="mb-0 text-white">{{$sitterOrderRequests}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
              <a href="{{route('admin.sitter.index')}} " class="text-white"><i class="bi bi-people"></i></a>
            </div>
          </div>
        </div>
      </div>
     </div>

     

     <div class="col">
      <div class="card radius-10 bg-orange">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="">
              <p class="mb-1 text-white">Total Order</p>
              <h4 class="mb-0 text-white">{{$total_order}}</h4>
            </div>
            <div class="ms-auto widget-icon bg-white-1 text-white">
                <a href="{{route('admin.order.all')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
     </div>
     <div class="col">
        <div class="card radius-10 bg-orange">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Pending</p>
                <h4 class="mb-0 text-white">{{$pending}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('admin.order.pending')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div><div class="col">
        <div class="card radius-10 bg-orange">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Confirmed</p>
                <h4 class="mb-0 text-white">{{$Confirmed}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('admin.order.confirmed')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div><div class="col">
        <div class="card radius-10 bg-orange">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Processing</p>
                <h4 class="mb-0 text-white">{{$processing}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('admin.order.processing')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>
        <div class="col">
        <div class="card radius-10 bg-orange">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Delivered</p>
                <h4 class="mb-0 text-white">{{$delivered}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('admin.order.delivered')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10 bg-orange">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Cancel</p>
                <h4 class="mb-0 text-white">{{$cancel}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('admin.order.cancel')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="col">
        <div class="card radius-10 bg-secondary">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Total Blog</p>
                <h4 class="mb-0 text-white">{{$blogs}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('blog.index')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>
        <div class="col">
        <div class="card radius-10 bg-secondary">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="">
                <p class="mb-1 text-white">Total Blog Category</p>
                <h4 class="mb-0 text-white">{{$Blog_cats}}</h4>
              </div>
              <div class="ms-auto widget-icon bg-white-1 text-white">
                  <a href="{{route('blog-category.index')}}"class="text-white"><i class="bi bi-bar-chart-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
       </div>










     </div>
     </div>
@endsection
