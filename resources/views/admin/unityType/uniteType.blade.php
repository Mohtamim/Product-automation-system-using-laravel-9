@extends('uniteType')

@section('')
    <div class="container">
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
                <td>{{$loop->iteration}}</td>
                <td>{{$item->uniteName}}</td>
                <td>
                    <a href="{{url(''.$item->id)}}" class="btn btn-info btn-sm" title="View Student" aria-hidden="true"><i class="fa fa-eye"></i></a>
                    <a href="{{url(''.$item->id)}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                        <form method="POST" action="{{ url(''.$item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
