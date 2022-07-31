@extends('products.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Product Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Products: {{ $products->selectSupplier }}</h5>
                        <p class="card-text">Materials: {{ $products->selectMarerials }}</p>
                        <p class="card-text">Unit Type: {{ $products->uniteType }}</p>
                        <p class="card-text">Unit Price: {{ $products->unitePrice}}</p>
                        <p class="card-text">Quantity: {{ $products->quantity}}</p>
                        <p class="card-text">Total Price: {{ $products->totalPrice}}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection