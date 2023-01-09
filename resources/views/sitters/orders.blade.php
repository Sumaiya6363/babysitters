@extends('sitters.layouts.app')
@section('title','Orders')
@section('content')


    <div class="row">
        <div class="col-md-12">
              <div class="card">
                    <div class="card-header py-3">
                        <h6 class="mb-0">Sitters Request</h6>
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

                                                <th>Status</th>

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
                                                    @if($sitterrequest->status == 2)
                                                        <p class="btn btn-warning">Pending</p>
                                                    @elseif($sitterrequest->status == 1)
                                                        <p class="btn btn-success">Success</p>
                                                    @elseif($sitterrequest->status == 0 )
                                                    <p class="btn btn-danger"> Cancel </p>
                                                    @endif
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
        </div>
     </div></div>
@endsection
