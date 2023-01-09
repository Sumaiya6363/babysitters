@extends('admin.layouts.app')
@section('title', 'Sitter Edit')
@section('content')

    {{-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Sitter User Edit</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                  </ol>
                </nav>
              </div>
            </div> --}}
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Sitter Users Edit</div>
                <div class="" style="padding-left: 10px">  <a href="{{route('sitter.user.index')}}"><i class="bi bi-arrow-counterclockwise"></i> Back To Sitter Users</a></div>
        
        
            </div>
            <div class="card">
               
                <div class="card-body">
                    <form class="form" method="post" action="{{ route('sitter.user.update', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row g-3">
                            <div class="col-12 col-lg-8">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">
                                        <form class="row g-3">

                                            <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">Your Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                                <div class="text-darger">{{  $errors->first('name') }}</div>
                                              </div>
                                              <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">Your Email</label>
                                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                                <div class="text-darger">{{  $errors->first('email') }}</div>
                                              </div>
                                              <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">Your Mobile  Number</label>
                                                <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}">
                                                <div class="text-darger">{{  $errors->first('mobile') }}</div>
                                              </div>
                                              <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">Your Address</label>
                                                <input type="text" class="form-control" name="address" value="{{$user->address}}">
                                                <div class="text-darger">{{  $errors->first('address') }}</div>
                                              </div>
                                              <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">Expected Salary</label>
                                                <input type="text" class="form-control" name="expected_salary" value="{{$user->sitter ? $user->sitter->expected_salary : ''}}">
                                                <div class="text-darger">{{  $errors->first('expected_salary') }}</div>
                                              </div>
                                               <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">Approved Salary</label>
                                                <input type="text" class="form-control" name="approved_salary" value="{{$user->sitter ? $user->sitter->approved_salary : ''}}">
                                                <div class="text-darger">{{  $errors->first('approved_salary') }}</div>
                                              </div>
                                              <div class="col-12 col-md-6 mb-3">
                                                <label class="pb-2">User Salary</label>
                                                <input type="text" class="form-control" name="user_salary" value="{{$user->sitter ? $user->sitter->user_salary : ''}}">
                                                <div class="text-darger">{{  $errors->first('user_salary') }}</div>
                                              </div>
                                              
                                            <div class="col-12">
                                                <button type="submit" class="btn btn btn-primary">Update </button>

                                            </div>




                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endsection
