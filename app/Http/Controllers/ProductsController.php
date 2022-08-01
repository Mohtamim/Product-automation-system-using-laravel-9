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
        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $input= $request->all();
        products::create($input);
        return redirect('admin/products')->with('flash_message','product Added');
    }

    public function show($id)
    {
        $products = products::find($id);
        return view('admin.products.product_Show')->with('products',$products);
    }

    
    public function edit($id)
    {
        $products = products::find($id);
        return view('admin.products.edit')->with('products', $products);
    }

    public function update(Request $request, $id)
    {
        $products = products::find($id);
        $input =$request->all();
        $products->update($input);
        return redirect('admin/products/')->with('flash_massage','products updated!!');
    }

    public function destroy($id)
    {
        products::destroy($id);
        return redirect('admin/products/')->with('flash_massage','Product Deleted');
    }
}
