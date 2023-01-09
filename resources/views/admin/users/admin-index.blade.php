@extends('admin.layouts.app')
@section('title', 'Admin Users')
@section('content')

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admin Users</div>


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
                                       
                                        <td class="d-flex align-itmes-center">
                                        
                                            <a href="#" class="text-primary px-2"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-original-title="View detail" aria-label="Views"> <i
                                                class="bi bi-eye-fill"></i>
                                        </a>
                                          

                                            <a href="#" class="text-warning px-2"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-original-title="Edit" aria-label="Edit"> <i
                                                    class="bi bi-pencil-fill"></i>
                                            </a>
                                          
                                            <form action="#" method="POST">
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
