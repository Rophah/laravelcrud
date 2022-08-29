@extends('students.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="card-body">

                <form action=" {{ url('student/'.$students->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{ $students->id }}">
                    <label>Name</label><br/>
                    <input type="text" id="name" name="name" id="name" value="{{ $students->name }}" class="form-control">
                    <label>Address</label><br/>
                    <input type="text" id="address" name="address" id="address" value="{{ $students->address }}" class="form-control">
                    <label>Mobile</label><br/>
                    <input type="text" id="mobile" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control">
                    <input type='submit' value="Update" class="btn btn-success"><br/>
                </form>

            </div>
        </div>
    </div>

@stop
