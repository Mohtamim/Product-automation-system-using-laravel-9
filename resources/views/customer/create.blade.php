@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Customer</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('customer')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Customer Name</label><br>
                            <input type="text" name="customer" id="customer" class="form-control"><br>
                            <label class="control-label">Contact No</label><br>
                            <input type="number" name="contact" id="contact" class="form-control"><br>
                            <label class="control-label">Email ID</label><br>
                            <input type="email" name="email" id="email" class="form-control"><br>
                            <label class="control-label">City/Location</label><br>
                            <input type="text" name="loocation" id="location" class="form-control"><br>
                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="adsress" class="form-control"><br>
                            <label class="control-label">Update Balance</label><br>
                            <input type="number" name="amount" id="amount" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
