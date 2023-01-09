@extends('users.layouts.app')
@section('title', 'Sitters Request')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sitters</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sitters Request</li>
                </ol>
            </nav>
        </div>

    </div>
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

                                            <th>Payment</th>
                                            <th>Amount</th>
                                            <th>Sitter</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sitterrequests as $sitterrequest)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ Date('d-M-y', strtotime($sitterrequest->created_at)) }}</td>
                                                <td>{{ Date('d-M-y', strtotime($sitterrequest->start_date)) }}</td>
                                                <td>{{ Date('d-M-y', strtotime($sitterrequest->end_date)) }}</td>
                                                <td>{{ $sitterrequest->hire_type }}</td>
                                                <td>{{ $sitterrequest->payment_period }}</td>

                                                <td>{{ $sitterrequest->amount }}</td>
                                                <td>
                                                    @if ($sitterrequest->sitter_id != null)
                                                        {{ $sitterrequest->sitter?$sitterrequest->sitter->name:'' }}
                                                    @else
                                                        Not Assign
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($sitterrequest->status == 2)
                                                        <p class="btn btn-warning">Pending</p>
                                                    @elseif($sitterrequest->status == 1)
                                                        <p class="btn btn-success">Approved</p>
                                                    @elseif($sitterrequest->status == 3)
                                                        <p class="btn btn-info">Accpet</p>
                                                    @elseif($sitterrequest->status == 0)
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
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
