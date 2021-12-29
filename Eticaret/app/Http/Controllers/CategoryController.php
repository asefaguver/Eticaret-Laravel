<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('admin.category', ['categories' => $categories]);
        //return view('admin.category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.category_create');
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
            'keywords' => 'required',
            'description' => 'required',
            'slug'=>'nullable',
            'status'=>'nullable',
        ]);
    
        Category::create($request->all());
     
        return redirect('/category')->with('info','Tablonuz başarı ile eklenmiştir.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {
        return view('admin.categories.edit',['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $id)
    {
        $request->validate([
            'title' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'slug'=>'nullable',
            'status'=>'nullable',
          ]);
          
            $id->update([
              'title'=>request('title'),
              'keywords'=>request('keywords'),
              'description'=>request('description'),
              'slug'=>request('slug'),
              'status'=>request('status'),
            ]);
      
            return redirect('/category')->with('info','Tablonuz başarı ile güncellenmiştir.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $id)
    {
        $id->delete();

        return redirect('/category')->with('info','Tablonuz başarı ile silinmiştir.');
    }
}
