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
       return view('productionManages.index')->with('productionManages', $production);
    }

    public function create()
    {
        return view('productionManages.create');
    }


    public function store(Request $request)
    {
        $input= $request->all();
        productionManage::create($input);
        return redirect('productionManage')->with('flash_message','production Added');
    }

    public function show($id)
    {
        $production = productionManage::find($id);
        return view('productionManages.show')->with('productionManages',$production);
    }

    public function edit($id)
    {
        $production = productionManage::find($id);
        return view('productionManages.edit')->with('productionManages',$production);
        
    }

    public function update(Request $request, $id)
    {
        $production =productionManage::find($id);
        $input = $request->all();
        $production->update($input);
        return redirect('productionManages')->with('flash_message', 'Production Updated!');
    }
    public function destroy($id)
    {
        productionManage::destroy($id);
        return redirect('productionManages')->with('flash_message', 'production deleted!');  
    }
}