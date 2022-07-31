@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products Sale Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('productSale/' .$productSale->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$productSale->id}}" />
                            <label class="control-label">Customer</label><br>
                            <input type="text" name="customer" id="customer" class="form-control" value="{{ $productSale->selectCustomer }}"><br>
                            <label class="control-label">Products</label><br>
                            <input type="text" name="products" id="products" class="form-control" value="{{ $productSale->selectProduct }}"><br>
                            <label class="control-label">Product Price</label><br>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $productSale->productPrice }}"><br>
                            <label class="control-label">Entry Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $productSale->entryQuantity }}"> <br>
                            <label class="control-label">Total Amount</label><br>
                            <input type="number" name="amount" id="amount" class="form-control" value="{{ $productSale->totalAmount }}"> <br>
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="date" id="date" class="form-control" value="{{ $productSale->entryDate }}"> <br>
                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
