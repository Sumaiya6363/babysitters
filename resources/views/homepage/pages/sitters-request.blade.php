@extends('homepage.layouts.app')
@section('title','Sitters Request')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Sitters Request</h2>
          </div>
        </div>
      </div>
    </section>
    <!--================================= banner -->

    <!--================================= Login -->
    <section class="space-ptb login p-3" style="background: #F0F0F7;">
      <div class="container">
        <div class="row">
          <div class="m-auto p-4 bg-white" style="max-width: 700px; border-radius: 10px; box-shedow: 0 1px 8px 0 rgb(201 201 201 / 50%); borer: solid 1px #e6e6e6;">
            <form class="row mt-4 mb-5 align-items-center" action="{{route('sitter.request')}}" method="post" enctype="multipart/form-data">
              @csrf
               
            <div class="col-12 col-md-12 mb-3">
                <label class="pb-2">Select Sitter</label>

                <select name="sitter_id" id="sitter_id"  class="form-control">
                    <option value="">Select Sitter </option>
                    @foreach ($sitters as $sitter)
                    <option @if(isset($is_sitter)) {{ $is_sitter == $sitter->id ? 'selected' : '' }} @endif value="{{ $sitter->id }}">{{ $sitter->name }}</option>
                    @endforeach
                    <option value="">Request without Sitters</option>
                </select>
                <div class="text-darger">{{  $errors->first('hire_type') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <label class="pb-2">Your Name</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}">
              <div class="text-darger">{{  $errors->first('name') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <label class="pb-2">Your Email</label>
              <input type="text" class="form-control" name="email" value="{{old('email')}}">
              <div class="text-darger">{{  $errors->first('email') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <label class="pb-2">Your Mobile  Number</label>
              <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}">
              <div class="text-darger">{{  $errors->first('mobile') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <label class="pb-2">Your Address</label>
              <input type="text" class="form-control" name="address" value="{{old('address')}}">
              <div class="text-darger">{{  $errors->first('address') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Hire Type</label>
                <select name="hire_type" id="hire_type"  class="form-control">
                    <option value="Monthly">Monthly</option>
                    <option value="Daily">Daily</option>
                </select>
                <div class="text-darger">{{  $errors->first('hire_type') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Payment Period</label>
                <select name="payment_period" id="payment_period"  class="form-control">
                    <option value="Monthly">Monthly</option>
                    <option value="Daily">Daily</option>
                </select>
                <div class="text-darger">{{  $errors->first('hire_type') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">Starting Date</label>
                <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Start_date" value="{{ old('start_date') }}">
                <div class="text-danger">{{  $errors->first('start_date') }}</div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label class="pb-2">End Date</label>
                <input type="date" class="form-control" name="end_date" id="end_date" placeholder="end_date" value="{{ old('end_date') }}">
                <div class="text-danger">{{  $errors->first('end_date') }}</div>
            </div>

            <div class="col-12 col-md-12 mb-3">
                <label class="pb-2">Comments</label>
                <textarea name="comments" id="comments" class="form-control"></textarea>
                <div class="text-danger">{{  $errors->first('address') }}</div>
            </div>




                <div class="col-12 mt-4">
                  <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                      <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Submit Request</button>
                      </div>
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



@endsection()
