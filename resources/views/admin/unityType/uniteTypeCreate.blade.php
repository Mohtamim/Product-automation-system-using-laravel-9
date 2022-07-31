@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Unite Type</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/unit-type')}}" method="post" class="form">
                            {!! csrf_field() !!}

                            <label class="control-label">Unite Name</label><br>
                            <input type="text" name="uniteName" id="uniteName" class="form-control"><br>

                            <input type="submit" value="save" class="btn btn-success">
                            <input type="Cancel" value="cancel" class="btn btn-danger">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
