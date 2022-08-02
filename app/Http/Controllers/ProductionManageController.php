<?php

namespace App\Http\Controllers;

use App\Models\productionManage;
use App\Http\Controllers\Controller;
use App\Http\Requests\productionManageRequest;
use Illuminate\Http\Request;

class ProductionManageController extends Controller
{

    public function index()
    {
       $productionManages= productionManage::all();
       return view('admin.productionManage.index')->with('productionManages', $productionManages);
    }

    public function create()
    {
        return view('admin.productionManage.create');
    }


    public function store(productionManageRequest $request)
    {
        $input= $request->all();
        productionManage::create($input);
        return redirect('admin/production-manage')->with('flash_message','production Added');
    }

    public function show($id)
    {
        $production = productionManage::find($id);
        return view('admin.productionManage.show')->with('productionManages',$production);
    }

    public function edit($id)
    {
        $production = productionManage::find($id);
        return view('admin.productionManage.edit')->with('productionManage',$production);

    }

    public function update(productionManageRequest $request, $id)
    {
        $production =productionManage::find($id);
        $input = $request->all();
        $production->update($input);
        return redirect('admin/production-manage')->with('flash_message', 'Production Updated!');
    }
    public function destroy($id)
    {
        productionManage::destroy($id);
        return redirect('admin/production-manage')->with('flash_message', 'production deleted!');
    }
}
