@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
<<<<<<< HEAD
        <table class="table">
            <thead>
            <tr>
                <th scope="col">SI</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($uniteType as $item )
                <td>{{$loop->iteration}}</td>
                <td>{{$item->uniteName}}</td>
                <td>
                    <a href="{{url(''.$item->id)}}" class="btn btn-info btn-sm" title="View uniteType" aria-hidden="true"><i class="fa fa-eye"></i></a>
                    <a href="{{url(''.$item->id)}}" class="btn btn-primary btn-sm" title="Edit uniteType" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                        <form method="POST" action="{{ url(''.$item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

@endsection
