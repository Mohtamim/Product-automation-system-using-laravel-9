@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Production Manage Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Entry Date: {{ $productionManage->selectCustomer }}</h5>
                        <p class="card-text">Production No: {{ $productionManage->selectProduct }}</p>
                        <p class="card-text">Expiry Date: {{ $productionManage->productPrice }}</p>
                        <p class="card-text">Product Name: {{ $productionManage->entryQuantity }}</p>
                        <p class="card-text">Unite Type: {{ $productionManage->totalAmount }}</p>
                        <p class="card-text">Production Quantity: {{ $productionManage->totalAmount }}</p>
                        <p class="card-text">Selected Materials: {{ $productionManage->entryDate }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
