@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->mobile }}</td>

                                            <td>
                                                <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button
                                                        class="btn btn-info">View</button></a>
                                                <a href="{{ url('/student/' . $item->id . '/edit') }}"
                                                    title="Edit Student"><button class="btn btn-primary">Edit</button></a>

                                                <form action="{{ url('/student' . '/' . $item->id) }}" method="POST"
                                                    accept-charset="UTF-8" style="display: inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger" title="Delete Student"
                                                        onclick="return ('confirm delete?')">Delete</button>
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
