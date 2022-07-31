@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit AdminCostType</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('/' .$adminCostType->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$adminCostType->id}}" />
                            <label class="control-label">ExpenseHeadName</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" class="form-control" value="{{ $adminCostType->expenseHeadName }}"><br>
                            <label class="control-label">ExpenseCode</label><br>
                            <input type="text" name="expenseCode" id="expenseCode" class="form-control" value="{{ $adminCostType->expenseCode }}"><br>
                            <input type="submit" value="update" class="btn btn-success">
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection