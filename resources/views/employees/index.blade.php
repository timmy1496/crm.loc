@extends ('layout')
@section('title', 'Employees List')
@section ('content')
    <div class="row">
        <div class="col-2">
            <strong>id</strong>
        </div>
        <div class="col-2">
            <strong>first_name</strong>
        </div>
        <div class="col-2">
            <strong>last_name</strong>
        </div>
        <div class="col-2">
            <strong>email</strong>
        </div>
        <div class="col-2">
            <strong>phone</strong>
        </div>
        <div class="col-2">
            <strong>company_id</strong>
        </div>
    </div>
    @foreach($employees as $employee)
        <div class="row">
            <div class="col-2">
                {{ $employee->id }}
            </div>
            <div class="col-2">
                <a href="/employees/{{ $employee->id }}">{{ $employee->first_name }}</a>
            </div>
            <div class="col-2">
                {{ $employee->last_name }}
            </div>
            <div class="col-2">
                {{ $employee->email }}
            </div>
            <div class="col-2">
                {{ $employee->phone }}
            </div>
            <div class="col-2">
                {{ $employee->company_id }}
            </div>
        </div>
    @endforeach
    <button><a href="/employees/create">Ad new employee</a></button>
    <span>{{ $employees->links() }}</span>
@endsection