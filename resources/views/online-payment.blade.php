@extends('homepage.layouts.app')
@section('title', 'Contact')
@section('content')

    <!--=================================
        banner -->
    <section class="header-inner bg-dark text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h2 class="inner-banner-title">Online Payment {{ request('order') }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        banner -->

    <!--=================================
        map -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div>
                        <div class="row">
                            <div class="col-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <img src="{{ asset('home/images/bkash.jpg') }}" alt="" style="width: 100%;">
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Bkash Payment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{route('online.payment.custom',request('order'))}}" method="POST">
                                                @csrf
                                            <div class="modal-body">
                                                <div>
                                                    <label for="">Bkash Number</label>
                                                    <input type="text" class="form-control" name="payment_account">
                                                    <input type="hidden" value="bkash" name="payment_method">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Payment</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <img src="{{ asset('home/images/rocket.jpg') }}" alt="" style="width: 100%;">
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Rocket Payment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{route('online.payment',request('order'))}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div>
                                                        <label for="">rocket Number</label>
                                                        <input type="text" class="form-control" name="payment_account">
                                                        <input type="hidden" value="rocket" name="payment_method">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Payment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        map -->


@endsection()
