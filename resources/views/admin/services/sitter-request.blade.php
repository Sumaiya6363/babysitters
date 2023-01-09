@extends('admin.layouts.app')
@section('title', 'Sitter Request')
@section('content')
    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">Sitters Order Request</h6>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 d-flex">
                <div class="card border shadow-none w-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Request date</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Hire Type</th>
                                    <th>Payment Type</th>
                                    <th>Payment</th>
                                    <th>Amount</th>
                                    <th>Sitter</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sitterrequests as $sitterrequest)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Date('d-M-y',strtotime($sitterrequest->created_at)) }}</td>
                                    <td>{{ Date('d-M-y',strtotime($sitterrequest->start_date)) }}</td>
                                    <td>{{ Date('d-M-y',strtotime($sitterrequest->end_date)) }}</td>
                                    <td>{{ $sitterrequest->hire_type }}</td>
                                    <td>{{ $sitterrequest->payment_period }}</td>
                                    <td>
                                        @if($sitterrequest->payment_approved_request == '1')
                                        <a href="#" class="badge  bg-primary"  data-bs-placement="bottom" title="" data-bs-original-title="Status info" aria-label="Edit" data-bs-toggle="modal" data-bs-target="#payment_status_{{ $sitterrequest->id }}"> Aproved Request</a>

                                        <div class="modal fade" id="payment_status_{{ $sitterrequest->id }}" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Payment Approved Request </h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                                                         <div class="row">
                                                            <div class="col-12 col-lg-12 d-flex">
                                                            <div class="card border shadow-none w-100">
                                                                <div class="card-body">
                                                                    <form class="row g-3" method="POST"
                                                                    action="{{ route('admin.sitter.payment',$sitterrequest->id) }}"
                                                                    enctype="multipart/form-data">
                                                                    @csrf


                                                                    <div class="col-12">
                                                                        <label
                                                                            for="">Amount</label>

                                                                        <input type="text"
                                                                            name="amount"
                                                                            value="{{ $sitterrequest->amount }}"
                                                                            class="form-control" disabled>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label
                                                                            for="">Transaction Number/Id</label>

                                                                        <input type="text"
                                                                            name="transaction_number"
                                                                            value="{{$sitterrequest->transaction_number}}"
                                                                            class="form-control" disabled>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="">Payment Methods</label>
                                                                        
                                                                        <select name="payment_method" id="" class="form-control" disabled>
                                                                            <option value="">Select</option>
                                                                            <option value="bkash" {{$sitterrequest->payment_method == 'bkash' ? 'selected' : ''}}>Bkash</option>
                                                                            <option value="rocket" {{$sitterrequest->payment_method == 'rocket' ? 'selected' : ''}}>Rocket</option>
                                                                            <option value="nagad" {{$sitterrequest->payment_method == 'nagad' ? 'selected' : ''}}>Nagad</option>
                                                                        </select>
                                                                    </div>

                                                                    <div>
                                                                        <input type="checkbox" name="payment_approved_request" value="2" id="payment_approved_request">
                                                                        <label for="payment_approved_request">Approved Payment Request</label>
                                                                    </div>



                                                                    <div class="col-12">
                                                                        <div class="d-grid">
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Approved</button>
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
                                        @endif
                                    </td>
                                    <td>{{ $sitterrequest->amount }}</td>
                                    <td>
                                        @if($sitterrequest->sitter_id != null)
                                            {{ $sitterrequest->sitter->name }}
                                        @else
                                            Not Assign
                                        @endif
                                    </td>
                                    <td>
                                        @if($sitterrequest->status==2)
                                            <p class="btn btn-warning btn-sm">Pending</p>
                                        @elseif($sitterrequest->status==1)
                                            <p class="btn btn-success btn-sm">Confirmed</p>
                                        @elseif($sitterrequest->status==3)
                                            <p class="btn btn-info btn-sm">Accepet</p>
                                        @elseif($sitterrequest->status==0)
                                         <p class="btn btn-danger btn-sm"> Cancel </p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('sitter.request.show',$sitterrequest->id)}}" class="text-primary px-2"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-original-title="View detail" aria-label="Views"> <i
                                                class="bi bi-eye-fill"></i>
                                        </a>
                                            <a href="#" class="btn  btn-primary btn-sm"  data-bs-placement="bottom" title="" data-bs-original-title="Status info" aria-label="Edit" data-bs-toggle="modal" data-bs-target="#status_{{ $sitterrequest->id }}"> <i class="bi bi-pencil-fill"></i> Change Status</a>

                                             <div class="modal fade" id="status_{{ $sitterrequest->id }}" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Change Service Status </h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
                                                         <div class="row">
                                                            <div class="col-12 col-lg-12 d-flex">
                                                            <div class="card border shadow-none w-100">
                                                                <div class="card-body">
                                                                <form class="row g-3" method="POST" action="{{ route('admin.sitter.request.approved',$sitterrequest->id)  }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="col-12">
                                                                        <label class="form-label">Status</label>
                                                                        <select name="status" id="status" class="form-control">
                                                                            <option {{ $sitterrequest->status == 2 ? 'selected' : '' }} value="2">Pending</option>
                                                                            <option {{ $sitterrequest->status == 3 ? 'selected' : '' }} value="3">Accepet</option>
                                                                            <option {{ $sitterrequest->status == 1 ? 'selected' : '' }} value="1">Approved</option>
                                                                            <option {{ $sitterrequest->status == 0 ? 'selected' : '' }} value="0">Cancel</option>
                                                                        </select>
                                                                        <div class="text-danger">{{ $errors->first('status') }}</div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Seeter Name</label>
                                                                        <select name="sitter_id" id="sitter_id" class="form-control">
                                                                            <option value="">Select Sitters</option>
                                                                            @foreach ($sitters as $sitter)
                                                                            <option {{ $sitterrequest->sitter_id == $sitter->id ? 'selected' : '' }} value="{{  $sitter->id }}"> {{  $sitter->name }}</option>
                                                                            @endforeach

                                                                        </select>
                                                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                                                    </div>



                                                                    <div class="col-12">
                                                                        <label for="">Amount</label>
                                                                        
                                                                        <input type="text" name="amount" value="{{ $sitterrequest->amount }}" class="form-control">
                                                                    </div>
                                                                    <div>
                                                                       <div class="d-flex">
                                                                            <div>
                                                                                <input type="radio" id="payment_request" name="payment_status" value="request" {{$sitterrequest->payment_status == 'request' ? 'checked' : ''}}>
                                                                                <label for="payment_request">Payment Request</label>
                                                                            </div>
                                                                            <div class="ps-3">
                                                                                <input type="radio" id="accpet_payment" name="payment_status" value="accepet"  {{$sitterrequest->payment_status == 'accepet' ? 'checked' : ''}}>
                                                                                <label for="accpet_payment">Accepet Payment</label>
                                                                            </div>
                                                                       </div>
                                                                    </div>



                                                                    <div class="col-12">
                                                                        <div class="d-grid">
                                                                            <button type="submit" class="btn btn-primary">Update Status</button>
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
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                </div>
            </div>
            </div><!--end row-->
        </div>
    </div>
@endsection
