<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\MenuType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['foods'] = Product::latest()->WhereNull('deleted_at')->get();
        return view('admin.products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = ProductCategory::latest()->whereNull('deleted_at')->get();
        $data['menutypes'] = MenuType::latest()->get();
       return view('admin.products.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //    $request->validate([
    //         'name' => 'required',
    //         'price' => 'required',
    //         'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $input['menu_type_id'] = 1;

        Product::create($input);

        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
       $data['food'] = Product::find($id);
       $data['categories'] = ProductCategory::latest()->whereNull('deleted_at')->get();
       $data['menutypes'] = MenuType::latest()->get();
       return view('admin.products.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        // $request->validate([
        //   'name' => 'required',
        //     'price' => 'required',
        //     'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        else{
            unset($input['image']);
        }

        Product::find($id)->update($input);

        return redirect()->route('product.index')
                        ->with('success','Product Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // if($product->image){
        //     @unlink('images'/$product->image);
        // }

        $product->delete();
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }
}
