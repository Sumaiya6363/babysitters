<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use App\Models\Order;

use App\Models\Product;
use App\Models\District;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\SitterRequest;
use App\Models\ProductCategory;
use App\Models\SitterInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data['user_count'] = User::where('is_admin','user')->count();
        $data['approved_sitter_count'] = User::where('is_admin','sitter')->where('status',1)->count();
        $data['request_sitter_count'] = User::where('is_admin','sitter')->where('status',2)->count();
        $data['sitterOrderRequests'] = SitterRequest::where('status', 2)->count();
        $data['admin_count'] = User::where('is_admin','admin')->count();
        $data['blogs'] = Blog::count();
        $data['Blog_cats'] = BlogCategory::count();

        $data['total_product']=Product::count();
        $data['total_categories']=ProductCategory::count();
        $data['total_order']=Order::count();

        $data['cancel']=Order::where('status','=',0)->count();
        $data['Confirmed']=Order::where('status','=',1)->count();
        $data['pending']=Order::where('status','=',2)->count();
        $data['processing']=Order::where('status','=',3)->count();
        $data['outofdelivery']=Order::where('status','=',4)->count();
        $data['delivered']=Order::where('status','=',5)->count();
        $data['returned']=Order::where('status','=',6)->count();
        $data['failed']=Order::where('status','=',7)->count();

        return view('admin.dashboard',$data);
    }


    public function sitterProfileShow()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('sitter-profile.admin-show',$data);

    }

    public function sitterProfileEdit()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        $data['sitter'] = SitterInformation::where('user_id', Auth::user()->id)->first();
        $data['districts'] = District::get();
        return view('sitter-profile.admin-edit',$data);

    }



    public function sitterprofileChangePassword(){
        return view('sitter-profile.change-password');
    }

    public function sitterprofileChangePasswordPost(Request $request){
        $request->validate([
            'carrent_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        if(!Hash::check($request->carrent_password, auth()->user()->password)){
            $notification = array(
                'message' => 'Carrent Password Doesn\'t match!',
                'alert-type' => 'error'
                );
            return back()->with($notification);
        }

        $data = User::findOrFail(Auth::user()->id);
        $data->password = bcrypt($request->new_password);
        $data->save();
        $notification = array(
        'message' => 'Password Change Successfully !',
        'alert-type' => 'success'
        );
        return redirect()->route('sitter.profile.show')->with($notification);
    }





    public function sitterProfileUpdate(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255',
            'mobile'=>'required',
            'address'=>'required',
            // 'image'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'guardian_photo'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'nid_front'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'nid_back'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'guardian_nid_front'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'guardian_nid_back'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'self_cv'  =>  'mimes:pdf,docx',
            'home_district'  =>  'required',
            'current_district'  =>  'required',
            'nid_no'  =>  'required',
            'guardian_name'  =>  'required',
            'guardian_nid_no'  =>  'required',
            'guardian_mobile'  =>  'string',
            'guardian_relationshp'  =>  'required',
            'available_time'  =>  'required',
        ]);

        $data= User::findOrFail(Auth::user()->id);
        $data->bn_name = $request->name;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->save();

        $nurse= SitterInformation::where('user_id',Auth::user()->id)->first();

        $nurse->current_district = $request->current_district;
        $nurse->nid_no = $request->nid_no;
        $nurse->guardian_name = $request->guardian_name;
        $nurse->guardian_mobile = $request->guardian_mobile;
        $nurse->guardian_email = $request->guardian_email;
        $nurse->guardian_nid_no = $request->guardian_nid_no;
        $nurse->guardian_relationshp = $request->guardian_relationshp;
        $nurse->degree_name = $request->degree_name;
        $nurse->degree_institute = $request->degree_institute;
        $nurse->degree_group = $request->degree_group;
        $nurse->passing_year = $request->passing_year;
        $nurse->available_time = $request->available_time;
        $nurse->expected_salary = $request->expected_salary;

        if ($request->hasFile('image')) {
            if($nurse->image) {
            unlink(public_path($nurse->image));
            }
            $photo_name = time().rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/users/'), $photo_name);
            $nurse->image = 'uploads/users/'. $photo_name;
        }


        if ($request->hasFile('nid_front')) {
            if($nurse->nid_front) {
            unlink(public_path($nurse->nid_front));
            }
            $photo_name = time().rand().'.'.$request->nid_front->extension();
            $request->nid_front->move(public_path('uploads/nid/'), $photo_name);
            $nurse->nid_front = 'uploads/nid/'. $photo_name;
        }


        if ($request->hasFile('nid_back')) {
            if($nurse->nid_back) {
            unlink(public_path($nurse->nid_back));
            }
            $photo_name = time().rand().'.'.$request->nid_back->extension();
            $request->nid_back->move(public_path('uploads/nid/'), $photo_name);
            $nurse->nid_back = 'uploads/nid/'. $photo_name;
        }

        if ($request->hasFile('self_cv')) {
            if($nurse->self_cv) {
            unlink(public_path($nurse->self_cv));
            }
            $photo_name = time().rand().'.'.$request->self_cv->extension();
            $request->self_cv->move(public_path('uploads/cv/'), $photo_name);
            $nurse->self_cv = 'uploads/cv/'. $photo_name;
        }

        if ($request->hasFile('guardian_photo')) {

            if($nurse->guardian_photo) {
            unlink(public_path($nurse->guardian_photo));
            }
            $photo_name = time().rand().'.'.$request->guardian_photo->extension();
            $request->guardian_photo->move(public_path('uploads/guardian/'), $photo_name);
            $nurse->guardian_photo = 'uploads/guardian/'. $photo_name;
        }


        if ($request->hasFile('guardian_nid_front')) {
            if($nurse->guardian_nid_front) {
            unlink(public_path($nurse->guardian_nid_front));
            }
            $photo_name = time().rand().'.'.$request->guardian_nid_front->extension();
            $request->guardian_nid_front->move(public_path('uploads/guardian_nid/'), $photo_name);
            $nurse->guardian_nid_front = 'uploads/guardian_nid/'. $photo_name;
        }

        if ($request->hasFile('guardian_nid_back')) {
            if($nurse->guardian_nid_back) {
            unlink(public_path($nurse->guardian_nid_back));
            }
            $photo_name = time().rand().'.'.$request->guardian_nid_back->extension();
            $request->guardian_nid_back->move(public_path('uploads/guardian_nid/'), $photo_name);
            $nurse->guardian_nid_back = 'uploads/guardian_nid/'. $photo_name;
        }

        if($nurse->save()){
            $notification = array(
                'message' => 'Profile Update Successfully !',
                'alert-type' => 'success'
                );
                return redirect()->route('sitter.profile.show')->with($notification);
            }

    }



    // for admin profile


    public function adminProfileShow()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('admin-profile.admin-show',$data);

    }

    public function adminProfileEdit()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        $data['sitter'] = SitterInformation::where('user_id', Auth::user()->id)->first();
        $data['districts'] = District::get();
        return view('admin-profile.admin-edit',$data);

    }

    public function adminProfileUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255',
            'mobile' => 'required',
        ]);

        $data= User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->save();
        $notification = array(
            'message' => 'User Information Update Successfully !',
            'alert-type' => 'success'
            );
        return redirect()->route('admin.profile.show')->with($notification);
    }



    public function adminprofileChangePassword(){
        return view('admin-profile.change-password');
    }

    public function adminprofileChangePasswordPost(Request $request){
        $request->validate([
            'carrent_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        if(!Hash::check($request->carrent_password, auth()->user()->password)){
            $notification = array(
                'message' => 'Carrent Password Doesn\'t match!',
                'alert-type' => 'error'
                );
            return back()->with($notification);
        }

        $data = User::findOrFail(Auth::user()->id);
        $data->password = bcrypt($request->new_password);
        $data->save();
        $notification = array(
        'message' => 'Password Change Successfully !',
        'alert-type' => 'success'
        );
        return redirect()->route('admin.profile.show')->with($notification);
    }





    // for USER profile


    public function userProfileShow()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('user-profile.admin-show',$data);

    }

    public function userProfileEdit()
    {
        $data['user'] = User::where('id', Auth::user()->id)->first();
        $data['sitter'] = SitterInformation::where('user_id', Auth::user()->id)->first();
        $data['districts'] = District::get();
        return view('user-profile.admin-edit',$data);

    }

    public function userProfileUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255',
            'mobile' => 'required',
        ]);

        $data= User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->save();
        $notification = array(
            'message' => 'User Information Update Successfully !',
            'alert-type' => 'success'
            );
        return redirect()->route('user.profile.show')->with($notification);
    }



    public function userprofileChangePassword(){
        return view('user-profile.change-password');
    }

    public function userprofileChangePasswordPost(Request $request){
        $request->validate([
            'carrent_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        if(!Hash::check($request->carrent_password, auth()->user()->password)){
            $notification = array(
                'message' => 'Carrent Password Doesn\'t match!',
                'alert-type' => 'error'
                );
            return back()->with($notification);
        }

        $data = User::findOrFail(Auth::user()->id);
        $data->password = bcrypt($request->new_password);
        $data->save();
        $notification = array(
        'message' => 'Password Change Successfully !',
        'alert-type' => 'success'
        );
        return redirect()->route('user.profile.show')->with($notification);
    }

}
