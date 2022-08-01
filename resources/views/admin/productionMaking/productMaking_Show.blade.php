@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Product Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Products: {{ $productShow->selectProduct}}</h5>
                        <p class="card-text">:Materials: {{ $productShow->selectMaterials }}</p>
                        <p class="card-text">Price: {{ $productShow->materialsQuantity }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection