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
                            <label class="control-label">Supplier</label><br>
                            <input type="text" name="supplier" id="supplier" class="form-control" {{$products->selectSupplier}}><br>
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="materials" id="materials" class="form-control" {{$products->selectMarerials}}><br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="number" name="uniteType" id="uniteType" class="form-control" {{$products->uniteType}}><br>
                            <label class="control-label">Unite Price</label><br>
                            <input type="number" name="unitePrice" id="unitePrice" class="form-control" {{$products->unitePrice}}><br>
                            <label class="control-label">Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control" {{$products->quantity}}><br>
                            <label class="control-label">Total Price</label><br>
                            <input type="number" name="totalPrice" id="totalPrice" class="form-control" {{$products->totalPrice}}><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection