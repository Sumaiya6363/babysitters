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
                            <th>Title</th>
                            <td>{{ $blog->title }}</td>
                        </tr>
                        <tr>
                            <th>Bangla Title</th>
                            <td>{{ $blog->bn_title }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{ asset($blog->image) }}" alt="" width="100">
                            </td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>
                                {{$blog->blog_category ? $blog->blog_category->name : ''}}
                            </td>
                        </tr>
                         <tr>
                            <th>Description</th>
                            <td>
                                {!! $blog->description !!}
                            </td>
                        </tr>
                      <tr>
                            <th>Meta Title</th>
                            <td>
                                {{ $blog->meta_title }}
                            </td>
                        </tr>
                        <tr>
                            <th>Meta Tag</th>
                            <td>
                                {{ $blog->meta_tags }}
                            </td>
                        </tr>
                         <tr>
                            <th>Meta Description</th>
                            <td>
                                {{ $blog->meta_description }}
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($blog->status == 1)
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($blog->status == 2)
                                    <button class="btn btn-sm btn-Danger">Dective</button>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Edit</th>
                            <td>
                                <a href="{{ route('blog.edit', $blog->id) }}"
                                    class="btn btn-secondary text-white p-1" style="font-size: 14px;"><i class="bi bi-pencil-square" style="margin-right: 5px;"></i>Edit</a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
