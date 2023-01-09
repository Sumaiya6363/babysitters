@extends('admin.layouts.app')
@section('title','All Blog Category List')
@section('content')
            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                  <h6 class="mb-0">Blog Category </h6>
                  <a href="{{route('blog-category.create')}}" class="btn btn-primary btn-sm"> <i class="bi bi-plus-lg"></i> Create Blog Category</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive mt-3">
                    <table class="table align-middle">
                        <thead class="table-secondary">
                        <tr>
                            <th>SL#</th>
                            <th>NAME</th>
                            <th>BN NAME</th>
                            <th>IMAGE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blog_categories as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->bn_name}}</td>
                            <td>
                                <img src="{{asset($item->image)}}" alt="" style="width: 60px">
                            </td>
                            <td>
                                @if ($item->status == 1)
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($item->status == 2)
                                    <button class="btn btn-sm btn-Danger">Dective</button>
                                @endif
                            </td>
                           
                           
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{ route('blog-category.edit',$item->id) }}" class="btn btn-secondary text-white p-1"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{ route('blog-category.show',$item->id) }}" class="btn btn-info text-white p-1"><i class="bi bi-eye"></i></a>
                                    <form action="{{ route('blog-category.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="confirm('Are you sure delete this data')">  <i class="bi bi-trash"></i></button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>

                        @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
        </div>


@endsection
