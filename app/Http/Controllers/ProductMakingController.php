<?php

namespace App\Http\Controllers;

use App\Models\productMaking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductMakingController extends Controller
{
    
    public function index()
    {
        $productMaking =productMaking::all();
        return view('admin.productionMaking.index')->with('productsMaking', $productMaking);
    }

    
    public function create()
    {
        return view('admin.productionMaking.create');
    }

    
    public function store(Request $request)
    {
        $input= $request->all();  
        productMaking::create($input);
        return redirect('admin/products-making')->with('flash_message','product Added');
    }

    public function show($id)
    {
        $productMaking = productMaking::find($id);
        return view('admin.productionMaking.productMaking_Show')->with('productShow',$productMaking);
    }

    
    public function edit($id)
    {
        $productMaking = productMaking::find($id);
        return view('admin.productionMaking.edit')->with('productEdit', $productMaking);
    }

    
    public function update(Request $request, $id)
    {
        $productMaking = productMaking::find($id);
        $input =$request->all();
        $productMaking->update($input);
        return redirect('admin/products-making')->with('flash_massage','products updated!!');
    }

    
    public function destroy($id)
    {
        productMaking::destroy($id);
        return redirect('admin/products-making')->with('flash_massage','Product Deleted');
    }
}
