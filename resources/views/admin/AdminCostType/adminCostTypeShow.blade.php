@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">AdminCostType Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">expenseHeadName: {{ $adminCostType->expenseHeadName }}</h5>
                        <p class="card-text">expenseCode: {{ $adminCostType->expenseCode }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
