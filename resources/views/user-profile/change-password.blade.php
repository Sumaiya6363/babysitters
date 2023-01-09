@extends('users.layouts.app')
@section('title', 'Profile')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Change Password</div>
        <div class="" style="padding-left: 10px">  <a href="{{route('user.profile.show')}}"><i class="bi bi-arrow-counterclockwise"></i> Back To Profile</a></div>
    </div>

    <div class="row ">
        <div class="col-5 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-12 text-center">
                            <img src="{{ asset('admin/images/profile.png') }}" alt="" style="width: 120px;">
                        </div>
                        <div class="col-12">
                            <form action="{{route('user.profile.change.password',)}}" method="POST">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-12 py-3">
                                        <label for="#">Carrent Password</label>
                                        <input type="text" class="form-control" name="carrent_password">
                                        <span class="text-danger">{{$errors->first('carrent_password')}}</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <label for="#">New Password</label>
                                        <input type="text" class="form-control" name="new_password">
                                        <span class="text-danger">{{$errors->first('new_password')}}</span>
                                    </div>
                                    <div class="col-12 py-3">
                                        <label for="#">Confirm Password</label>
                                        <input type="text" class="form-control" name="password_confirmation">
                                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                                    </div>
                                    
                                    <div class="col-12 py-3 text-center">
                                        <button type="submit"  class="btn btn-primary"> Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
