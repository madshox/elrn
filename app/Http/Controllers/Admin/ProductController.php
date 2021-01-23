<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $products = Product::all();
        return view('admin.products.form'/*, compact('products')*/);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Product::create($request->all());
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file)
            {
                $name = time().'-'.$file->getClientOriginalName();
                $name = str_replace(' ', '-', $name);

                $file->move('storage/images', $name);
                $post->image()->create(['name'=>$name]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
//        $post = Product::create($request->all());
//        if ($request->hasFile('image')) {
//            $files = $request->file('image');
//            foreach ($files as $file)
//            {
//                $name = time().'-'.$file->getClientOriginalName();
//                $name = str_replace(' ', '-', $name);
//
//                $file->move('storage/images', $name);
//                $post->image()->create(['name'=>$name]);
//            }
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
