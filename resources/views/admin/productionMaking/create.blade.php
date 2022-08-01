@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Product</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/products-making')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Products</label><br>
                            <input type="text" name="selectProduct" id="selectProduct" class="form-control"><br>
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="selectMaterials" id="selectMaterials" class="form-control"><br>
                            <label class="control-label">Materials Quantity</label><br>
                            <input type="text" name="materialsQuantity" id="materialsQuantity" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection