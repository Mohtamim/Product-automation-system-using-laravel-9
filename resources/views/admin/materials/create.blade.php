@extends('')
@section('')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Materials</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('materials')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Materials Name</label><br>
                            <input type="text" name="materialsName" id="materialsName" class="form-control"><br>

                            <label class="control-label">Materials Code</label><br>
                            <input type="text" name="materialsCode" id="materialsCode" class="form-control"><br>

                            <label class="control-label">Materials Unite</label><br>
                            <input type="text" name="materialsUnite" id="materialsUnite" class="form-control"><br>

                            <label class="control-label">Materials Unite Price</label><br>
                            <input type="text" name="materialsUnitePrice" id="materialsUnitePrice" class="form-control"><br>

                            <label class="control-label">Update Stock</label><br>
                            <input type="decemal" name="updateStock" id="updateStock" class="form-control"><br>

                            <input type="submit" value="save" class="btn btn-success">
                            <input type="cancel" value="cancel" class="btn btn-danger">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
