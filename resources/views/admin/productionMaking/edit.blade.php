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
                        <form action="{{ url('admin/products-making/' .$productEdit->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$productEdit->id}}" />
                            <label class="control-label">Products</label><br>
                            <input type="text" name="selectProduct" id="selectProduct" class="form-control" value="{{$productEdit->selectProduct}}"><br>
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="selectMaterials" id="selectMaterials" class="form-control" value="{{$productEdit->selectMaterials}}"><br>
                            <label class="control-label">Materials Quantity</label><br>
                            <input type="text" name="materialsQuantity" id="materialsQuantity" class="form-control" value="{{$productEdit->materialsQuantity}}"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection