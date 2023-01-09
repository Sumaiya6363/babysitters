@extends('users.layouts.app')
@section('title','Shop Order Request')
@section('content')

    <div class="card">
        <div class="card-header py-3">
            <h6 class="mb-0">Shop Orders</h6>
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
                                    <th>Order Id</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Order date</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shop_orders as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->total }}</td>
                                    <td>
                                        @if ($item->payment_status == 1)
                                            <button class="btn btn-primary btn-sm">unpaid</button>
                                        @elseif ($item->payment_status == 2)
                                            <button class="btn btn-danger btn-sm">Paid</button>
                                        
                                        @endif
                                    </td>
                                    <td>{{ Date('d-M-y',strtotime($item->created_at)) }}</td>
                                    <td>
                                        @if ($item->status == 0)
                                        <span class="btn btn-danger status-btn btn-sm ">Cancel</span>
                                    @elseif($item->status == 1)
                                        <span class="btn btn-success status-btn btn-sm">Confirmed</span>
                                    @elseif($item->status == 2)
                                        <span class="btn btn-warning status-btn btn-sm">Pending</span>
                                    @elseif($item->status == 3)
                                        <span class="btn btn-info status-btn btn-sm">Processing</span>
                                    @elseif($item->status == 5)
                                        <span class="btn btn-warning status-btn btn-sm">Delivered</span>
                                   
                                    @endif
                                    </td>
                                   <td>
                                    <a href="{{route('user.shop.order.details',$item->id)}}" class="btn btn-primary btn-sm">Show</a>
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
