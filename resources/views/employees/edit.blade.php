@extends ('layout')

@section('title', 'Edit employee')

@section ('content')
    <form action="/employees/{{ $employees->id }}" method="post">
        @method('PATCH')
        <label for="name">First name</label>
        <div class="form-group">
            <input type="text" name="first_name" value="{{ $employees->first_name }}" class="form-control">
            <div>{{ $errors->first('first_name') }}</div>
        </div>
        <label for="email">Last name</label>
        <div class="form-group">
            <input type="text" name="last_name" value="{{ $employees->last_name }}" class="form-control">
            <div>{{ $errors->first('last_name') }}</div>
        </div>
        <label for="phone">Email</label>
        <div class="form-group">
            <input type="text" name="email" value="{{ $employees->email }}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <label for="phone">Phone</label>
        <div class="form-group">
            <input type="text" name="phone" value="{{ $employees->phone}}" class="form-control">
            <div>{{ $errors->first('phone') }}</div>
        </div>
        <label for="phone">Сompany id</label>
        <div class="form-group">
            <input type="text" name="company_id" value="{{ $employees->company_id }}" class="form-control">
            <div>{{ $errors->first('company_id') }}</div>
        </div>
        <button type="submit">Сhange</button>
        @csrf
    </form>
@endsection
