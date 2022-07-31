@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Production manage Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('productionManages/' .$productionManage->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$productionManage->id}}" />
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="date" id="date" class="form-control" value="{{ $productionManage->entryDate }}"><br>
                            <label class="control-label">Production No</label><br>
                            <input type="number" name="production" id="production" class="form-control" value="{{ $productionManage->productionNo }}"><br>
                            <label class="control-label">Expiry Date</label><br>
                            <input type="date" name="edate" id="edate" class="form-control" value="{{ $productionManage->expiryDate }}"><br>
                            <label class="control-label">Product Name</label><br>
                            <input type="text" name="products" id="products" class="form-control" value="{{ $productionManage->selectProductName }}"> <br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="text" name="unite" id="unite" class="form-control" value="{{ $productionManage->uniteType }}"> <br>
                            <label class="control-label">Production Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $productionManage->productionQuantity }}"> <br>
                            <label class="control-label">Selected Materials</label><br>
                            <input type="text" name="materials" id="materials" class="form-control" value="{{ $productionManage->selectedMaterials }}"> <br>
                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
