@extends('admin.layouts.app')
@section('title', 'Sitter Users')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sitter Users</div>


    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="table-responsive">
                        <table class="table align-middle table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile </th>
                                    <th>Address</th>
                                    <th>Expected <br> Salary</th>
                                    <th>Approved <br> Salary</th>
                                    <th>Publish <br> Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->address }}</td>

                                        <td>{{ $item->sitter ? $item->sitter->expected_salary : ''}}</td>
                                        <td>{{ $item->sitter ? $item->sitter->approved_salary : ''}}</td>
                                        <td>{{ $item->sitter ? $item->sitter->user_salary : ''}}</td>

                                        <td>
                                            @if ($item->status == 2)
                                                <form action="{{route('user.active',$item->id)}}" method="post" onclick="return confirm('Are you sure, Want to Active this User!')">
                                                    @csrf
                                                    <button class="btn btn-warning btn-sm text-dark">Request</button>
                                                </form>
                                            @else ($item->status == 1)
                                                <form action="{{route('user.inactive',$item->id)}}" method="post" onclick="return confirm('Are you sure, Want to Inactive this User!')">
                                                    @csrf
                                                    <button class="btn btn-success btn-sm">Approved</button>
                                                </form>
                                            @endif
                                        </td>

                                        <td class="d-flex align-itmes-center">

                                            <a href="{{route('sitter.user.show',$item->id)}}" class="text-primary px-2"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-original-title="View detail" aria-label="Views"> <i
                                                class="bi bi-eye-fill"></i>
                                        </a>


                                            <a href="{{route('sitter.user.edit',$item->id)}}" class="text-warning px-2"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-original-title="Edit" aria-label="Edit"> <i
                                                    class="bi bi-pencil-fill"></i>
                                            </a>
                                            <form action="javascript:void(0)" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="padding: 0;" class="text-danger btn" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
