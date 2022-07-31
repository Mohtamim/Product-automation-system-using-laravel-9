@extends('AdminCostEntry.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit AdminCostEntry</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('/' .$AdminCostEntry->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$AdminCostEntry->id}}" />
                            <label class="control-label">ExpenseHeadName</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" class="form-control" value="{{ $AdminCostEntry->expenseHeadName }}"><br>
                            <label class="control-label">ExpenseAmount</label><br>
                            <input type="text" name="expenseAmount" id="expenseAmount" class="form-control" value="{{ $AdminCostEntry->expenseAmount }}"><br>
                            <label class="control-label">ExpenseDate</label><br>
                            <input type="text" name="expenseDate" id="expenseDate" class="form-control" value="{{ $AdminCostEntry->expenseDate }}"><br>
                            <label class="control-label">Note</label><br>
                            <input type="text" name="note" id="note" class="form-control" value="{{ $AdminCostEntry->note }}"><br>
                            <input type="submit" value="update" class="btn btn-success">
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection