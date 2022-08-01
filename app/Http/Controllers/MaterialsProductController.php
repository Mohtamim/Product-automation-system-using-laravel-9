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
        return view('admin.materialsProducts.index')->with('products', $materialsProducts);
    }


    public function create()
    {
        return view('admin.materialsProducts.create');
    }

    public function store(Request $request)
    {
        $input= $request->all();
        materialsProduct::create($input);
        return redirect('admin/material-to-products')->with('flash_message','product Added');
    }

<<<<<<< HEAD
    
    public function show($id)
=======

    public function show(materialsProduct $id)
>>>>>>> 1e7d0fbc7bc392932b3150f58d2fd59b3eaca2a0
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

<<<<<<< HEAD
   
    public function destroy($id)
=======

    public function destroy(materialsProduct $id)
>>>>>>> 1e7d0fbc7bc392932b3150f58d2fd59b3eaca2a0
    {
        materialsProduct::destroy($id);
        return redirect('admin/material-to-products/')->with('flash_massage','Product Deleted');
    }
}
