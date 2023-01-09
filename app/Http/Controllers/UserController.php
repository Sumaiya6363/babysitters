<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SitterMiddleware;
use App\Models\User;
use App\Models\Product;
use App\Models\SitterRequest;
use Illuminate\Http\Request;
use App\Models\SitterInformation;

class UserController extends Controller
{
   public function sitterUserIndex(){
    $data['users'] = User::where('is_admin','sitter')->get();
    return view('admin.users.sitter-index',$data);
   }

   public function sitterUserShow($id){
    $data['user'] = User::where('is_admin','sitter')->findOrFail($id);
    return view('admin.users.sitter-show',$data);
   }

   public function sitterUserEdit($id){
    $data['user'] = User::where('is_admin','sitter')->findOrFail($id);
    return view('admin.users.sitter-edit',$data);
   }

   public function sitterUserUpdate(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->save();

        $sitter_info = SitterInformation::where('user_id',$user->id)->first();
        $sitter_info->expected_salary = $request->expected_salary;
        $sitter_info->approved_salary = $request->approved_salary;
        $sitter_info->user_salary = $request->user_salary;
        $sitter_info->save();
        $notification = array(
            'message' => 'Sitter Selary Update Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('sitter.user.index')->with($notification);
        

   }

   public function activeUser(Request $request,$id){

        $data = User::findOrFail($id);
        $data->status  = 1;
        $data->save();

       $notification = array(
            'message' => 'Approved!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
   }

   public function inactiveUser($id){
        $data = User::findOrFail($id);
        $data->status = 2;
        $data->save();
        $notification = array(
            'message' => 'Approved Request!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function adminUserIndex(){
        $data['users'] = User::where('is_admin','admin')->get();
        return view('admin.users.admin-index',$data);
    }

    public function generalUserIndex(){
        $data['users'] = User::where('is_admin','user')->get();
        return view('admin.users.user-index',$data);
    }


    public function sitterRequest(){
        $data['sitters'] = User::where('is_admin','sitter')->get();
        $data['sitterrequests'] = SitterRequest::get();

        return view('admin.services.sitter-request',$data);
    }

    public function adminSitterPayment(Request $request, $id){

        $request->validate([
            'payment_approved_request' => 'required',
        ]);


        $data = SitterRequest::findOrFail($id);
        $data->payment_approved_request = $request->payment_approved_request;
        $data->save();

        $notification = array(
            'message' => 'Payment Approved Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function sitterRequestShow($id){
        $data['sitter'] = SitterRequest::findOrFail($id);
        return view('admin.services.sitter-request-show',$data);
    }


    public function sitterRequestapproved(Request $request,$id)
    {
        $request->validate([
            'status' => 'required',
            'sitter_id' => 'required',
            'amount' => 'required',
        ]);

        $data = SitterRequest::find($id);
        $data->amount = $request->amount;
        $data->sitter_id = $request->sitter_id;
        $data->status = $request->status;
        $data->payment_status = $request->payment_status;
        $data->save();

        $notification = array(
            'message' => 'Approved!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }







}
