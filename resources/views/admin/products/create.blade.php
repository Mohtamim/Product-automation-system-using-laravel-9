@extends('products.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Product</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Products</label><br>
                            <input type="text" name="products" id="products" class="form-control"><br>
                            <label class="control-label">Unit Type</label><br>
                            <input type="text" name="unitType" id="unitType" class="form-control"><br>
                            <label class="control-label">Price</label><br>
                            <input type="number" name="productPrice" id="productPrice" class="form-control"><br>
                            <label class="control-label">Update Stock</label><br>
                            <input type="number" name="updatedStock" id="updatedStock" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection