<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs'] = Blog::where('status', 1)->get();
        return view('admin.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['blog_categories'] = BlogCategory::where('status',1)->get();
        return view('admin.blog.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'  =>  'required'
        ]);



        $data = new Blog();
        $input = $request->except('_token','image');


        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blogs/'), $photo_name);
            $input['image'] = 'uploads/blogs/'. $photo_name;
        }
        $input['slug'] = Str::slug($request->title);
        $data->fill($input)->save();
        return redirect()->route('blog.index')->with('success','Blog Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['blog'] = Blog::findOrFail($id);
        return view('admin.blog.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['blog'] = Blog::findOrFail($id);
        $data['blog_categories'] = BlogCategory::where('status',1)->get();
        return view('admin.blog.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'  =>  'required'
        ]);

        $data =  Blog::findOrFail($id);
        $input = $request->except('_token','image');
        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blogs/'), $photo_name);
            $input['image'] = 'uploads/blogs/'. $photo_name;
        }
        $input['slug'] = Str::slug($request->title);
        $data->fill($input)->save();
        return redirect()->route('blog.index')->with('success','Blog Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if($blog){
            if($blog->image) {
                unlink(public_path($blog->image));
                }
            $blog->delete();
        }
        return redirect()->back()->with('success','Blog Category Delete successfully');
        
    }
}