<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers= suppliers::all();
        return view('admin.suppliers.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();
        suppliers::create($input);
        return redirect('admin/suppliers')->with('flash_message','student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suppliers = suppliers::find($id);
        return view('admin.suppliers.show')->with('suppliers',$suppliers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suppliers = suppliers::find($id);
        return view('admin.suppliers.edit')->with('suppliers',$suppliers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $suppliers = suppliers::find($id);
        $input = $request->all();
        $suppliers->update($input);
        return redirect('admin/suppliers')->with('flash_message', 'suppliers Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        suppliers::destroy($id);
        return redirect('admin/suppliers')->with('flash_message', 'suppliers deleted!');
    }
}
