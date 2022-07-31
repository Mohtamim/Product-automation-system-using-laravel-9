@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products Sale Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('customer/' .$customers->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$customers->id}}" />
                            <label class="control-label">Customer Name</label><br>
                            <input type="text" name="customer" id="customer" class="form-control" value="{{ $customers->selectCustomer }}"><br>
                            <label class="control-label">Contact No</label><br>
                            <input type="number" name="contact" id="contact" class="form-control" value="{{ $customers->selectProduct }}"><br>
                            <label class="control-label">Email ID</label><br>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $customers->productPrice }}"><br>
                            <label class="control-label">City Locatiom</label><br>
                            <input type="text" name="location" id="location" class="form-control" value="{{ $customers->entryQuantity }}"> <br>
                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $customers->totalAmount }}"> <br>
                            <label class="control-label">Update Balance</label><br>
                            <input type="number" name="amount" id="amount" class="form-control" value="{{ $customers->entryDate }}"> <br>
                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
