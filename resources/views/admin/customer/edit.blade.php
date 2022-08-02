@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products Sale Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/customers/' .$customers->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$customers->id}}" />
                            <label class="control-label">Customer Name</label><br>
                            <input type="text" name="customerName" id="customerName" class="form-control" value="{{ $customers->customerName }}"><br>
                            <label class="control-label">Contact No</label><br>
                            <input type="number" name="contactNo" id="contactNo" class="form-control" value="{{ $customers->contactNo }}"><br>
                            <label class="control-label">Email ID</label><br>
                            <input type="email" name="emailId" id="emailId" class="form-control" value="{{ $customers->emailId }}"><br>
                            <label class="control-label">City Locatiom</label><br>
                            <input type="text" name="cityLocation" id="cityLocation" class="form-control" value="{{ $customers->cityLocation }}"> <br>
                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $customers->address }}"> <br>
                            <label class="control-label">Update Balance</label><br>
                            <input type="number" name="updatedBalance" id="updatedBalance" class="form-control" value="{{ $customers->updatedBalance }}"> <br>
                            <input type="submit" value="update" class="btn btn-success">
                            <a href="{{ url('admin/customers') }}" class="btn btn-danger btn-small" >Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
