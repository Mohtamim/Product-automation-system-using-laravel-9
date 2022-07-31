@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Product Sale Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Customer: {{ $productSale->selectCustomer }}</h5>
                        <p class="card-text">Product: {{ $productSale->selectProduct }}</p>
                        <p class="card-text">Price: {{ $productSale->productPrice }}</p>
                        <p class="card-text">Quantity: {{ $productSale->entryQuantity }}</p>
                        <p class="card-text">Total Amount: {{ $productSale->totalAmount }}</p>
                        <p class="card-text">Date: {{ $productSale->entryDate }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
