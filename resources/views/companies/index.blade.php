@extends ('layout')

@section('title', 'Companies List')

@section ('content')
    <div class="row">
        <div class="col-2">
            <strong>id</strong>
        </div>
        <div class="col-2">
            <strong>name</strong>
        </div>
        <div class="col-3">
            <strong>email</strong>
        </div>
        <div class="col-2">
            <strong>website</strong>
        </div>
        <div class="col-2">
            <strong>logo</strong>
        </div>
    </div>

    @foreach($companies as $company)
        <div class="row">
            <div class="col-2 mt-3">
               {{ $company->id }}
            </div>
            <div class="col-2 mt-3">
                <a href="/companies/{{ $company->id }}"> {{ $company->name }}</a>
            </div>
            <div class="col-3 mt-3">
                {{ $company->email }}
            </div>
            <div class="col-2 mt-3">
                {{ $company->website }}
            </div>
            <div class="col-2 mt-3">
                <img class="img-fluid" src="{{ asset('storage/'.$company->logo) }}" alt="" width="100" height="100">
            </div>
        </div>
    @endforeach
    <button><a href="/companies/create">Ad new company</a></button>
    <span>{{ $companies->links() }}</span>
@endsection