@extends('sitters.layouts.app')
@section('title', 'Profile')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">My Profile</div>
        <div class="" style="padding-left: 10px"> <a href="{{ route('sitter.profile.change.password') }}"><i
                    class="bi bi-lock"></i> Change Password</a></div>
    </div>

    <div class="row ">
        <div class="col m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-12 text-center">
                                @if ($user->sitter ? $user->sitter->image : '')
                                    <img src="{{ asset($user->sitter->image) }}" alt="" style="width: 120px;">
                                @else
                                    <img src="{{ asset('admin/images/profile.png') }}" alt="" style="width: 120px;">
                                @endif
                        </div>
                        <div class="col-12">
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <b>Name:</b> {{ $user->name }}
                                </div>
                                <div class="col-md-6">
                                    <b>Email:</b> {{ $user->email }}
                                </div>
                                <div class="col-md-6">
                                    <b>Mobile Number:</b> {{ $user->mobile }}
                                </div>
                                <div class="col-md-6">
                                    <b>Address:</b> {{ $user->address }}
                                </div>
                                @if ($user->is_admin == 'sitter')
                                    <div class="col-md-6">
                                        <b>image:</b>
                                        <a href="">
                                            <img src="" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Home District:</b> {{ $user->sitter ? $user->sitter->homedistrict->name : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Carrent District :</b> {{ $user->sitter ? $user->sitter->carrentdistrict->name : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>NID Number :</b> {{ $user->sitter ? $user->sitter->nid_no : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>NID Front :</b> <br> <img src="{{ asset($user->sitter ? $user->sitter->nid_front : '') }}"
                                            alt="" style="width: 80px">
                                    </div>
                                    <div class="col-md-6">
                                        <b>NID Back:</b> <br>
                                        <img src="{{ asset($user->sitter ? $user->sitter->nid_back : '') }}" alt=""
                                            style="width: 100px">

                                    </div>
                                    <div class="col-md-6">
                                        <b>Self Cv:</b>
                                        <a href="{{ asset($user->sitter ? $user->sitter->self_cv : '') }}"
                                            download>Download</a>
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian Name:</b>
                                        {{ $user->sitter ? $user->sitter->guardian_name : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian Mobile:</b>
                                        {{ $user->sitter ? $user->sitter->guardian_mobile : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian Email:</b>
                                        {{ $user->sitter ? $user->sitter->guardian_email : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian Photo:</b> <br>
                                        <img src="{{ asset($user->sitter ? $user->sitter->guardian_photo : '') }}"
                                            alt="" style="width: 80px">
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian NID:</b>
                                        {{ $user->sitter ? $user->sitter->guardian_nid_no : '' }}
                                    </div>
                                    <div class="col-md-6">
                                         <b>Guardian NID Front Side:</b> <br>
                                        <img src="{{ asset($user->sitter ? $user->sitter->guardian_nid_front : '') }}"
                                            alt="" style="width: 80px">
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian NID Back Side:</b> <br>
                                        <img src="{{ asset($user->sitter ? $user->sitter->guardian_nid_back : '') }}"
                                            alt="" style="width: 80px">
                                    </div>
                                    <div class="col-md-6">
                                        <b>Guardian Relation:</b>
                                        {{ $user->sitter ? $user->sitter->guardian_relationshp : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Degree Name:</b>
                                        {{ $user->sitter ? $user->sitter->degree_name : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Degree Institute:</b>
                                        {{ $user->sitter ? $user->sitter->degree_institute : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Degree Group:</b>
                                        {{ $user->sitter ? $user->sitter->degree_group : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Passing Year:</b>
                                        {{ $user->sitter ? $user->sitter->passing_year : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Available Time:</b>
                                        {{ $user->sitter ? $user->sitter->available_time : '' }}
                                    </div>
                                    <div class="col-md-6">
                                        <b>Expected Salary:</b>
                                        {{ $user->sitter ? $user->sitter->expected_salary : '' }} Taka
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <b>Status:</b>
                                        @if ($user->status == 2)
                                            <button class="btn btn-danger btn-sm">Approved Request</button>
                                        @endif
                                        @if ($user->status == 1)
                                            <button class="btn btn-success btn-sm">Approved</button>
                                        @endif
                                    </div>

                                @endif
                                <div class="col-12 py-3 text-center">
                                    <a href="{{ route('sitter.profile.edit') }}" class="btn btn-primary"> <i
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
