<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products =products::all();
        return view('products.index')->with('products', $products);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $input= $request->all();
        products::create($input);
        return redirect('products')->with('flash_message','product Added');
    }

    public function show(products $id)
    {
        $products = products::find($id);
        return view('products.productShow')->with('products',$products);
    }

    
    public function edit($id)
    {
        $products = products::find($id);
        return view('products.edit')->with('products', $products);
    }

    public function update(Request $request, $id)
    {
        $products = products::find($id);
        $input =$request->all();
        $products->update($input);
        return redirect('products')->with('flash_massage','products updated!!');
    }

    public function destroy(products $id)
    {
        products::destroy($id);
        return redirect('products')->with('flash_massage','Product Deleted');
    }
}
