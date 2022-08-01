@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Suppliers Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Supplier Name: {{ $students->supplierName }}</h5>
                        <p class="card-text">Supplier Company: {{ $students->supplierCompany }}</p>
                        <p class="card-text">Supplier Contact No: {{ $students->supplierContactNo }}</p>
                        <p class="card-text">Email Address: {{ $students->emailAddress }}</p>
                        <p class="card-text">Address: {{ $students->address }}</p>
                        <p class="card-text">Update Balance: {{ $students->updateBalance }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
