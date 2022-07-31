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
        return view('productMaking.index')->with('materialsProducts', $productMaking);
    }

    
    public function create()
    {
        return view('productMaking.create');
    }

    
    public function store(Request $request)
    {
        $input= $request->all();
        productMaking::create($input);
        return redirect('productMaking')->with('flash_message','product Added');
    }

    public function show(productMaking $id)
    {
        $productMaking = productMaking::find($id);
        return view('productMaking.productMaking_Show')->with('productMaking',$productMaking);
    }

    
    public function edit($id)
    {
        $productMaking = productMaking::find($id);
        return view('productMaking.edit')->with('productMaking', $productMaking);
    }

    
    public function update(Request $request, $id)
    {
        $productMaking = productMaking::find($id);
        $input =$request->all();
        $productMaking->update($input);
        return redirect('productMaking')->with('flash_massage','products updated!!');
    }

    
    public function destroy(productMaking $id)
    {
        productMaking::destroy($id);
        return redirect('productMaking')->with('flash_massage','Product Deleted');
    }
}
