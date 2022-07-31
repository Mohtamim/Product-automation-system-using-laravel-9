@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:10px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success">Unit List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('admin/unit-type/create')}}" class="btn btn-success btn-sm" title="Add new Unit">
                            Add New Unit
                        </a><br><br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">SI</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($uniteType as $item )
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->uniteName}}</td>
                                        <td>
                                            <a href="{{url('admin/unit-type/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                                <form method="POST" action="{{ url('admin/unit-type/'.$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
