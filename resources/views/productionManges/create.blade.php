@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Production Manage</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('productionManages')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="date" id="date" class="form-control"><br>
                            <label class="control-label">Production No</label><br>
                            <input type="number" name="productionNo" id="productionNo" class="form-control"><br>
                            <label class="control-label">Expiry Date</label><br>
                            <input type="date" name="edate" id="edate" class="form-control"><br>
                            <label class="control-label">Product Name</label><br>
                            <input type="text" name="products" id="products" class="form-control"><br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="text" name="unite" id="unite" class="form-control"><br>
                            <label class="control-label">Production Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control"><br>
                            <label class="control-label">Selected Materials</label><br>
                            <input type="text" name="materials" id="materials" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
