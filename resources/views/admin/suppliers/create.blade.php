@extends('')
@section('')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Suppliers</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('suppliers')}}" method="post" class="form">
                            {!! csrf_field() !!}

                            <label class="control-label">Supplier Name</label><br>
                            <input type="text" name="supplierName" id="supplierName" class="form-control"><br>

                            <label class="control-label">Supplier Company</label><br>
                            <input type="text" name="supplierCompany" id="supplierCompany" class="form-control"><br>

                            <label class="control-label">Supplier Contact No</label><br>
                            <input type="text" name="supplierContactNo" id="supplierContactNo" class="form-control"><br>

                            <label class="control-label">Email Address</label><br>
                            <input type="text" name="emailAddress" id="emailAddress" class="form-control"><br>

                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control"><br>

                            <label class="control-label">Update Balance</label><br>
                            <input type="text" name="updateBalance" id="updateBalance" class="form-control"><br>

                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
