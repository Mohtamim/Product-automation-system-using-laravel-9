<?php

namespace App\Http\Controllers;

use App\Models\adminCostType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCostTypeController extends Controller
{
      public function index()
    {
        $adminCostType= adminCostType::all();
       return view('admin.AdminCostType.adminCostTypeList')->with('adminCostType', $adminCostType);
    }

    
    public function create()
    {
        return view('admin.adminCostType.adminCostTypeCreate');
    }

    
    public function store(Request $request)
    {
        $input= $request->all();
        adminCostType::create($input);
        return redirect('admin/admin-cost')->with('flash_message','adminCostType Added');
    }

    
    public function show($id)
    {
        $adminCostType = adminCostType::find($id);
        return view('admin.adminCostTypeshow')->with('uniteType',$adminCostType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminCostType  $adminCostType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminCostType = adminCostType::find($id);
        return view('admin.AdminCostType.adminCostTypeEdit')->with('adminCostType',$adminCostType);
    }

   
    public function update(Request $request, $id)
    {
        $adminCostType = adminCostType::find($id);
        $input = $request->all();
        $adminCostType->update($input);
        return redirect('admin/admin-cost')->with('flash_message', 'Unite Type Updated!');
    }

    

    public function destroy($id)
    {
        adminCostType::destroy($id);
        return redirect('admin/admin-cost')->with('flash_message', 'admin Cost type  deleted!');
    }
}
