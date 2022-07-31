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
                        <h5 class="card-title">Products: {{ $products->productName }}</h5>
                        <p class="card-text">:Unit Type: {{ $products->selectUniteType }}</p>
                        <p class="card-text">Price: {{ $products->productPrice }}</p>
                        <p class="card-text">Updated Stock: {{ $products->updatedStock}}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection