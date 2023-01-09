@extends('admin.layouts.app')
@section('title', 'Profile')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Profile Update</div>
        <div class="" style="padding-left: 10px"> <a href="{{ route('admin.profile.show') }}"><i
                    class="bi bi-arrow-counterclockwise"></i> Back To Profile</a></div>
    </div>

    <div class="row ">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-12 text-center">
                            <img src="{{ asset('admin/images/profile.png') }}" alt="" style="width: 120px;">
                        </div>
                        <div class="col-12 mt-3">
                            <form action="{{ route('admin.profile.update',$user->id) }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-6 py-3">
                                        <label for="#">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $user->name }}">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $user->email }}">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile"
                                            value="{{ $user->mobile }}">
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="col-12 py-3 text-center">
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </div>
                        </div>
                        </form>

                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
