<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\shopcart;
use App\Models\Product;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList= Orderitem::where('user_id',Auth::id())->get(); // değiştirildi order --> orderitems
        return view('home.user_order',['dataList'=>$dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $total = $request->input('total');
        $shopcart = shopcart::where('user_id',Auth::id())->get();
        //dd($shopcart);
        return view('home.order',['total'=>$total,'shopcart'=>$shopcart]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Order;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->address=$request->input('address');
        $data->total=$request->input('total');;
        $data->user_id=Auth::id();    
        //dd($data);
                
        $data->save();

        $dataList= shopcart::where('user_id',Auth::id())->get();
        
        foreach($dataList as $rs)
        {
            $data2= new Orderitem;
            $data2->user_id=Auth::id();
            $data2->product_id=$rs->product_id;
            $data2->order_id=$data->id;
            $data2->price=$rs->product->price;
            $data2->quantity=intval($rs->product_quantity);            
            $data2->save();
            /*Orderitem::create([
                'order_id'=>$data->id,
                'product_id'=>$rs->product_id,
                'quantity'=>$rs->product_quantity,
                'price'=>$rs->product->price,

            ]);*/
        }
        
        $del = shopcart::where('user_id',Auth::id());
        $del->delete();

        return redirect()->route('user_orders');
        //return view('home.order',['dataList'=>$dataList]);
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
