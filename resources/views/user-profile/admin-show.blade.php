@extends('users.layouts.app')
@section('title', 'Profile')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">My Profile</div>
        <div class="" style="padding-left: 10px"> <a href="{{ route('user.profile.change.password') }}"><i
                    class="bi bi-lock"></i> Change Password</a></div>
    </div>

    <div class="row ">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-12 text-center">
                        
                              
                                    <img src="{{ asset('admin/images/profile.png') }}" alt="" style="width: 120px;">
                               
                           
                        </div>
                        <div class="col-12">
                            <div class="row mt-5">
                                <div class="col-md-6 py-3">
                                    <b>Name:</b> {{ $user->name }}
                                </div>
                                <div class="col-md-6 py-3">
                                    <b>Email:</b> {{ $user->email }}
                                </div>
                                <div class="col-md-6 py-3">
                                    <b>Mobile Number:</b> {{ $user->mobile }}
                                </div>
                                <div class="col-md-6 py-3">
                                    <b>Address:</b> {{ $user->address }}
                                </div>
                               
                                <div class="col-12 py-3 text-center">
                                    <a href="{{ route('user.profile.edit') }}" class="btn btn-primary"> <i
                                            class="bi bi-pencil-square"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
