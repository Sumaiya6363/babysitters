@extends('admin.layouts.app')
@section('title', 'Edit Web Settings')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit Web Settings</div>
        <div class="" style="padding-left: 10px"> <a href="{{ route('web-setting.index', $websetting->id) }}"><i
                    class="bi bi-lock"></i> Back Edit Websettings</a></div>
    </div>

    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form" method="post" action="{{ route('web-setting.update',$websetting->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row g-3">
                            <div class="col-12 col-lg-8">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">
                                        <form class="row g-3">
                                            <div class="col-12 py-2">
                                                <label class="form-label">Site Name</label>
                                                <input type="text" name="site_name" class="form-control"
                                                   value="{{ $websetting->site_name }}">
                                            </div>
                                            <div class="col-12 py-2">
                                                <label class="form-label">Site Name Bangla</label>
                                                <input type="text" name="bn_site_name" class="form-control"
                                                   value="{{ $websetting->bn_site_name }}">
                                            </div>
                                             <div class="col-12 py-2">
                                                <label class="form-label">Site URL</label>
                                                <input type="text" name="url_name" class="form-control"
                                                   value="{{ $websetting->url_name }}">
                                            </div>
                                            <div class="col-12 py-2">
                                                <label class="form-label">Mobile</label>
                                                <input type="text" name="mobile" class="form-control"
                                                   value="{{ $websetting->mobile }}">
                                            </div>
                                             <div class="col-12 py-2">
                                                <label class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control"
                                                   value="{{ $websetting->email }}">
                                            </div>
                                            <div class="col-12 py-2">
                                                <label class="form-label">Logo <img src="{{asset($websetting->logo)}}" alt="" width="50"></label>
                                                <input type="file" name="logo" class="form-control">
                                            </div>
                                            <div class="col-12 py-2">
                                                <label class="form-label">Banner <img src="{{asset($websetting->banner)}}" alt="" width="50"></label>
                                                <input type="file" name="banner" class="form-control">
                                            </div>
                                         <div class="col-12 py-2">
                                                <label class="form-label">Footer Logo <img src="{{asset($websetting->footer_logo)}}" alt="" width="50"></label>
                                                <input type="file" name="footer_logo" class="form-control">
                                            </div>
                                            <div class="col-12 py-2">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control" value="{{$websetting->address}}">
                                            </div>
                                            <div class="col-12 py-2">
                                                <label class="form-label">Footer Text</label>
                                                <input type="text" name="footer_text" class="form-control" value="{{$websetting->footer_text}}">
                                            </div>
                                         
                                            <div class="col-12 py-2">
                                                <label class="form-label">Status</label>
                                                <select class="form-select" name="status">
                                                    <option value="1" {{$websetting->status == 1 ? 'selected' : ''}}>Active</option>
                                                    <option value="0" {{$websetting->status == 0 ? 'selected' : ''}}>Deactive</option>
                                                </select>
                                            </div>


                                            <div class="col-12 pt-2">
                                                <button type="submit" class="btn btn btn-primary">Update </button>

                                            </div>



                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
