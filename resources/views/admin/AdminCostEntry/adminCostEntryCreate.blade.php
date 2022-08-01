@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Admin Cost Entry</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/cost-entry')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Expense Head Name</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" class="form-control"><br>
                            <label class="control-label">ExpenseAmount</label><br>
                            <input type="number" name="expenseAmount" id="expenseAmount" class="form-control"><br>
                            <label class="control-label">ExpenseDate</label><br>
                            <input type="Date" name="expenseDate" id="expenseDate" class="form-control"><br>
                            <label class="control-label">Note</label><br>
                            <input type="text" name="note" id="note" class="form-control"><br>
                            <input type="submit" value="save" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
