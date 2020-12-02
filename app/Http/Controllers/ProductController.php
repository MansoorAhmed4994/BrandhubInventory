<?php

namespace App\Http\Controllers;

use App\Product;

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
        //
        return view('product.index')->with('product', Product::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $valiedation_from_array = [
             
            'barcode' => 'required',
            'tag_price' => 'required',
            'cost_price' => 'required',
            'sell_price' => 'required', 
            'quantity' => 'required'
            ];

        $this->validate($request, $valiedation_from_array);


        $product = new Product();
        $product->barcode = $request->barcode;
        $product->tag_price = $request->tag_price;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->quantity = $request->quantity;
        $product->created_by = '0';
        $product->updated_by ='0';
        $product->status ='active';
        $product->save();

        return redirect()->route('product.index');


        //dd($product->save());
        // if($product->save())
        // {
        //     session()->flash("success","Successfully Submited");  
        //     return redirect()->back();
        // }
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
    public function edit(Product $product)
    {
        //
        return view('product.edit')->with([
            'product' => $product, 
        ]); ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $valiedation_from_array = [
             
            'barcode' => 'required',
            'tag_price' => 'required',
            'cost_price' => 'required',
            'sell_price' => 'required', 
            'quantity' => 'required'
            ];

        $this->validate($request, $valiedation_from_array);


        
        $product->barcode = $request->barcode;
        $product->tag_price = $request->tag_price;
        $product->cost_price = $request->cost_price;
        $product->sell_price = $request->sell_price;
        $product->quantity = $request->quantity;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('product.index');
    }
}
