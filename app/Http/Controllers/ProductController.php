<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        // ORM - Object Relational Mapper
    public function index()
    {
        // SELECT * FROM dbz_db.products; from DB change to Eloquent
        $products = Product::all();

        return view('products.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('products.create');
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
            "name" => "required",
            "desc" => "required",
            "quantity" => "required",
            "price" => "required",
            "category" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg ",


        ]);

        $path = $request->file("image")->store("images", "public");


        Product::create([
            "name" => $request->name,
            "description" => $request->desc,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "category" => $request->category,
            "images"  => $path

        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // select * from products where id = 11;
        $product = Product::find($id);

        // ddd($product);
        return view('products.show',[
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
