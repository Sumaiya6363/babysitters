<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Models\District;
use App\Models\Feedback;
use App\Models\Shipping;
use App\Models\Subscribe;
use App\Models\Reservation;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\SitterRequest;
use App\Models\ProductCategory;
use App\Models\SitterInformation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{



    public function userdashboard()
    {
        $data['total_requests'] =SitterRequest::where('user_id',Auth::user()->id)->count();
        $data['shop_orders'] = Order::where('user_id',Auth::user()->id)->count();
        return view('users.dashboard',$data);
    }

    public function usersitterrequest()
    {
        $data['sitterrequests'] = SitterRequest::where('user_id',Auth::user()->id)->get();
        return view('users.sitter_request',$data);
    }


    public function userSitterPayment(Request $request, $id){
        $request->validate([
            'transaction_number' => 'required',
            'payment_method' => 'required',
        ]);


        $data = SitterRequest::findOrFail($id);
        $data->payment_approved_request = 1;
        $data->transaction_number = $request->transaction_number;
        $data->payment_method = $request->payment_method;
        $data->save();

        $notification = array(
            'message' => 'Payment Submit Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.sitters.request')->with($notification);

    }




    public function sitterDashboard()
    {
        $data['sitterrequests'] = SitterRequest::where('sitter_id',Auth::user()->id)->count();
        $data['shop_orders'] = Order::where('user_id',Auth::user()->id)->count();
        return view('sitters.dashboard',$data);
    }

    public function adminContactIndex()
    {
        $data['contacts'] = Contact::get();
        return view('admin.contact.index',$data);
    }

    public function adminContactDelete($id){
        Contact::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Contact Delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function adminSubscribeIndex()
    {
        $data['subscribes'] = Subscribe::get();
        return view('admin.subscribe.index',$data);
    }

    public function adminSubscribeDelete($id){
        Subscribe::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Subscribe Delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function sitterOrder()
    {
         $data['sitterrequests'] = SitterRequest::where('sitter_id',Auth::user()->id)->get();
         return view('sitters.orders',$data);
    }

    public function index()
    {
        $data['products']   = Product::WhereNull('deleted_at')->latest()->get();
        $data['categories'] = ProductCategory::WhereNull('deleted_at')->limit(9)->get();
        return view('homepage.pages.index',$data);
    }

    public function subscribe(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $data = new Subscribe();
        $data->email = $request->email;
        $data->save();
        $notification = array(
            'message' => 'Subscribe Submit Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function sitter(){

        $data['sitters'] = User::where('is_admin','sitter')->where('status',1)->get();
        return view('homepage.pages.sitters',$data);
    }

    public function sitterDetails($id){
        $data['seeter'] = SitterInformation::where('user_id',$id)->first();

        return view('homepage.pages.sitters-details',$data);
    }

    public function sitterRequest(Request $request)
    {

        // if(!Auth::check())
        // {
        //      $notification = array(
        //         'message' => 'Please login first for send request!',
        //         'alert-type' => 'error'
        //     );
        //     return redirect()->route('login')->with($notification);
        // }
        $data['is_sitter'] = $request->id;


        $data['sitters'] = User::where('is_admin','sitter')->where('status',1)->get();

        return view('homepage.pages.sitters-request',$data);
    }

    public function sitterRequestPost(Request $request){

        if(!Auth::check())
        {
             $notification = array(
                'message' => 'Please login first for send request!',
                'alert-type' => 'error'
            );
            return redirect()->route('login')->with($notification);
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'hire_type' => 'required',
            'start_date' => 'required',
            'payment_period' => 'required',
            'comments' => 'required',
        ]);

        $sitterinfo = SitterInformation::where('user_id',$request->sitter_id)->first();

        $data = new SitterRequest();
        $input = $request->except('_token');
        $input['user_id'] = Auth::user()->id;
        $data->fill($input)->save();

        $data->amount = $sitterinfo->approved_salary;
        $data->save();

        $notification = array(
            'message' => 'Sitter request form Successfully Submitted!',
            'alert-type' => 'success'
        );
        return redirect()->route('sitter.request.payment',$data->id)->with($notification);
        // return redirect()->route('online.payment',$request->sitter_id)->with($notification);
    }


    public function sitterpayment($id)
    {
        $data['sitterrequest'] = SitterRequest::find($id);
        return view('homepage.pages.sitters_request_payment',$data);
    }



    public function shops()
    {
         $data['categories'] = ProductCategory::WhereNull('deleted_at')->get();
         $data['products'] = Product::where('status',1)->get();
        return view('homepage.pages.shop',$data);
    }

    public function shopsDetails($slug){
        $data['product'] = Product::where('slug',$slug)->first();
        return view('homepage.pages.shop-details',$data);
    }


    public function cart(){

        return view('homepage.pages.cartpage');
    }



    public function about(){

        return view('homepage.pages.about');
    }

    public function contact(){

        return view('homepage.pages.contact');
    }


    public function contactstore(Request $request)
    {
        $request->validate([
                'name'   => 'required',
               'email'   => 'required|string|email|max:255',
               'mobile'   => 'required',
               'message' => 'required',
            ]);


            $contact = New Contact();

            $contact->name    = $request->name;
            $contact->email   = $request->email;
            $contact->mobile  = $request->mobile;
            $contact->message = $request->comments;
            $contact->status  = 1;

            $contact->save();

            $notification = array(
                'message' => 'Contact form Successfully Submitted!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    }





    public function blogs(){
        $data['blogs'] = Blog::where('status',1)->simplePaginate(6);
        return view('homepage.pages.blogs',$data);
    }

    public function blogDetails($slug){
        $data['blog'] = Blog::where('slug',$slug)->first();
        $data['categories'] = BlogCategory::where('status',1)->get();
        $data['recent_post'] = Blog::where('status',1)->latest()->limit(3)->get();
        return view('homepage.pages.blog-details',$data);
    }


    public function services()
    {
        return view('homepage.pages.services');
    }



    public function reservationstore(Request $request)
    {

        $request->validate([
            'name'  => 'required',
            'email' => 'nullable',
            'phone' => 'required|numeric',
            'person'=> 'required',
            'reservation_date'=> 'required',
            'reservation_time'=> 'required',
            'message'=> 'required',
        ]);



         $resarvation = new Reservation();

         $resarvation->name          = $request->name;
         $resarvation->email         = $request->email;
         $resarvation->phone         = $request->phone;
         $resarvation->person        = $request->person;
         $resarvation->reservation_date = $request->reservation_date;
         $resarvation->reservation_time = $request->reservation_time;
         $resarvation->message       = $request->message;
         $resarvation->status        = 1;

         $resarvation->save();

         $notification = array(
              'message' => 'Reservation Successfully Submitted!',
              'alert-type' => 'success'
          );

         return redirect()->back()->with($notification);
    }




    public function login()
    {
        return view('homepage.pages.login');
    }


    public function register()
    {
        return view('homepage.pages.register');
    }


    public function registerPost(Request $request){



        $request->validate([
            'name'  => 'required',
            'email' => 'required|email:rfc,dns|unique:users',
            'mobile' => 'required|numeric',
            'address' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->is_admin = 'user';
        $user->status = 1;
        $user->save();

        $shipping = new Shipping();
        $shipping->user_id = $user->id;
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->mobile = $request->mobile;
        $shipping->address = $request->address;
        $shipping->save();
        $notification = array(
            'message' => 'User Registation Successfully !',
            'alert-type' => 'success'
            );
        return Redirect()->route('login')->with($notification);
    }


    public function sitterRegister(){
        $data['districts'] = District::get();
        return view('homepage.pages.sitter-register',$data);
    }

    public function sitterRegisterPost(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
            'mobile'=>'required',
            'address'=>'required',
            'image'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'guardian_photo'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nid_front'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nid_back'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'guardian_nid_front'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'guardian_nid_back'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'self_cv'  =>  'required|mimes:pdf,docx',
            'home_district'  =>  'required',
            'current_district'  =>  'required',
            'nid_no'  =>  'required',
            'guardian_name'  =>  'required',
            'guardian_nid_no'  =>  'required',
            'guardian_mobile'  =>  'string',
            'guardian_relationshp'  =>  'required',
            'available_time'  =>  'required',
        ]);


        $data= new User();
        $data->bn_name = $request->name;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->password = bcrypt($request->password);
        $data->address = $request->address;
        $data->status = 2;
        $data->is_admin = 'sitter';

        if($data->save()){
            $shipping = new Shipping();
            $shipping->user_id = $data->id;
            $shipping->name = $request->name;
            $shipping->email = $request->email;
            $shipping->mobile = $request->mobile;
            $shipping->address = $request->address;
            $shipping->save();
        }

        if($data->save()){
            $nurse= new SitterInformation();
            $nurse->user_id = $data->id;
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
                    'message' => 'Sitters Registation Successfully !',
                    'alert-type' => 'success'
                    );
                return redirect()->back()->with($notification);
            }

        }



    }


    public function feedback()
    {
        $data['feedbacks'] = Feedback::latest()->get();
        return view('homepage.pages.feedback',$data);
    }


    public function feedbackstore(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'mobile'       => 'required',
            'rating'       => 'required',
            'comments'  => 'required',
        ]);

            $feedback = New Feedback();

            $feedback->name          = $request->name;
            $feedback->email         = $request->email;
            $feedback->mobile        = $request->mobile;
            $feedback->rating        = $request->rating;

            $feedback->q_food        = $request->q_food;
            $feedback->cleanliness   = $request->cleanliness;
            $feedback->q_service     = $request->q_service;
            $feedback->friendliness  = $request->friendliness;
            $feedback->speed         = $request->speed;
            $feedback->apprearance   = $request->apprearance;

            $feedback->comments      = $request->comments;

            $image = $request->file('image');
            if ($image) {
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'public/images/feedbacks/';
                $imagename = $filepath . $uniqname . '.' . $ext;
                $image->move($filepath, $imagename);
                $feedback->image = $imagename;
            }
            $feedback->save();

            $notification = array(
                'message' => 'Feedback Successfully Submitted!',
                'alert-type' => 'success'
            );

         return redirect()->back()->with($notification);
    }

    public function userShopOrder(){
        $data['shop_orders'] = Order::where('user_id',Auth::user()->id)->get();

        return view('users.shop-order',$data);

    }

    public function userShopOrderDetails($id)
    {
        $ordershow = Order::find($id);

         $shipping  = Shipping::where('user_id',$ordershow->user_id)->first();

        return view('users.shop-order-details',compact('ordershow','shipping'));
    }

    public function sitterShopOrder(){
        $data['shop_orders'] = Order::where('user_id',Auth::user()->id)->get();

        return view('sitters.shop-order',$data);

    }

    public function sitterShopOrderDetails($id)
    {
        $ordershow = Order::find($id);

         $shipping  = Shipping::where('user_id',$ordershow->user_id)->first();

        return view('sitters.shop-order-details',compact('ordershow','shipping'));
    }

    public function forgetPassword(){
        return view('auth.forget-password');
    }

    public function forgetPasswordpost(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }

}
