<?php

namespace App\Http\Controllers;

use App\Models\adminiCostEntry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminiCostEntryController extends Controller
{

    public function index()
    {
        $adminCostEntry= adminiCostEntry::all();
        return view('admin.AdminCostEntry.adminCostEntryList')->with('adminCostEntry', $adminCostEntry);
    }

    public function create()
    {
        return view('admin.AdminCostEntry.adminCostEntryCreate');
    }


    public function store(Request $request)
    {
        $input= $request->all();
        adminiCostEntry::create($input);
        return redirect('admin/cost-entry')->with('flash_message','adminCostType Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminiCostEntry  $adminiCostEntry
     * @return \Illuminate\Http\Response
     */
    public function show(adminiCostEntry $adminiCostEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminiCostEntry  $adminiCostEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(adminiCostEntry $adminiCostEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminiCostEntry  $adminiCostEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminiCostEntry $adminiCostEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminiCostEntry  $adminiCostEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminiCostEntry $adminiCostEntry)
    {
        //
    }
}
