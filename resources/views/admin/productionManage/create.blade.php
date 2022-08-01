@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Production Manage</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/productionManages')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="entryDate" id="entryDate" class="form-control"><br>
                            <label class="control-label">Production No</label><br>
                            <input type="number" name="productionNo" id="productionNo" class="form-control"><br>
                            <label class="control-label">Expiry Date</label><br>
                            <input type="date" name="expiryDate" id="expiryDate" class="form-control"><br>
                            <label class="control-label"> Select Product Name</label><br>
                            <input type="text" name="selectProductName" id="selectProductName" class="form-control"><br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="text" name="uniteType" id="uniteType" class="form-control"><br>
                            <label class="control-label">Production Quantity</label><br>
                            <input type="number" name="productionQuantity" id="productionQuantity" class="form-control"><br>
                            <label class="control-label">Selected Materials</label><br>
                            <input type="text" name="selectedMaterials" id="selectedMaterials" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
