<?php

namespace App\Http\Controllers;

use App\Models\materials;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials= materials::all();
        return view('admin.materials.index')->with('materials', $materials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materials.create');
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
        materials::create($input);
        return redirect('materials')->with('flash_message','Materials Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function show(materials $id)
    {
        $materials = materials::find($id);
        return view('admin.materials.show')->with('materials',$materials);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function edit(materials $id)
    {
        $materials = materials::find($id);
        return view('admin.materials.edit')->with('materials',$materials);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materials $id)
    {
        $materials = materials::find($id);
        $input = $request->all();
        $materials->update($input);
        return redirect('materials')->with('flash_message', 'Materials Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materials  $materials
     * @return \Illuminate\Http\Response
     */
    public function destroy(materials $id)
    {
        materials::destroy($id);
        return redirect('materials')->with('flash_message', 'Materials deleted!');
    }
}
