<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
        $products=Product::all();
    
        return view('admin/product',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::all();
        return view('admin.products.create',['cat'=>$cat]);
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
            'title' => 'required',
            'keywords' => 'nullable',
            'description' => 'nullable',
            'category_id'=>'required',
            'slug'=>'nullable',
            'status'=>'nullable',
            'price'=>'required',
            'image'=>'required',
            'quantity'=>'required',
            'minquantity'=>'nullable',
            'tax'=>'nullable',
            'detail'=>'nullable',
        ]);
        
        $resimadi =rand(0,100).".".$request->image->getClientOriginalExtension();
        $yukle=$request->image->move(public_path('images'),$resimadi);

        //Product::create($request->all());
        $result = Product::create([
          'title'         =>       request('title'),
          'keywords   '   =>    request('keywords'),
          'description'   => request('description'),
          'category_id'   => request('category_id'),
          'slug       '   =>        request('slug'),
          'status     '   =>      request('status'),
          'price      '   =>       request('price'),
          'quantity   '   =>    request('quantity'),
          'minquantity'   => request('minquantity'),
          'tax        '   =>         request('tax'),
          'detail     '   =>      request('detail'),
          'image'=> $resimadi,
            
      
          ]);
     
        return redirect('/product')->with('info','Tablonuz başarı ile eklenmiştir.');
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
    public function edit(Product $id)
    {
        $cat=Category::all();
        return view('admin.products.edit',['id'=>$id,'cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $id)
    {
        $request->validate([
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'category_id'=>'required',
            'slug'=>'nullable',
            'status'=>'nullable',
            'price'=>'nullable',
            'image'=>'nullable',
            'quantity'=>'nullable',
            'minquantity'=>'nullable',
            'tax'=>'nullable',
            'detail'=>'nullable',
          ]);
      
          $id->title = request('title');
          $id->keywords = request('keywords');
          $id->description = request('description');
          $id->category_id = request('category_id');
          $id->slug = request('slug');
          $id->status = request('status');
          $id->price = request('price');
          $id->quantity = request('quantity');
          $id->minquantity = request('minquantity');
          $id->tax = request('tax');
          $id->detail = request('detail');

          if(!empty($request->image))
          {
            $resimadi = rand(0,100).".".$request->image->getClientOriginalExtension();
            $yukle = $request->image->move(public_path('images'),$resimadi);
            $id->image = $resimadi;
          }

          $id->save();
    
      
        return redirect('/product')->with('info','Tablonuz başarı ile güncellenmiştir.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {        
        $id->delete();

        return redirect('/product')->with('info','Tablonuz başarı ile silinmiştir.');
    }
}
