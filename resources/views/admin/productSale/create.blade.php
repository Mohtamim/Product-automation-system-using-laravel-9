@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Product Sale</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/products-sale')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Customer</label><br>
                            <select  id="selectProduct" name="selectProduct"  value="{{ old('selectProduct') }}" aria-label="Default select example" class="form-select @error('selectProduct') is-invalid

                            @enderror">
                                <option  selected class="form-control">Select Customer</option>
                                @foreach ($customer as $customer)
                                <option value="{{ $customer->customerName }}">{{ $customer->customerName }}</option>
                                @endforeach
                              </select>
                              @error('selectProduct')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror<br>
                            <label class="control-label">Products</label><br>


                            <select  id="selectProduct" name="selectProduct"  value="{{ old('selectProduct') }}" aria-label="Default select example" class="form-select @error('selectProduct') is-invalid

                            @enderror">
                                <option  selected class="form-control">Select Customer</option>
                                @foreach ($product as $product)
                                <option value="{{ $product->productName }}">{{ $product->productName }}</option>
                                @endforeach
                              </select>
                              @error('selectProduct')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror<br>

                            <label class="control-label">Product Price</label><br>
                            <input type="number" name="productPrice" id="productPrice" class="form-control
                            @error('productPrice') is-invalid
                            @enderror" value="{{ old('productPrice') }}"><br>
                            @error('productPrice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Entry Quantity</label><br>
                            <input type="number" name="entryQuantity" id="entryQuantity" class="form-control
                            @error('entryQuantity') is-invalid
                            @enderror" value="{{ old('entryQuantity') }}"><br>
                            @error('entryQuantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Total Amount</label><br>
                            <input type="number" name="totalAmount" id="totalAmount" class="form-control
                            @error('totalAmount') is-invalid
                            @enderror" value="{{ old('totalAmount') }}"><br>
                            @error('totalAmount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror<br>
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="entryDate" id="entryDate" class="form-control
                            @error('entryDate') is-invalid
                            @enderror" value="{{ old('entryDate') }}"><br>
                            @error('entryDate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror<br>
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/products-sale') }}" class="btn btn-danger btn-small">Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
