<?php

namespace App\Http\Controllers;

use App\Models\shopcart;
use Illuminate\Support\Facades\Auth;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList= shopcart::where('user_id',Auth::id())->get();
        return view('home.shopCart',['dataList'=>$dataList]);
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
    public function store(Request $request, $id)
    {
       $data=shopcart::where('product_id',$id)->where('user_id',Auth::id())->first();
       if($data)
       {
            $data->product_quantity = $data->product_quantity + $request->input('product_quantity');
       }
       else
       {
            $data = new shopcart;
            $data->product_id=$id;
            $data->user_id=Auth::id();
            $data->product_quantity=$request->input('product_quantity');            
       }
        //dd($data);
        $data->save();        
        return redirect()->back()->with('info','Ürün sepetinize başarı ile eklenmiştir.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= shopcart::find($id);
        //dd($data);
        $data->product_quantity = $request->input('product_quantity');    
        
        $data->save();

        return redirect('/cart')->with('info','Tablonuz başarı ile güncellenmiştir.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(shopcart $id)
    {
        $id->delete();

        return redirect()->back()->with('info','Tablonuz başarı ile silinmiştir.');
    }
}
