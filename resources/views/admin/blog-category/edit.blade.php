@extends('admin.layouts.app')
@section('title', 'Edit Blog Category')
@section('content')



            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Edit Blog Category </h6>
                    <a href="{{route('blog-category.index')}}" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back to Blog Categories</a>
                  </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('blog-category.update',$blog_category->id) }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6 py-3">
                                        <label for="#"  class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $blog_category->name}}">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Name Bangla</label>
                                        <input type="text" class="form-control" name="bn_name" value="{{$blog_category->bn_name}}">
                                      
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Image (w:400px, h:300px)
                                            <img src="{{asset($blog_category->image)}}" alt="" width="50" height="50">
                                        </label>
                                        <input type="file" class="form-control" name="image">
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="1" {{$blog_category->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="2" {{$blog_category->status == 2 ? 'selected' : ''}}>Deactive</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    </div>
                                  
                                </div>
                                <div class="col-12 py-3 text-center">
                                    <a href="{{route('blog-category.index')}}" type="submit" class="btn btn-warning" style="margin-right: 20px"> Cancel</a>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </div>
                        </div>
                        </form>

                    </div>
                    <!--end row-->
                </div>
            </div>
 
@endsection
