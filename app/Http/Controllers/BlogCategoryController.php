<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog_categories'] = BlogCategory::where('status', 1)->get();
        return view('admin.blog-category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-category.create');
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
            'name' => 'required',
            'image'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'  =>  'required'
        ]);



        $data = new BlogCategory();
        $input = $request->except('_token','image');


        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blog-categories/'), $photo_name);
            $input['image'] = 'uploads/blog-categories/'. $photo_name;
        }

        $data->fill($input)->save();
        return redirect()->route('blog-category.index')->with('success','Blog Category Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['blog_category'] = BlogCategory::findOrFail($id);
        return view('admin.blog-category.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['blog_category'] = BlogCategory::findOrFail($id);
        return view('admin.blog-category.edit',$data);
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
            'name' => 'required',
            'image'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'  =>  'required'
        ]);



        $data = BlogCategory::findOrFail($id);
        $input = $request->except('_token','image');


        if ($request->hasFile('image')) {
            if($data->image) {
            unlink(public_path($data->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blog-categories/'), $photo_name);
            $input['image'] = 'uploads/blog-categories/'. $photo_name;
        }

        $data->fill($input)->save();
        return redirect()->route('blog-category.index')->with('success','Blog Category Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_category = BlogCategory::findOrFail($id);
        if($blog_category){
            if($blog_category->image) {
                unlink(public_path($blog_category->image));
                }
            $blog_category->delete();
        }

        return redirect()->back()->with('success','Blog Category Delete successfully');

        
    }
}
