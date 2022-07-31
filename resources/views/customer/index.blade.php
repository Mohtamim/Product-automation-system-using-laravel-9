@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Customer List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/customer/create')}}" class="btn btn-success btn-sm" title="Add new customer">
                            Add New
                        </a><br><br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Customer Name</th>
                                        <th>Contact No</th>
                                        <th>Email ID</th>
                                        <th>City/Location</th>
                                        <th>Address</th>
                                        <th>Update Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $item )


                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->customerName}}</td>
                                        <td>{{$item->contactNo}}</td>
                                        <td>{{$item->emaild}}</td>
                                        <td>{{$item->cityLocation}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->updatedBalance}}</td>
                                        <td>
                                            <a href="{{url('/customer/'.$item->id)}}" class="btn btn-info btn-sm" title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('/customer/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('/customer/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete customer" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
