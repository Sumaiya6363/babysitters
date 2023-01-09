@extends('homepage.layouts.app')
@section('title','Sitters Payment')
@section('content')

      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <h2 class="inner-banner-title">Sitters Payment</h2>
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


            <div class="col-12 col-md-12 mb-3">
                <table class="table">
                    <tr>
                        <td> Sitter Name </td>
                        <td> {{ $sitterrequest->sitter?$sitterrequest->sitter->name:'' }} </td>
                        <td> Date </td>
                        <td>{{ Date('d-M-y', strtotime($sitterrequest->created_at)) }}</td>

                    </tr>
                    <tr>
                        <td> Period </td>
                        <td>{{ Date('d-M-y', strtotime($sitterrequest->start_date)) }} to {{ Date('d-M-y', strtotime($sitterrequest->end_date)) }}</td>
                        <td> Amount </td>
                        <td>{{ $sitterrequest->sitter?$sitterrequest->sitter->sitter->approved_salary:'' }}</td>
                    </tr>

                </table>
            </div>




                <div class="col-12 mt-4">
                    <a href="#" class="btn   btn-primary"
                    data-bs-placement="bottom" title=""
                    data-bs-original-title="Status info" aria-label="Edit"
                    data-bs-toggle="modal"
                    data-bs-target="#status_{{ $sitterrequest->id }}">  Pay Now </a>

                <div class="modal fade" id="status_{{ $sitterrequest->id }}"
                    tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Send Money This Number- Bkash/Rocket/Nagad (01628676016)</h5>
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-lg-12 d-flex">
                                        <div class="card border shadow-none w-100">
                                            <div class="card-body">
                                                <form class="row g-3" method="POST"
                                                    action="{{ route('sitter.payment',$sitterrequest->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="col-12">
                                                        <label
                                                            for="">Amount</label>

                                                        <input type="text"
                                                            name="amount"
                                                            value="{{ $sitterrequest->sitter?$sitterrequest->sitter->sitter->approved_salary:'' }}"
                                                            class="form-control" disabled>
                                                    </div>
                                                    <div class="col-12">
                                                        <label
                                                            for="">Transaction Number/Id</label>

                                                        <input type="text"
                                                            name="transaction_number"
                                                            value="{{$sitterrequest->transaction_number}}"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Payment Methods</label>
                                                        <select name="payment_method" id="" class="form-control">
                                                            <option value="bkash" {{$sitterrequest->payment_method == 'bkash' ? 'selected' : ''}}>Bkash</option>
                                                            <option value="rocket" {{$sitterrequest->payment_method == 'rocket' ? 'selected' : ''}}>Rocket</option>
                                                            <option value="nagad" {{$sitterrequest->payment_method == 'nagad' ? 'selected' : ''}}>Nagad</option>
                                                        </select>
                                                    </div>



                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit"> Submit Payment </button>
                                                        </div>
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

          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Login -->



@endsection()
