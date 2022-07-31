@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Customer Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Customer: {{ $customers->customerName }}</h5>
                        <p class="card-text">Contact No: {{ $customers->contactNo }}</p>
                        <p class="card-text">Email ID: {{ $customers->emaild }}</p>
                        <p class="card-text">City Location: {{ $customers->cityLocation }}</p>
                        <p class="card-text">Address: {{ $customers->address }}</p>
                        <p class="card-text">Update Balance: {{ $customers->updatedBalance }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
