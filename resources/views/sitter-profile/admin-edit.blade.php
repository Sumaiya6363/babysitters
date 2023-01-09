@extends('sitters.layouts.app')
@section('title', 'Profile')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Profile Update</div>
        <div class="" style="padding-left: 10px">  <a href="{{route('sitter.profile.show')}}"><i class="bi bi-arrow-counterclockwise"></i> Back To Profile</a></div>
    </div>

    <div class="row ">
        <div class="col-10 m-auto">
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
                        <div class="col-12 mt-3">
                           
                            
                            <form action="{{route('sitter.profile.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                </div>
                                <div class="row mt-5">
                                <div class="col-md-12">
                                    <h4 class="border-bottom">Personal Information</h4>
                                 </div>
                                 <div class="mb-3 col-md-6">
                                   <label class="form-label">Full Name : <span class="text-danger">*</span></label>
                                   <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                   <span class="text-danger">{{$errors->first('name')}}</span>
                                 </div>
                   
                                  <div class="mb-3 col-md-6">
                                     <label class="form-label">Address : <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="address" value="{{$user->address}}" >
                                     <span class="text-danger">{{$errors->first('address')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> image :
                                        <img src="{{asset($sitter->image)}}" alt="" style="width: 50px;">
                                    </label>
                                     <input type="file" class="form-control" name="image">
                                     <span class="text-danger">{{$errors->first('image')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> Home District : <span class="text-danger">*</span></label>
                                    <select name="home_district" class="form-control">
                                     <option value="">Select</option>
                                     @foreach ($districts as $item)
                                       <option value="{{$item->id}}" {{$sitter->home_district == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                     @endforeach
                                    </select>
                                     <span class="text-danger">{{$errors->first('home_district')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> Current District : <span class="text-danger">*</span></label>
                                    <select name="current_district" class="form-control">
                                     <option value="">Select</option>
                                     @foreach ($districts as $item)
                                       <option value="{{$item->id}}" {{$sitter->current_district == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                     @endforeach
                                    </select>
                                     <span class="text-danger">{{$errors->first('current_district')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">NID Number : <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="nid_no" value="{{$sitter->nid_no}}">
                                     <span class="text-danger">{{$errors->first('nid_no')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> NID Front part :
                                        <img src="{{asset($sitter->nid_front)}}" alt="" style="width: 50px;">
                                    </label>
                                     <input type="file" class="form-control" name="nid_front">
                                     <span class="text-danger">{{$errors->first('nid_front')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> NID Back part :
                                        <img src="{{asset($sitter->nid_back)}}" alt="" style="width: 50px;">
                                    </label>
                                     <input type="file" class="form-control" name="nid_back">
                                     <span class="text-danger">{{$errors->first('nid_back')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> Self CV : <a href="{{asset($sitter->self_cv)}}" download>Download</a> </label>
                                     <input type="file" class="form-control" name="self_cv">
                                     <span class="text-danger">{{$errors->first('self_cv')}}</span>
                                   </div>
                   
                                   <div class="col-md-12">
                                       <h4 class="border-bottom">Guardian Information</h4>
                                  </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian Name : <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="guardian_name" value="{{$sitter->guardian_name}}">
                                     <span class="text-danger">{{$errors->first('guardian_name')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian Mobile : <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="guardian_mobile" value="{{$sitter->guardian_mobile}}">
                                     <span class="text-danger">{{$errors->first('guardian_mobile')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian Email :</label>
                                     <input type="text" class="form-control" name="guardian_email" value="{{$sitter->guardian_email}}">
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian Photo : 
                                        <img src="{{asset($sitter->guardian_photo)}}" alt="" style="width: 50px;">
                                     </label>
                                     <input type="file" class="form-control" name="guardian_photo" value="{{old('guardian_photo')}}">
                                     <span class="text-danger">{{$errors->first('guardian_photo')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian NID : <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="guardian_nid_no" value="{{$sitter->guardian_nid_no}}">
                                     <span class="text-danger">{{$errors->first('guardian_nid_no')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian NID Front part : 
                                        <img src="{{asset($sitter->guardian_nid_front)}}" alt="" style="width: 50px;">
                                     </label>
                                     <input type="file" class="form-control" name="guardian_nid_front" value="{{old('guardian_nid_front')}}">
                                     <span class="text-danger">{{$errors->first('guardian_nid_front')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian NID Back part : 
                                        <img src="{{asset($sitter->guardian_nid_back)}}" alt="" style="width: 50px;">
                                     </label>
                                     <input type="file" class="form-control" name="guardian_nid_back" value="{{old('guardian_nid_back')}}">
                                     <span class="text-danger">{{$errors->first('guardian_nid_back')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Guardian Relationshp: <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="guardian_relationshp" value="{{$sitter->guardian_relationshp}}" >
                                     <span class="text-danger">{{$errors->first('guardian_relationshp')}}</span>
                                   </div>
                   
                                   <div class="col-md-12">
                                       <h4 class="border-bottom">Education Information</h4>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Degree Name: (latest only)</label>
                                     <input type="text" class="form-control" name="degree_name" value="{{$sitter->degree_name}}" >
                   
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Institute Name: </label>
                                     <input type="text" class="form-control" name="degree_institute" value="{{$sitter->degree_institute}}">
                   
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Group/Subject</label>
                                     <input type="text" class="form-control" name="degree_group" value="{{$sitter->degree_group}}" >
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Passing Year</label>
                                     <input type="text" class="form-control" name="passing_year" value="{{$sitter->passing_year}}">
                                   </div>
                   
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label"> Available Time : <span class="text-danger">*</span></label>
                                    <select name="available_time" class="form-control">
                                     <option value="">Select </option>
                                     <option value="Full Time" {{$sitter->available_time == 'Full Time' ? 'selected' : ''}}>Full Time </option>
                                     <option value="Part Time" {{$sitter->available_time == 'Part Time' ? 'selected' : ''}}>Part Time</option>
                                    </select>
                                     <span class="text-danger">{{$errors->first('available_time')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Expected Salary</label>
                                     <input type="text" class="form-control" name="expected_salary" value="{{$sitter->expected_salary}}">
                                   </div>
                   
                   
                                   <div class="col-md-12">
                                       <h4 class="border-bottom">Account Information</h4>
                                   </div>
                                    <div class="mb-3 col-md-6">
                                     <label class="form-label">Email Address : <span class="text-danger">*</span></label>
                                     <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                     <span class="text-danger">{{$errors->first('email')}}</span>
                                   </div>
                   
                                   <div class="mb-3 col-md-6">
                                     <label class="form-label">Mobile Number : <span class="text-danger">*</span></label>
                                     <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}">
                                     <span class="text-danger">{{$errors->first('mobile')}}</span>
                                   </div>
                                
                                    <div class="col-12 py-3 text-center">
                                        <button type="submit"  class="btn btn-primary"> Update</button>
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
