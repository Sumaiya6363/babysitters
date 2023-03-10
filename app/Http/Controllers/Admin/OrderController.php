<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\Subscribe;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderAll()
    {
        $data['orderall'] = Order::get();
        return view('admin.order.all', $data);
    }

    public function orderCancel()
    {

        $data['orderall'] = Order::where('status', '=', 0)->get();
        return view('admin.order.cancel', $data);
    }
    public function orderConfirmed()
    {
        $data['orderall'] = Order::where('status', '=', 1)->get();
        return view('admin.order.confirmed', $data);
    }
    public function orderDelivered()
    {

        $data['orderall'] = Order::where('status', '=', 5)->get();
        return view('admin.order.delivered', $data);
    }
    public function orderFailed()
    {
        $data['orderall'] = Order::where('status', '=', 7)->get();
        return view('admin.order.failed', $data);
    }
    public function orderOutofDelivery()

    {
        $data['orderall'] = Order::where('status', '=', 4)->get();
        return view('admin.order.outofdelivery', $data);
    }
    public function orderPending()
    {
        $data['orderall'] = Order::where('status', '=', 2)->get();
        return view('admin.order.pending', $data);
    }
    public function orderProcessing()
    {
        $data['orderall'] = Order::where('status', '=', 3)->get();
        return view('admin.order.processing', $data);
    }

    public function orderReturn()
    {
        $data['orderall'] = Order::where('status', '=', 6)->get();

        return view('admin.order.returned', $data);
    }

    public function orderShow($id)
    {
        $ordershow = Order::find($id);
    
         $shipping  = Shipping::where('user_id',$ordershow->user_id)->first();
        
        return view('admin.order.show',compact('ordershow','shipping'));
    }



    public function paymentUpdate(Request $request, $id)
    {

        $request->validate([
            'payment_status' => ['required'],
        ]);

        $data = Order::find($id);
        $data->payment_status = $request->payment_status;
        $data->save();



        return redirect()->back();
    }

    public function orderUpdate(Request $request, $id)
    {


        $request->validate([
            'status' => ['required'],
        ]);

        $order = Order::find($id);
        $input = $request->except('_token', '_method');

        $order->fill($input)->save();



        return redirect()->back();
    }


}
