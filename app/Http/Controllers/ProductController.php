<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function store(Request $request)
    {
        // dd($request->all());
        $product = new Product();
        $product->name=$request->name;
        $product->qty=$request->quantity;
        $product->desc=$request->desc;
        $product->price=$request->price;
        $product->save();

        return redirect('/report');

    }
    public function retrieve()
    {
        $product=Product::all();

        return view('report',['product'=>$product]);
        // dd($product);
    }
    public function show($id)
    {
        $product=Product::find($id);
        // dd($product);
        return view('show',['product'=>$product]);
    }
    public function update(Request $request,$id)
    {
//   dd($id);  
        $product=Product::find($id);
        if(!$product)
        {
            return ('product not found');
        }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->desc=$request->desc;
        $product->qty=$request->quantity;
        $product->save();
        return redirect('/report');
        





        
    }
}
