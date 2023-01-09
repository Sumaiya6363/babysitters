@extends('admin.layouts.app')
@section('title', 'Show Blog Category List')
@section('content')
    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="mb-0">Show Blog Category </h6>
            <a href="{{ route('blog-category.index') }}" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back to Blog Categories</a>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $blog_category->name }}</td>
                        </tr>
                        <tr>
                            <th>Bangla Name</th>
                            <td>{{ $blog_category->bn_name }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{ asset($blog_category->image) }}" alt="" width="100">
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($blog_category->status == 1)
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($blog_category->status == 2)
                                    <button class="btn btn-sm btn-Danger">Dective</button>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Edit</th>
                            <td>
                                <a href="{{ route('blog-category.edit', $blog_category->id) }}"
                                    class="btn btn-secondary text-white p-1" style="font-size: 14px;"><i class="bi bi-pencil-square" style="margin-right: 5px;"></i>Edit</a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
