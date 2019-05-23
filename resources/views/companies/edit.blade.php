@extends ('layout')

@section('title', 'Edit company')

@section ('content')
    <form action="/companies/{{ $company->id }}" method="post">
        @method('PATCH')
        <label for="name">Name</label>
        <div class="form-group">
            <input type="text" name="name" value="{{ $company->name }}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>
        <label for="email">Email</label>
        <div class="form-group">
            <input type="text" name="email" value="{{ $company->email }}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <label for="phone">Phone</label>
        <div class="form-group">
            <input type="text" name="phone" value="{{ $company->phone }}" class="form-control">
            <div>{{ $errors->first('phone') }}</div>
        </div>
        <label for="phone">Website</label>
        <div class="form-group">
            <input type="text" name="website" value="{{ $company->website}}" class="form-control">
            <div>{{ $errors->first('website') }}</div>
        </div>
        <div class="form-group">
            <input type="file" name="logo" value="{{ $company->logo}}" class="form-control">
            <div>{{ $errors->first('website') }}</div>
        </div>
        <button type="submit">Сhange</button>
        @csrf
    </form>
@endsection
