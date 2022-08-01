<?php

namespace App\Http\Controllers;

use App\Models\materialsProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialsProductController extends Controller
{
    
    public function index()
    {
        $materialsProducts = materialsProduct::all();
        return view('admin.materialsProducts.index')->with('materialsProducts', $materialsProducts);
    }

    
    public function create()
    {
        return view('admin/materialsProducts.create');
    }

    public function store(Request $request)
    {
        $input= $request->all();
        materialsProduct::create($input);
        return redirect('admin/material-to-products')->with('flash_message','product Added');
    }

    
    public function show($id)
    {
        $materialsProduct = materialsProduct::find($id);
        return view('admin.materialsProducts.materialsProduct_Show')->with('products',$materialsProduct);
    }

    
    public function edit($id)
    {
        $materialsProduct = materialsProduct::find($id);
        return view('admin.materials.edit')->with('materialsProduct', $materialsProduct);
    }

    
    public function update(Request $request, $id)
    {
        $materialsProduct = materialsProduct::find($id);
        $input =$request->all();
        $materialsProduct->update($input);
        return redirect('admin/material-to-products/')->with('flash_massage','products updated!!');
    }

   
    public function destroy($id)
    {
        materialsProduct::destroy($id);
        return redirect('admin/material-to-products/')->with('flash_massage','Product Deleted');
    }
}
