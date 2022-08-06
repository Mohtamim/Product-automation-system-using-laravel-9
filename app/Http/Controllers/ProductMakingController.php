<?php

namespace App\Http\Controllers;

use App\Models\productMaking;
use App\Http\Controllers\Controller;
use App\Http\Requests\proMakingValidation;
use App\Models\materials;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductMakingController extends Controller
{

    public function index()
    {
        $productMaking =productMaking::all();
        return view('admin.productionMaking.index')->with('productsMaking', $productMaking);
    }


    public function create()
    {
        $product =products::all();
        $material =materials::all();
        return view('admin.productionMaking.create')->with(['product'=> $product,'material'=> $material]);
    }


    public function store(proMakingValidation $request)
    {
        $productMaking =materials::all();
        $input =$request->all();

        $selectProduct= $request->selectProduct;
        $selectMaterials= $request->selectMaterials;
        $materialsQuantity= $request->materialsQuantity;
        $productMaking-> updateStock= $productMaking-> updateStock-$materialsQuantity;
        $productMaking->update($productMaking)->where('materialName',$selectMaterials);

    //     DB::table('materials')->where('materialsName', $selectMaterials)
    //     ->raw('SUM(updateStock - $materialsQuantity)');

    // ;

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


    public function update(proMakingValidation $request, $id)
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
