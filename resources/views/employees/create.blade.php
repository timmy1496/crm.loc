@extends ('layout')

@section('title', 'Employee create')

@section ('content')
    <form action="/employees" method="post">
        <label for="name">First name</label>
        <div class="form-group">
            <input type="text" name="first_name" value="{{ old('first_name')}}" class="form-control">
            <div>{{ $errors->first('first_name') }}</div>
        </div>
        <label for="email">Last name</label>
        <div class="form-group">
            <input type="text" name="last_name" value="{{ old('last_name')}}" class="form-control">
            <div>{{ $errors->first('last_name') }}</div>
        </div>
        <label for="phone">Email</label>
        <div class="form-group">
            <input type="text" name="email" value="{{ old('email')}}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <label for="phone">Phone</label>
        <div class="form-group">
            <input type="text" name="phone" value="{{ old('phone')}}" class="form-control">
            <div>{{ $errors->first('phone') }}</div>
        </div>
        <label for="phone"> Company</label>
        <div class="form-group">
            <input type="text" name="company_id" value="{{ old('company_id')}}" class="form-control">
            <div>{{ $errors->first('company_id') }}</div>
        </div>
        <button type="submit">Add new employee</button>
        @csrf
    </form>
@endsection