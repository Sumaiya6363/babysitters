@extends('admin.layouts.app')
@section('title', 'Web Settings')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Web Settings</div>
        <div class="" style="padding-left: 10px"> <a href="{{ route('web-setting.edit',$websetting->id) }}"><i
                    class="bi bi-lock"></i> Edit Websettings</a></div>
    </div>

    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row mt-5">
                                <div class="col-md-12 py-3">
                                    <b>Site Name :</b> {{$websetting->site_name}}
                                </div>
                                <div class="col-md-12 py-3">
                                    <b>Site Name Bangla :</b> {{$websetting->bn_site_name}}
                                </div>
                                <div class="col-md-12 py-3">
                                    <b>Url :</b> {{$websetting->url_name}}
                                </div>
                                 <div class="col-md-12 py-3">
                                    <b>Mobile Number :</b> {{$websetting->mobile}}
                                </div>
                                 <div class="col-md-12 py-3">
                                    <b>Email :</b> {{$websetting->email}}
                                </div>
                                 <div class="col-md-12 py-3">
                                    <b>Logo :</b> <img src="{{asset($websetting->logo)}}" alt="" width="100">
                                </div>
                                  <div class="col-md-12 py-3">
                                    <b>	banner :</b> <img src="{{asset($websetting->banner)}}" alt="" width="100">
                                </div>
                                </div>
                                  <div class="col-md-12 py-3">
                                    <b>	Footer Logo :</b> <img src="{{asset($websetting->footer_logo)}}" alt="" width="100">
                                </div>
                                <div class="col-md-12 py-3">
                                    <b>	Address :</b> {{$websetting->address}}
                                </div>
                                 <div class="col-md-12 py-3">
                                    <b>	Footer Text :</b> {{$websetting->footer_text}}
                                </div>
                              <div class="col-md-12 py-3">
                                    <b>	Footer Text :</b> {{$websetting->footer_text}}
                                </div>
                                 <div class="col-md-12 py-3">
                                    <b>	Status :</b> 
                                    @if ($websetting->status == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>    
                                    @elseif($websetting->status == 0)
                                        <button class="btn btn-sm btn-primary">Deactive</button>    
                                    @endif
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
