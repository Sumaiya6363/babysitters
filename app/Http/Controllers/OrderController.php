<?php

namespace App\Http\Controllers;

use DB;
use Cart;
use Session;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'zila' => 'required',
            'thana' => 'required',
            'address' => 'required',
        ]);

        if(!Auth::check())
        {
           return redirect()->route('user.login');
        }
        DB::beginTransaction();
        try {

            $shipping = Shipping::where('user_id', Auth::user()->id)->first();
            $shipping->name = $request->name;
            $shipping->email = $request->email;
            $shipping->mobile = $request->mobile;
            $shipping->mobile_alternet = $request->mobile_alternet;
            $shipping->zila = $request->zila;
            $shipping->thana = $request->thana;
            $shipping->address = $request->address;
            $shipping->message = $request->message;
            $shipping->save();



            $order = New Order();
            $order->orderuid    = '123';
            $order->user_id     = Auth::user()->id;
            $order->billing_id  = 1;
            $order->subtotal    = Cart::subtotal();
            $order->discount    = 0;
            $order->coupon      = 0;
            $order->shipping    = 40;
            $order->vat         = Cart::tax();
            $order->total       = Cart::total() + 40;
            $order->payment_status= 1;
            $order->status      = 2;
            $order->save();

            foreach(Cart::content() as $data)
            {
                $product = Product::find($data->id);

                $orderdetail = New OrderDetail();
                $orderdetail->order_id   = $order->id;
                $orderdetail->product_id = $product->id;
                $orderdetail->qty        = $data->qty;
                $orderdetail->price      = $data->price;
                $orderdetail->total      = $data->total();
                $orderdetail->status     = 1;
                $orderdetail->save();
            }

            cart::destroy();


            DB::commit();

                $notification = array(
                    'message' => 'Your Order Successfully Completed!',
                    'alert-type' => 'success'
                );

                if($request->cash_or_pay == 'online_payment'){
                    return redirect()->route('online.custom.payment',['order'=>$order->id]);
                    
                }else{
                    if(Auth::user()->is_admin == 'sitter'){
                        return redirect()->route('sitter.dashboard');
                    }elseif(Auth::user()->is_admin == 'user')
                        return redirect()->route('user.dashboard');
                };

            
            // return redirect()->route('user.dashboard')->with($notification);
            }

            catch (\Throwable $e) {
                DB::rollback();
                throw $e;
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
