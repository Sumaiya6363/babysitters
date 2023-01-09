@extends('admin.layouts.app')
@section('title', 'Sitter Request Show')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sitter Request Show</div>
        <div class="" style="padding-left: 10px">  <a href="{{route('admin.sitter.index')}}"><i class="bi bi-arrow-counterclockwise"></i> Back To Sitter Users</a></div>


    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover">
                            <tbody>
                                   <tr>
                                        <th style="width:20%">Sitter  Name</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->sitter ? $sitter->user->name : ''  }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">User Name</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->user ? $sitter->user->name : ''  }}</td>
                                    </tr>
                                     <tr>
                                        <th style="width:20%">Name</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->email }}</td>
                                    </tr>
                                  
                                    <tr>
                                        <th>Mobile Number</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->address }}</td>
                                    </tr>
                                     <tr>
                                        <th>Start Date</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ Carbon\Carbon::parse($sitter->start_date)->format('d-M-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>End Date</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ Carbon\Carbon::parse($sitter->end_date)->format('d-M-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Hire Type</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->hire_type }}</td>
                                    </tr>
                                     <tr>
                                        <th>Payment Period</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->payment_period }}</td>
                                    </tr>
                                    <tr>
                                        <th>Amount</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->amount }}</td>
                                    </tr>

                                    @if($sitter->payment_status == 'accepet')
                                      
                                     <tr>
                                        <th>Transaction ID</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->transaction_number }}</td>
                                    </tr>

                                    <tr>
                                        <th>Method</th>
                                        <th style="width:2%">:</th>
                                        <td>
                                             {{ $sitter->payment_method  }}
                                        </td>
                                    </tr>

                                    @endif
                                    </tr>
                                
                                     <tr>
                                        <th>Comments</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ $sitter->comments }}</td>
                                    </tr>
                                    <tr>
                                        <th>Request Date</th>
                                        <th style="width:2%">:</th>
                                        <td>{{ Carbon\Carbon::parse($sitter->created_at)->format('d-M-Y') }}</td>
                                    </tr>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
