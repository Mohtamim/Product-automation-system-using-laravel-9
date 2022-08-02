@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Add New Product</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/material-to-products')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Supplier</label><br>
                            <input type="text" name="selectSupplier" id="selectSupplier" class="form-control"><br>
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="selectMaterials" id="selectMaterials" class="form-control"><br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="number" name="uniteType" id="uniteType" class="form-control"><br>
                            <label class="control-label">Unite Price</label><br>
                            <input type="number" name="unitePrice" id="unitePrice" class="form-control"><br>
                            <label class="control-label">Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control"><br>
                            <label class="control-label">Total Price</label><br>
                            <input type="number" name="totalPrice" id="totalPrice" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/material-to-products') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
