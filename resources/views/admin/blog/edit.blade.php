@extends('admin.layouts.app')
@section('title', 'Update Blog')
@section('content')



            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">Update Blog </h6>
                    <a href="{{route('blog.index')}}" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back to Blog</a>
                  </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6 py-3">
                                        <label for="#"  class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $blog->title}}">
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Title Bangla</label>
                                        <input type="text" class="form-control" name="bn_title" value="{{$blog->bn_title}}">
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Category</label>
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select</option>
                                            @foreach ($blog_categories as $item)
                                                <option value="{{$item->id}}" {{$item->id == $blog->category_id ? 'selected' : '' }}>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Image (w:400px, h:300px)
                                            <img src="{{asset($blog->image)}}" alt="image" width="50">
                                        </label>
                                        <input type="file" class="form-control" name="image">
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    </div>
                                     <div class="col-md-12 py-3">
                                        <label for="#" class="form-label">Description</label>
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control summernote" id="">{{ $blog->description }}</textarea>
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    </div>
                                   
                                    <div class="col-md-6 py-3">
                                        <label for="#"  class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title"
                                            value="{{ $blog->meta_title}}">
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <label for="#"  class="form-label">Meta Tag</label>
                                       <input type="text" name="meta_tags" value="{{$blog->meta_tags}}" class="form-control">
                                    </div>
                                    <div class="col-md-12 py-3">
                                        <label for="#"  class="form-label">Meta Description</label>
                                        <textarea name="meta_description" id="" cols="30" rows="10" class="form-control" style="height: 100px;">{{ $blog->meta_description }}</textarea>
                                    </div>
                                  

                                    <div class="col-md-6 py-3">
                                        <label for="#" class="form-label">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="1" {{$blog->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="2" {{$blog->status == 2 ? 'selected' : ''}}>Deactive</option>
                                        </select>
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    </div>
                                  
                                </div>
                                <div class="col-12 py-3 text-center">
                                    <a href="{{route('blog.index')}}" type="submit" class="btn btn-warning" style="margin-right: 20px"> Cancel</a>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </div>
                        </div>
                        </form>

                    </div>
                    <!--end row-->
                </div>
            </div>
 
@endsection
