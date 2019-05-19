@extends ('layout')

@section('title', 'Companies List')

@section ('content')
    <div class="row">
        <div class="col-3">
            <strong>id</strong>
        </div>
        <div class="col-3">
            <strong>name</strong>
        </div>
        <div class="col-3">
            <strong>email</strong>
        </div>
        <div class="col-3">
            <strong>website</strong>
        </div>
    </div>

        <div class="row">
            <div class="col-3">
                {{ $company->id }}
            </div>
            <div class="col-3">
                {{ $company->name }}
            </div>
            <div class="col-3">
                {{ $company->email }}
            </div>
            <div class="col-3">
                {{ $company->website }}
            </div>
        </div>

    <button><a href="/companies/ {{$company->id}} /edit">Сhange</a></button>
    <form action="/companies/{{ $company->id }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Delete company</button>
    </form>
@endsection