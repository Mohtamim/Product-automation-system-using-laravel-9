@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Add New Product</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/material-to-products')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Supplier</label><br>
<<<<<<< HEAD
                            <input type="text" name="selectSupplier" id="selectSupplier" class="form-control
                            @error('selectSupplier')
                                is-invalid
                            @enderror" value="{{ old('selectSupplier') }}"><br>
                            @error('selectSupplier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="selectMaterials" id="selectMaterials" class="form-control
                            @error('selectMaterials')
                                is-invalid
                            @enderror" value="{{ old('selectMaterials') }}"><br>
                            @error('selectMaterials')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Unite Type</label><br>
                            <input type="number" name="uniteType" id="uniteType" class="form-control
                            @error('selectMaterials')
                                is-invalid
                            @enderror" value="{{ old('uniteType') }}"><br>
                            @error('uniteType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
=======
                            <select class="form-select" name="selectSupplier" id="selectSupplier" aria-label="Default select example">
                                <option  selected class="form-control">Open this select menu</option>
                                @foreach ($supplier as $supplier)
                                <option value="{{ $supplier->supplierName }}">{{ $supplier->supplierName }}</option>
                                @endforeach
                              </select><br><br>

                            <select class="form-select" name="materialsName" id="materialsName" aria-label="Default select example">
                                <option  selected class="form-control">Select Materials</option>
                                @foreach ($material as $material)
                                <option value="{{ $material->materialsName }}">{{ $material->materialsName }}</option>
                                @endforeach
                              </select><br>
                            <label class="control-label">Unite Type</label><br>
                            <input type="number" name="uniteType" id="uniteType" value="{{ $material->uniteType }}" class="form-control">
                            <br>
>>>>>>> bda7df69faea0724847de36b18f8a31d4339c604
                            <label class="control-label">Unite Price</label><br>
                            <input type="number" name="unitePrice" id="unitePrice" class="form-control
                            @error('selectMaterials')
                            is-invalid
                            @enderror" value="{{ old('unitePrice') }}"><br>
                            @error('unitePrice')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                            @enderror
                            <label class="control-label">Quantity</label><br>
                            <input type="number" name="quantity" id="quantity" class="form-control
                            @error('quantity')
                            is-invalid
                            @enderror" value="{{ old('quantity') }}"><br>
                            @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                            @enderror
                            <label class="control-label">Total Price</label><br>
                            <input type="number" name="totalPrice" id="totalPrice" class="form-control
                            @error('quantity')
                            is-invalid
                            @enderror" value="{{ old('totalPrice') }}"><br>
                            @error('totalPrice')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                            @enderror
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/material-to-products') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
