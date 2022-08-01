@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Edit AdminCostEntry</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/cost-entry/'.$adminCostEntry->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$adminCostEntry->id}}" />
                            <label class="control-label">ExpenseHeadName</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" class="form-control" value="{{ $adminCostEntry->expenseHeadName }}"><br>
                            <label class="control-label">ExpenseAmount</label><br>
                            <input type="text" name="expenseAmount" id="expenseAmount" class="form-control" value="{{ $adminCostEntry->expenseAmount }}"><br>
                            <label class="control-label">ExpenseDate</label><br>
                            <input type="text" name="expenseDate" id="expenseDate" class="form-control" value="{{ $adminCostEntry->expenseDate }}"><br>
                            <label class="control-label">Note</label><br>
                            <input type="text" name="note" id="note" class="form-control" value="{{ $adminCostEntry->note }}"><br>
                            <input type="submit" value="update" class="btn btn-success">
                            <a href="{{ url('admin/cost-entry') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
