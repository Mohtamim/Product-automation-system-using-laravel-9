<?php

namespace App\Http\Controllers;

use App\Models\productionManage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductionManageController extends Controller
{

    public function index()
    {
       $production= productionManage::all();
       return view('admin.production-manage.index')->with('productionManages', $production);
    }

    public function create()
    {
        return view('admin.production-manage.create');
    }


    public function store(Request $request)
    {
        $input= $request->all();
        productionManage::create($input);
        return redirect('admin.production-manage.store')->with('flash_message','production Added');
    }

    public function show($id)
    {
        $production = productionManage::find($id);
        return view('admin.production-manage.show')->with('productionManages',$production);
    }

    public function edit($id)
    {
        $production = productionManage::find($id);
        return view('admin.production-manage.edit')->with('productionManages',$production);

    }

    public function update(Request $request, $id)
    {
        $production =productionManage::find($id);
        $input = $request->all();
        $production->update($input);
        return redirect('admin.production-manage.update')->with('flash_message', 'Production Updated!');
    }
    public function destroy($id)
    {
        productionManage::destroy($id);
        return redirect('admin.production-manage.destroy')->with('flash_message', 'production deleted!');
    }
}
