<?php

namespace App\Http\Controllers;

use App\Models\productSale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
 
    public function index()
    {
       $product= productSale::all();
       return view('productSale.index')->with('productSales', $product);
    }

    public function create()
    {
        return view('productSale.create');
    }


    public function store(Request $request)
    {
        $input= $request->all();
        productSale::create($input);
        return redirect('productSales')->with('flash_message','Product Added');
    }

    public function show($id)
    {
        $product = productSale::find($id);
        return view('productSale.show')->with('productSales',$product);
    }

    public function edit($id)
    {
        $product = productSale::find($id);
        return view('productSale.edit')->with('productSales',$product);
        
    }

    public function update(Request $request, $id)
    {
        $productSales = productSale::find($id);
        $input = $request->all();
        $productSales->update($input);
        return redirect('productSales')->with('flash_message', 'product Updated!');
    }
    public function destroy($id)
    {
        productSale::destroy($id);
        return redirect('productSales')->with('flash_message', 'product deleted!');  
    }
}
