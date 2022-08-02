<?php

namespace App\Http\Controllers;

use App\Models\productSale;
use App\Http\Controllers\Controller;
use App\Http\Requests\productSaleRequest;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{

    public function index()
    {
       $product= productSale::all();
       return view('admin.productSale.index')->with('productSales', $product);
    }

    public function create()
    {
        return view('admin.productSale.create');
    }


    public function store(productSaleRequest $request)
    {
        $input= $request->all();
        productSale::create($input);
        return redirect('admin/products-sale')->with('flash_message','Product Added');
    }

    public function show($id)
    {
        $product = productSale::find($id);
        return view('admin.productSale.show')->with('productSales',$product);
    }

    public function edit($id)
    {
        $product = productSale::find($id);
        return view('admin.productSale.edit')->with('productSales',$product);

    }

    public function update(productSaleRequest $request, $id)
    {
        $productSales = productSale::find($id);
        $input = $request->all();
        $productSales->update($input);
        return redirect('admin/products-sale')->with('flash_message', 'product Updated!');
    }
    public function destroy($id)
    {
        productSale::destroy($id);
        return redirect('admin/products-sale')->with('flash_message', 'product deleted!');
    }
}
