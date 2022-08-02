@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Create New Production Manage</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/production-manage')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="entryDate" id="entryDate" class="form-control @error('entryDate')
                                 is-invalid
                                  @enderror" value="{{ old('entryDate') }}">
                                  @error('entryDate')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Production No</label><br>
                            <input type="number" name="productionNo" id="productionNo" class="form-control @error('productionNo')
                                 is-invalid
                                  @enderror" value="{{ old('productionNo') }}">
                                  @error('productionNo')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Expiry Date</label><br>
                            <input type="date" name="expiryDate" id="expiryDate" class="form-control @error('expiryDate')
                                 is-invalid
                                  @enderror" value="{{ old('expiryDate') }}">
                                  @error('expiryDate')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label"> Select Product Name</label><br>
                            <input type="text" name="selectProductName" id="selectProductName" class="form-control @error('selectProductName')
                                 is-invalid
                                  @enderror" value="{{ old('selectProductName') }}">
                                  @error('selectProductName')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="text" name="uniteType" id="uniteType" class="form-control @error('uniteType')
                                 is-invalid
                                  @enderror" value="{{ old('uniteType') }}">
                                  @error('uniteType')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Production Quantity</label><br>
                            <input type="number" name="productionQuantity" id="productionQuantity" class="form-control @error('productionQuantity')
                                 is-invalid
                                  @enderror" value="{{ old('productionQuantity') }}">
                                  @error('productionQuantity')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Selected Materials</label><br>
                            <input type="text" name="selectedMaterials" id="selectedMaterials" class="form-control @error('selectedMaterials')
                                 is-invalid
                                  @enderror" value="{{ old('selectedMaterials') }}">
                                  @error('selectedMaterials')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/production-manage') }}" class="btn btn-danger btn-small" >Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
