@extends('homepage.layouts.app')
@section('title','Sitters Detils')

@push('css')
    <style>
        .seeter-details-head p{
            font-size: 16px;
            margin: 0;
        }
        .seeter-details-head a{
            padding: 10px 20px;
            border: 1px solid yellow;
            color: #000000;
            background: yellow;
            font-weight: 700;
            display: inline-block;
            margin-top: 15px;
        }
    </style>
@endpush
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Sitters Details</h2>
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
                <div class="seeter-details-head text-center">
                    <img src="{{asset($seeter->image)}}" alt="image" width="150">
                    <h4 class="mt-2">{{$seeter->user ? $seeter->user->name : ''}}</h4>
                    <p><b>Address :</b>{{$seeter->user ? $seeter->user->address : ''}}</p>
                    <p><b>Degree :</b>{{$seeter->degree_name}}</p>
                    <p><b>Instituteree :</b>{{$seeter->degree_institute}}</p>
                    <p><b>Passing Year :</b>{{$seeter->passing_year}}</p>
                    <p><b>Available Time :</b>{{$seeter->available_time}}</p>
                    <p><b>Charge :</b>{{$seeter->approved_salary}}</p>

                    <a href="{{route('sitter.request',['id'=>$seeter->user ? $seeter->user->id : '' ])}}">Setter Request</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Login -->



@endsection()
