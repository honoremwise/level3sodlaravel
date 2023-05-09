<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function store(Request $request)
    {

        // this for checking what we are getting the user dd($request->all());
        //save a new product from product model
        $product = new Product();
        $product->name=$request->name;
        $product->qty=$request->quantity;
        $product->description=$request->desc;
        $product->price=$request->price;
        $product->save();
        // return view('product');
        // redirect to report end point or routes to view all inputted data
        return redirect ('/report');
        // return back();

    }
    //retrieve data through Product Model
    public function retrieve()
    {
        //getting all products
        $product = Product::all();
        //pass product object to the report view
        return view("report",['product'=>$product]);
    }
    
}
