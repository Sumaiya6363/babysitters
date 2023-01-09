@extends('admin.layouts.app')
@section('title', 'Sitter Users Show')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sitter Users Show</div>
        <div class="" style="padding-left: 10px">  <a href="{{route('sitter.user.index')}}"><i class="bi bi-arrow-counterclockwise"></i> Back To Sitter Users</a></div>


    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover">
                            <tbody>
                                   <tr class="bg-info text-white">
                                       <th colspan="3">Personal Info</th>
                                   </tr>
                                   <tr>
                                        <th style="width:20%">Name</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <img src="{{asset($user->sitter ? $user->sitter->image : '')}}" alt="" style="width: 100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Mobile Number</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                     <tr>
                                        <th>Home District</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->sitter ? $user->sitter->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Current District</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->sitter ? $user->sitter->currentdistrict->name : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>NID Number</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $user->sitter ? $user->sitter->nid_no : '' }}</td>
                                    </tr>
                                     <tr>
                                        <th>NID Front Page</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <img src="{{asset($user->sitter ? $user->sitter->nid_front : '')}}" alt="" style="width: 100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NID Back Page</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <img src="{{asset($user->sitter ? $user->sitter->nid_back : '')}}" alt="" style="width: 100px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CV</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <a href="{{asset($user->sitter ? $user->sitter->self_cv : '')}}" download>Download</a>

                                        </td>
                                    </tr>
                                    <tr class="bg-info text-white">
                                        <th colspan="3">Guardian Information</th>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->guardian_name : ''}}

                                        </td>
                                    </tr>
                                     <tr>
                                        <th>Guardian</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->guardian_mobile : ''}}
                                        </td>
                                    </tr>
                                   <tr>
                                        <th>Email</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->guardian_email : ''}}

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <img src="{{asset($user->sitter ? $user->sitter->guardian_photo : '')}}" alt="" style="width: 100px">
                                        </td>
                                    </tr>
                                     <tr>
                                        <th>NID</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->guardian_nid_no : ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NID Front Side</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <img src="{{asset($user->sitter ? $user->sitter->guardian_nid_front : '')}}" alt="" style="width: 100px">
                                        </td>
                                    </tr>
                                     <tr>
                                        <th>NID Back Side</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            <img src="{{asset($user->sitter ? $user->sitter->guardian_nid_back : '')}}" alt="" style="width: 100px">
                                        </td>
                                    </tr>
                                   <tr>
                                        <th>Relation</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                           {{$user->sitter ? $user->sitter->guardian_relationshp : ''}}
                                        </td>
                                    </tr>
                                    <tr class="bg-info text-white">
                                        <th colspan="3">Education Information</th>
                                    </tr>
                                    <tr>
                                        <th>Degree Name</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                           {{$user->sitter ? $user->sitter->degree_name : ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Institute</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                           {{$user->sitter ? $user->sitter->degree_institute : ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Group</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                           {{$user->sitter ? $user->sitter->degree_group : ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Passing Year</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                           {{$user->sitter ? $user->sitter->passing_year : ''}}
                                        </td>
                                    </tr>
                                    <tr class="bg-info text-white">
                                        <th colspan="3">Offical Information</th>
                                    </tr>


                                    <tr>
                                        <th>Available Time</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                           {{$user->sitter ? $user->sitter->available_time : ''}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Application Date</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{ Date('d-M-Y',strtotime($user->created_at)) }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Expected Salary</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->expected_salary : ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Approved Salary</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->approved_salary : ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Publish Amount</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            {{$user->sitter ? $user->sitter->user_salary : ''}}
                                        </td>
                                    </tr>




                                     <tr>
                                        <th>Status</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                            @if ($user->status == 2)
                                            <form action="{{route('user.active',$user->id)}}" method="post" >
                                                @csrf
                                                <input type="text" class="form-control mt-2" name="approved_salary" placeholder="Approved Salary">
                                                <input type="text" class="form-control mt-2" name="user_salary" placeholder="Website Publish Amount">
                                                <button class="btn btn-danger btn-sm mt-2" onclick="return confirm('Are you sure, Want to Active this User!')">Approved Request</button>
                                            </form>
                                        @endif
                                        @if ($user->status == 1)
                                            <form action="{{route('user.inactive',$user->id)}}" method="post" onclick="return confirm('Are you sure, Want to Inactive this User!')">
                                                @csrf
                                                <button class="btn btn-success btn-sm">Approved</button>
                                            </form>
                                        @endif
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
