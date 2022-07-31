@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('/' .$products->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$products->id}}" />
                            <label class="control-label">Products</label><br>
                            <input type="text" name="products" id="products" class="form-control" value="{{$products->productName}}><br>
                            <label class="control-label">Unit Type</label><br>
                            <input type="text" name="unitType" id="unitType" class="form-control" value="{{$products->selectUniteType}}><br>
                            <label class="control-label">Price</label><br>
                            <input type="number" name="productPrice" id="productPrice" class="form-control" value="{{$products->productPrice}}><br>
                            <label class="control-label">Update Stock</label><br>
                            <input type="number" name="updatedStock" id="updatedStock" class="form-control" value="{{$products->updatedStock}}><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection