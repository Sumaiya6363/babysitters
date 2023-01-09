@extends('homepage.layouts.app')
@section('title','Sitters register')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Sitters Registration</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Login -->
    <section class="space-ptb login p-3" style="background: #F0F0F7;">
      <div class="container">
        <div class="row">
             @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif

          <div class="m-auto p-4 bg-white" style="max-width: 800px; border-radius: 10px; box-shedow: 0 1px 8px 0 rgb(201 201 201 / 50%); borer: solid 1px #e6e6e6;">
            <form class="row mt-4 mb-5 align-items-center" action="{{route('sitter.register')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="col-md-12">
                 <h4 class="border-bottom">Personal Information</h4>
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label">Full Name : <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                <span class="text-danger">{{$errors->first('name')}}</span>
              </div>

               <div class="mb-3 col-md-6">
                  <label class="form-label">Address : <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="address" value="{{old('address')}}" required>
                  <span class="text-danger">{{$errors->first('address')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label"> image : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="image" required>
                  <span class="text-danger">{{$errors->first('image')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label"> Home District : <span class="text-danger">*</span></label>
                 <select name="home_district" class="form-control" required>
                  <option value="">Select</option>
                  @foreach ($districts as $item)
                    <option value="{{$item->id}}" {{old('home_district') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                  @endforeach
                 </select>
                  <span class="text-danger">{{$errors->first('home_district')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label"> Current District : <span class="text-danger">*</span></label>
                  <select name="current_district" class="form-control" required>
                  <option value="">Select</option>
                  @foreach ($districts as $item)
                    <option value="{{$item->id}}" {{old('current_district') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                  @endforeach
                 </select>
                  <span class="text-danger">{{$errors->first('current_district')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">NID Number : <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nid_no" value="{{old('nid_no')}}" required>
                  <span class="text-danger">{{$errors->first('nid_no')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label"> NID Front part : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="nid_front" required>
                  <span class="text-danger">{{$errors->first('nid_front')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label"> NID Back part : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="nid_back" required>
                  <span class="text-danger">{{$errors->first('nid_back')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label"> Self CV : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="self_cv" required>
                  <span class="text-danger">{{$errors->first('self_cv')}}</span>
                </div>

                <div class="col-md-12">
                    <h4 class="border-bottom">Guardian Information</h4>
               </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian Name : <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="guardian_name" value="{{old('guardian_name')}}" required>
                  <span class="text-danger">{{$errors->first('guardian_name')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian Mobile : <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="guardian_mobile" value="{{old('guardian_mobile')}}" required>
                  <span class="text-danger">{{$errors->first('guardian_mobile')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian Email :</label>
                  <input type="text" class="form-control" name="guardian_email" value="{{old('guardian_email')}}">
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian Photo : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="guardian_photo" value="{{old('guardian_photo')}}" required>
                  <span class="text-danger">{{$errors->first('guardian_photo')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian NID : <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="guardian_nid_no" value="{{old('guardian_nid_no')}}" required>
                  <span class="text-danger">{{$errors->first('guardian_nid_no')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian NID Front part : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="guardian_nid_front" value="{{old('guardian_nid_front')}}" >
                  <span class="text-danger">{{$errors->first('guardian_nid_front')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian NID Back part : <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="guardian_nid_back" value="{{old('guardian_nid_back')}}" required>
                  <span class="text-danger">{{$errors->first('guardian_nid_back')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Guardian Relationshp: <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="guardian_relationshp" value="{{old('guardian_relationshp')}}" required>
                  <span class="text-danger">{{$errors->first('guardian_relationshp')}}</span>
                </div>

                <div class="col-md-12">
                    <h4 class="border-bottom">Education Information</h4>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Degree Name: (latest only)</label>
                  <input type="text" class="form-control" name="degree_name" value="{{old('degree_name')}}" required>
                  <span class="text-danger">{{$errors->first('degree_name')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Institute Name: </label>
                  <input type="text" class="form-control" name="degree_institute" value="{{old('degree_institute')}}" required>
                  <span class="text-danger">{{$errors->first('degree_institute')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Group/Subject</label>
                  <input type="text" class="form-control" name="degree_group" value="{{old('degree_group')}}" required>
                  <span class="text-danger">{{$errors->first('degree_group')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Passing Year</label>
                  <input type="text" class="form-control" name="passing_year" value="{{old('passing_year')}}" required>
                  <span class="text-danger">{{$errors->first('passing_year')}}</span>
                </div>


                <div class="mb-3 col-md-6">
                  <label class="form-label"> Available Time : <span class="text-danger">*</span></label>
                 <select name="available_time" class="form-control" required>
                  <option value="">Select </option>
                  <option value="Full Time" {{old('available_time' == 'Full Time' ? 'selected' : '')}}>Full Time </option>
                  <option value="Part Time" {{old('available_time' == 'Part Time' ? 'selected' : '')}}>Part Time</option>
                 </select>
                  <span class="text-danger">{{$errors->first('available_time')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Expected Salary</label>
                  <input type="text" class="form-control" name="expected_salary" value="{{old('expected_salary')}}" required>
                  <span class="text-danger">{{$errors->first('expected_salary')}}</span>
                </div>


                <div class="col-md-12">
                    <h4 class="border-bottom">Account Information</h4>
                </div>
                 <div class="mb-3 col-md-6">
                  <label class="form-label">Email Address : <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>

                <div class="mb-3 col-md-6">
                  <label class="form-label">Mobile Number : <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" required>
                  <span class="text-danger">{{$errors->first('mobile')}}</span>
                </div>


                <div class="mb-3 col-md-6">
                  <label class="form-label">Password: <span class="text-danger">*</span></label>
                  <input type="Password" class="form-control" name="password" required>
                  <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label">Confirm Password:  <span class="text-danger">*</span></label>
                  <input type="Password" class="form-control" name="password_confirmation" required>
                  <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                </div>

                <div class="col-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                        <li class="me-1"><a class="text-dark" href="{{ route('user.login') }}">Already Registered User? Click here to login</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Login -->

    <!--=================================
    Action-box -->
    <section class="space-pb">
      <div class="container">
        <div class="callout">
          <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7 col-md-9">
              <div class="callout-title">
                <h3>Are you looking for baby sitter just call us!</h3>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 d-none d-lg-block">
              <img class="img-fluid" src="images/action-box-arrow.png" alt="">
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
              <div class="callout-botton">
                <a href="tel:7042791249" class="btn btn-md btn-primary"><i class="fas fa-headset"></i>+8801779325718</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Action-box -->


@endsection()
