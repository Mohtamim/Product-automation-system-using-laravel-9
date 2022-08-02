@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products Sale Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/products-sale/'.$productSales->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$productSales->id}}" />
                            <label class="control-label">Customer</label><br>
                            <input type="text" name="selectCustomer" id="selectCustomer" class="form-control" value="{{ $productSales->selectCustomer }}"><br>
                            <label class="control-label">Products</label><br>
                            <input type="text" name="selectProduct" id="selectProduct" class="form-control" value="{{ $productSales->selectProduct }}"><br>
                            <label class="control-label">Product Price</label><br>
                            <input type="number" name="productPrice" id="productPrice" class="form-control" value="{{ $productSales->productPrice }}"><br>
                            <label class="control-label">Entry Quantity</label><br>
                            <input type="number" name="entryQuantity" id="entryQuantity" class="form-control" value="{{ $productSales->entryQuantity }}"> <br>
                            <label class="control-label">Total Amount</label><br>
                            <input type="number" name="totalAmount" id="totalAmount" class="form-control" value="{{ $productSales->totalAmount }}"> <br>
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="entryDate" id="entryDate" class="form-control" value="{{ $productSales->entryDate }}"> <br>
                            <input type="submit" value="update" class="btn btn-success">
                            <a href="{{ url('admin/products-sale') }}" class="btn btn-danger btn-small" >Cancel</a>


                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
