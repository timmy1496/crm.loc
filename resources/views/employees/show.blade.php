@extends ('layout')

@section('title', 'Employees List')

@section ('content')
    <div class="row">
        <div class="col-2">
            <strong>id</strong>
        </div>
        <div class="col-2">
            <strong>name</strong>
        </div>
        <div class="col-2">
            <strong>email</strong>
        </div>
        <div class="col-2">
            <strong>website</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            {{ $employees->id }}
        </div>
        <div class="col-2">
            {{ $employees->first_name }}
        </div>
        <div class="col-2">
            {{ $employees->last_name }}
        </div>
        <div class="col-2">
            {{ $employees->email }}
        </div>
        <div class="col-2">
            {{ $employees->phone }}
        </div>
        <div class="col-2">
            {{ $employees->company_id }}
        </div>
    </div>

    <button><a href="/employees/ {{$employees->id}} /edit">Сhange</a></button>
    <form action="/employees/{{ $employees->id }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete company</button>
    </form>
@endsection