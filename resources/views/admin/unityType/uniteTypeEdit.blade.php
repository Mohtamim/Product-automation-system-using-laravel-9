@extends('')
@section('')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url() }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$uniteType->id}}" />
                            <label class="control-label">Unite Type Name</label><br>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $uniteType->uniteName }}"><br>

                            <input type="submit" value="update" class="btn btn-success">
                            <input type="cancel" value="cancel" class="btn btn-danger">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
