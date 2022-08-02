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
                        <form action="{{url('admin/products')}}" method="post" class="form">
                            {!! csrf_field() !!}
                             <label class="control-label">Products</label><br>
                            <input type="text" name="productName" id="productName" class="form-control"><br>
                            <label class="control-label">Unit Type</label><br>
                            <input type="text" name="selectUniteType" id="selectUniteType" class="form-control"><br>
                            <label class="control-label">Price</label><br>
                            <input type="number" name="productPrice" id="productPrice" class="form-control"><br>
                            <label class="control-label">Update Stock</label><br>
                            <input type="number" name="updatedStock" id="updatedStock" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/products') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection