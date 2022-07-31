@extends('')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>AdminCostType Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">expenseHeadName: {{ $students->expenseHeadName }}</h5>
                        <p class="card-text">expenseCode: {{ $students->expenseCode }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection