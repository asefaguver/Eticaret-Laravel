<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::all();
        return view('home.index',['product'=>$product]);
    }    

    public function shop()
    {        
        $product=Product::all();
        $category=Category::all();
        //$productCount= DB::table('product')->count();

        return view('home.shop',['product'=>$product, 'category'=>$category]);
    }

    public function show(Category $category)
    {
        $product=Product::all();        
        return view('home/kategoriler',['category'=>$category,'product'=>$product]);
    }

    public function urunDetay(Product $product)
    {
        return view('home/urun-detay',['product'=>$product]);
    }

    public function getproduct(Request $request)
    {
        $data= Product::where('title',$request->input('search'))->first();
        //return redirect()->route('/product',['id'=>$data->id]);
        return view('home/urun-detay',compact('data'),['product'=>$data]);
        
    }
    public function profile()
    {
        return view('home.user_profile');
    } 
}
