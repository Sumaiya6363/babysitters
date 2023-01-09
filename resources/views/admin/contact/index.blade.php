@extends('admin.layouts.app')
@section('title', 'Contact')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Contact</div>
        {{-- <div class="" style="padding-left: 10px"> <a href="{{ route('web-setting.edit',$websetting->id) }}"><i
                    class="bi bi-lock"></i> Edit Websettings</a></div> --}}
    </div>

    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                         <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Mobile Number</th>
                              <th scope="col">Email</th>
                              <th scope="col">Message</th>
                              <th scope="col">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($contacts as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->message}}</td>
                                <td>
                                    <a href="{{route('admin.contact.delete',$item->id)}}" onclick="return confirm('Are you sure, Want to Delete this Item!')">
                                        <i class="bi bi-trash text-danger"></i>
                                    </a>
                                </td>
                              </tr>
                            @endforeach
                            
                            
                          </tbody>
                      </table>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
