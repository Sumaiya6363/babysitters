<?php

namespace App\Http\Controllers;

use App\Models\Websetting;
use Illuminate\Http\Request;

class WebsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['websetting'] = Websetting::where('id',1)->first();
        return view('admin.websetting.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function show(Websetting $websetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['websetting'] = Websetting::findOrFail($id);
        return view('admin.websetting.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Websetting::findOrFail($id);
        $input = $request->except('_token','logo','banner','footer_logo');

        if ($request->hasFile('logo')) {
            if($data->logo) {
            unlink(public_path($data->logo));
            }
            $photo_name = time().rand().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/websettings/'), $photo_name);
            $input['logo'] = 'uploads/websettings/'. $photo_name;
        }

        if ($request->hasFile('banner')) {
            if($data->banner) {
            unlink(public_path($data->banner));
            }
            $photo_name = time().rand().'.'.$request->banner->extension();
            $request->banner->move(public_path('uploads/websettings/'), $photo_name);
            $input['banner'] = 'uploads/websettings/'. $photo_name;
        }
        
        if ($request->hasFile('footer_logo')) {
            if($data->bafooter_logonner) {
            unlink(public_path($data->footer_logo));
            }
            $photo_name = time().rand().'.'.$request->footer_logo->extension();
            $request->footer_logo->move(public_path('uploads/websettings/'), $photo_name);
            $input['footer_logo'] = 'uploads/websettings/'. $photo_name;
        }
        
       
        $data->fill($input)->save();

        return redirect()->route('web-setting.index')
        ->with('success','Web Setting Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Websetting  $websetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Websetting $websetting)
    {
        //
    }
}
