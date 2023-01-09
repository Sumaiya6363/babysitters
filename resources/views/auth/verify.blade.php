@extends('homepage.layouts.app')
@section('title','Verify Email')
@section('content')


<section class="header-inner bg-dark text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 ">
        <h2 class="inner-banner-title">Email Verify</h2>
      </div>
    </div>
  </div>
</section>

<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
