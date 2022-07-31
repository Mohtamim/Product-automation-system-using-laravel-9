<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{

    public function index()
    {
       $customer= customers::all();
       return view('admin.customer.index')->with('customers', $customer);
    }

    public function create()
    {
        return view('admin.customer.create');
    }


    public function store(Request $request)
    {
        $input= $request->all();
        customers::create($input);
        return redirect('admin/customers')->with('flash_message','Customer Added');
    }

    public function show($id)
    {
        $customer = customers::find($id);
        return view('admin/customer.show')->with('customers',$customer);
    }

    public function edit($id)
    {
        $customer = customers::find($id);
        return view('admin.customer.edit')->with('customers',$customer);

    }

    public function update(Request $request, $id)
    {
        $customers = customers::find($id);
        $input = $request->all();
        $customers->update($input);
        return redirect('admin/customers')->with('flash_message', 'customer Updated!');
    }
    public function destroy($id)
    {
       customers::destroy($id);
        return redirect('admin/customers/')->with('flash_message', 'customer deleted!');
    }
}
