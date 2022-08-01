@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Materials Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Materials Name: {{ $materials->materialsName }}</h5>
                        <p class="card-text">Materials Code: {{ $materials->materialsCode }}</p>
                        <p class="card-text">Materials Unite: {{ $materials->materialsUnite }}</p>
                        <p class="card-text">Materials Unite Price: {{ $materials->materialsUnitePrice }}</p>
                        <p class="card-text">Update Stock: {{ $materials->updateStock }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
