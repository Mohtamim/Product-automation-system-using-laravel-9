@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/material-to-products/' .$materialsProducts->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$materialsProducts->id}}" />
                            <label class="control-label">Supplier</label><br>
                            <input type="text" name="supplier" id="supplier" class="form-control" value="{{$materialsProducts->selectSupplier}}"><br>
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="selectMaterials" id="selectMaterials" class="form-control" value="{{$materialsProducts->selectMaterials}}"><br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="number" name="uniteType" id="uniteType" class="form-control" value="{{$materialsProducts->uniteType}}"><br>
                            <label class="control-label">Unite Price</label><br>
                            <input type="number" name="unitePrice" id="unitePrice" class="form-control" value="{{$materialsProducts->unitePrice}}"><br>
                            <label class="control-label">Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="{{$materialsProducts->quantity}}"><br>
                            <label class="control-label">Total Price</label><br>
                            <input type="number" name="totalPrice" id="totalPrice" class="form-control" value="{{$materialsProducts->totalPrice}}"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection